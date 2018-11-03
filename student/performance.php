<?php

    require_once('sidenav.php');
    require_once('../includes/studentfunctions.php');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['name'])){
        header('location: ../index.php');
    }	

    $sid = getsid($_SESSION['name'])['SID'];
    $git = getsocial($sid)['github'];

    $githandle = explode("/", $git)[3];

    $all_data = json_decode(curlreq($githandle), true);
		$repos = json_decode(curlreq($githandle.'/repos'), true);
		$followers = json_decode(curlreq($githandle.'/followers'), true);
		$following = json_decode(curlreq($githandle.'/following'), true);

		$rname1 = $repos[0]['name'];
		$rdesc1 = $repos[0]['description'];
		$rlang1 = $repos[0]['language'];
		$rurl1 = $repos[0]['html_url'];
		$rname2 = $repos[1]['name'];
		$rdesc2 = $repos[1]['description'];
		$rlang2 = $repos[1]['language'];
		$rurl2 = $repos[1]['html_url'];

		$fname1 = $followers[0]['login'];
		$furl1 = $followers[0]['html_url'];
		$fname2 = $followers[1]['login'];
		$furl2 = $followers[1]['html_url'];
		$fname3 = $followers[2]['login'];
		$furl3 = $followers[2]['html_url'];

		$foname1 = $following[0]['login'];
		$fourl1 = $following[0]['html_url'];
		$foname2 = $following[1]['login'];
		$fourl2 = $following[1]['html_url'];
		$foname3 = $following[2]['login'];
		$fourl3 = $following[2]['html_url'];
    // stdClass Object
    // (
    //     [login] => gs404
    //     [id] => 19776912
    //     [node_id] => MDQ6VXNlcjE5Nzc2OTEy
    //     [avatar_url] => https://avatars3.githubusercontent.com/u/19776912?v=4
    //     [gravatar_id] => 
    //     [url] => https://api.github.com/users/gs404
    //     [html_url] => https://github.com/gs404
    //     [followers_url] => https://api.github.com/users/gs404/followers
    //     [following_url] => https://api.github.com/users/gs404/following{/other_user}
    //     [gists_url] => https://api.github.com/users/gs404/gists{/gist_id}
    //     [starred_url] => https://api.github.com/users/gs404/starred{/owner}{/repo}
    //     [subscriptions_url] => https://api.github.com/users/gs404/subscriptions
    //     [organizations_url] => https://api.github.com/users/gs404/orgs
    //     [repos_url] => https://api.github.com/users/gs404/repos
    //     [events_url] => https://api.github.com/users/gs404/events{/privacy}
    //     [received_events_url] => https://api.github.com/users/gs404/received_events
    //     [type] => User
    //     [site_admin] => 
    //     [name] => 
    //     [company] => 
    //     [blog] => 
    //     [location] => 
    //     [email] => 
    //     [hireable] => 
    //     [bio] => 
    //     [public_repos] => 2
    //     [public_gists] => 0
    //     [followers] => 3
    //     [following] => 3
    //     [created_at] => 2016-06-06T11:34:08Z
    //     [updated_at] => 2018-09-23T06:30:54Z
    // )
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Placehunt</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>


		<link rel="stylesheet" href="css/pf_view.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

		<script src="js/main.js"></script>
		<style type="text/css">
		html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
		.social a i {padding:10px;}

			.header>.user-field{
			  display: inline-block;
			  float: right;
			  padding: 10px;
			}
			.user-field>a{
			  color: white;
			  display: inline-block;
			  padding-right: 20px;
			  text-decoration:none;
			  vertical-align: top;
			  height: 30px;
			}
			.notifications
			{
			  position: relative;
			  font-size: 30px;
			  padding-top: 20px;
			}
			.circle{
			  background: red;
			  width: 15px;
			  height: 15px;
			  border-radius: 50%;
			  display: inline-block;
			  font-size: 12px;
			  color: white;
			  text-align: center;
			  position: absolute;
			  top: 15px;
			  left: 20px;
			}
			.user-img{
			  background: url(https://s3.amazonaws.com/uifaces/faces/twitter/k/128.jpg) no-repeat center center;
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  width: 70px;
			  height: 70px;
			  border-radius: 50%;
			  display: inline-block;
			  margin-right: 10px;
			  position: relative;
			  padding-top: 30px;
			}
			.fa-caret-down{
			  position: relative;
			  top: -8px;
			}
			@media screen and (max-width: 435px) {
				.header>.user-field{
				  display:none;
				}
				.user-field>a{
				  display:none;
				}
				.notifications
				{
				  display:none;
				}
				.circle{
				  display:none;
				}
				.user-img{
				  display:none;
				}
				.fa-caret-down{
				  display:none;
				}
			}
			#appl{
				position: relative;
			}
			#appl:before{
				position: absolute;
				content: "\f1ea";
				font-family: 'FontAwesome';
				color: rgba(53, 1, 132,1);
				font-size: 150px;
				padding: 25% 25% 25% 25%;
				transition: all 1.1s ease-in-out;
			}
			#appl:hover::before{
				color: red;
				font-size: 100px;
			}
			#appl>p{
				display: block;
				position: absolute;
				bottom: 0;
				color: blue;
				top: 67%;
				left: 25%;
				font-size: 36px;
			}
	-		#resume{
				position: relative;
			}
			#resume:before{
				position: absolute;
				content: "\f15c";
				font-family: 'FontAwesome';
				color: rgba(53, 1, 132,1);
				font-size: 150px;
				padding: 25% 25% 25% 25%;
				transition: all 1.1s ease-in-out;
			}
			#resume:hover::before{
				color: red;
				font-size: 100px;
			}
			#tests{
				position: relative;
			}
			#tests:before{
				position: absolute;
				content: "\f1c9";
				font-family: 'FontAwesome';
				color: rgba(53, 1, 132,1);
				font-size: 150px;
				padding: 25% 25% 25% 25%;
				transition: all 1.1s ease-in-out;
			}
			#tests:hover::before{
				color: red;
				font-size: 100px;
			}
			#pfmance{
				position: relative;
			}
			#pfmance:before{
				position: absolute;
				content: "\f1fe";
				font-family: 'FontAwesome';
				color: rgba(53, 1, 132,1);
				font-size: 150px;
				padding: 25% 25% 25% 25%;
				transition: all 1.1s ease-in-out;
			}
			#pfmance:hover::before{
				color: red;
				font-size: 100px;
			}
			#cmpn{
				position: relative;
			}
			#cmpn:before{
				position: absolute;
				content: "\f0f2";
				font-family: 'FontAwesome';
				color: rgba(53, 1, 132,1);
				font-size: 150px;
				padding: 25% 25% 25% 25%;
				transition: all 1.1s ease-in-out;
			}
			#cmpn:hover::before{
				color: red;
				font-size: 100px;
			}
			#profile{
				position: relative;
			}
			#profile:before{
				position: absolute;
				content: "\f113";
				font-family: 'FontAwesome';
				color: rgba(53, 1, 132,1);
				font-size: 150px;
				padding: 25% 25% 25% 25%;
				transition: all 1.1s ease-in-out;
			}
			#profile:hover::before{
				color: red;
				font-size: 100px;
			}
			input[type=file]{
			padding:10px;
			background:#2d2d2d;}
			.button_s {
			    background-color: rgba(0,0,0,0);
			    border: 2px solid blue;
			    color: red;
			    padding: 15px 50%;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 40px auto;
			    cursor: pointer;
			    width: 10%;
			    border-radius: 10px 10px 10px 0px;
			    transition: all 0.3s ease-in-out;
			}
			.button_s:hover {
				background: blue;
				color: white;
			}
		</style>

	

		<div class="main-content">
			<div class="main">
				<!-- Page Container -->

				<!-- <input type='file' onchange="readURL(this);" /> -->
				<div class="content margin-top" style="max-width:1400px;">
				  <!-- The Grid -->
				  <div class="row-padding" id="edit">

				    <!-- Left Column -->
				    <div class="third">

				      <div class="white text-grey card-4">
				        <div class="display-container">
				          <img src="<?php echo $all_data['avatar_url'] ?>" style="width:100%" alt="Profile img" id="blah">
				          <div class="display-bottomleft container text-white">
				            <h2 id="name"><b><?php echo $all_data['login'] ?></b></h2>
				          </div>
				        </div>
				        <div class="container">
				          <p id="title"><i class="fa fa-briefcase fa-fw margin-right large text-green"></i>URL: <?php echo $all_data['html_url'] ?></p>
				          <p id="location"><i class="fa fa-home fa-fw margin-right large text-green"></i>
				          	Bio: <?php echo $all_data['bio'] ?></p>
				          <p id="email"><i class="fa fa-envelope fa-fw margin-right large text-green"></i>
				          	Public repos: <?php echo $all_data['public_repos'] ?></p>
				          <p id="contact"><i class="fa fa-phone fa-fw margin-right large text-green"></i>
				          	Followers: <?php echo $all_data['followers'] ?></p>
				          <p id="DOB"><i class="fa fa-birthday-cake fa-fw margin-right large text-green"></i>
				          	Following: <?php echo $all_data['following'] ?></p>
				          <hr>


				          <p class="large text-theme text-black"><b><i class="fa fa-language fa-fw margin-right text-green"></i>Created at</b></p>
				          <p id="languages"><?php echo $all_data['created_at'] ?></p>
									<p class="large text-theme text-black"><b><i class="fa fa-language fa-fw margin-right text-green"></i>Updated at</b></p>
				          <p id="languages"><?php echo $all_data['updated_at'] ?></p>

				        </div>
				      </div><br>


				    <!-- End Left Column -->
				    </div>

				    <!-- Right Column -->
				    <div class="twothird">

				      <div class="container card-2 white margin-bottom">
				        <p><h2 class="text-black padding-16"><i class="fa fa-suitcase fa-fw margin-right xxlarge text-green"></i>Repositories</h2></p>
				        <div class="container">
									<h5 class="opacity" id="designation1"><b>Name: <?php print_r($rname1) ?></b></h5>
									<h5><h6 class="opacity" id="organisation1"><b>Description: <?php print_r($rdesc1) ?></b></h6></h5>
				          <h6 class="text-green" id="timespan1"><i class="fa fa-calendar fa-fw margin-right"></i>Language: <?php print_r($rlang1) ?></h6>
									<h6 class="text-blue" id="timespan1"></i>URL: <?php print_r($rurl1) ?></h6>
				          <p></p>
				          <hr>

									<h5  class="opacity" id="designation2"><b>Name: <?php print_r($rname2) ?></b></h5>
									<h5><h6 class="opacity" id="organisation2"><b>Description: <?php print_r($rdesc2) ?></b></h6></h5>
				          <h6 class="text-green" id="timespan2"><i class="fa fa-calendar fa-fw margin-right"></i>Language: <?php print_r($rlang2) ?></h6>
									<h6 class="text-blue" id="timespan1"></i>URL: <?php print_r($rurl2) ?></h6>
									<p></p>

								</div>
	 </div>

	 <div class="container card-2 white margin-bottom">
				<h2 class="text-black padding-16"><i class="fa fa-cubes fa-fw margin-right xxlarge text-green"></i>Followers</h2>
				        <div class="container">
				            <h5 class="opacity" id="projname1"><b>Name: <?php echo $fname1 ?></b></h5><h6 class="opacity text-blue" id="projdesc1">Handle: <?php echo $furl1 ?></h6>
				            <hr>
				            <h5 class="opacity" id="projname2"><b>Name: <?php echo $fname2 ?></b></h5><h6 class="opacity text-blue" id="projdesc2">Handle: <?php echo $furl2 ?></h6>
				            <hr>
				            <h5 class="opacity" id="projname3"><b>Name: <?php echo $fname3 ?></b></h5><h6 class="opacity text-blue" id="projdesc3">Handle: <?php echo $furl3 ?></h6>
				            <hr>

				        </div>

				      </div>

							<div class="container card-2 white margin-bottom">
				<h2 class="text-black padding-16"><i class="fa fa-cubes fa-fw margin-right xxlarge text-green"></i>Following</h2>
				        <div class="container">
				            <h5 class="opacity" id="projname1"><b>Name: <?php echo $foname1 ?></b></h5><h6 class="opacity text-blue" id="projdesc1">Handle: <?php echo $fourl1 ?></h6>
				            <hr>
				            <h5 class="opacity" id="projname2"><b>Name: <?php echo $foname2 ?></b></h5><h6 class="opacity text-blue" id="projdesc2">Handle: <?php echo $fourl2 ?></h6>
				            <hr>
				            <h5 class="opacity" id="projname3"><b>Name: <?php echo $foname3 ?></b></h5><h6 class="opacity text-blue" id="projdesc3">Handle: <?php echo $fourl3 ?></h6>
				            <hr>

				        </div>

				      </div>

				          <br>
				        </div>


				    <!-- End Right Column -->
				    </div>

				  <!-- End Grid -->
				  </div>

					<!-- <button onclick="saveEdits()" value="Save"> -->
				  <!-- End Page Container -->
				</div>

				<footer class="container green center margin-top social" style="width: 100%;">
				  <p>Find me on social media.</p>
				  <a href="https://facebook.com/"  target="_blank" class=" "><i class="fa fa-facebook-official hover-opacity  text-white"></i></a>
				  <a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram hover-opacity  text-white"></i></a>
				  <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter hover-opacity  text-white"></i></a>
				  <a href="https://www.linkedin.com/in/sahil-sahu-72149b153/" target="_blank"><i class="fa fa-linkedin hover-opacity  text-white"></i></a>
				  <a href="https://codepen.io/" target="_blank"><i class="fa fa-codepen hover-opacity  text-white"></i></a>
				  <a href="https://github.com/SahilSahu" target="_blank"><i class="fa fa-github hover-opacity  text-white"></i></a>
				</footer>
			</div>
		</div>

	</body>
</html>
