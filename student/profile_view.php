<?php

require_once(__DIR__.'/../includes/db.php');
require_once(__DIR__.'/../includes/studentfunctions.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$name=$_SESSION['name'];
$sid=getsid($name)['SID'];
$result=getstudentprofile($sid);
$email=getemailid($name)['email'];


// print_r($result);

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

		<script type="text/javascript">
			function myFunction() {
			    document.getElementById("edit").contentEditable = true;
			    document.getElementById("demo").innerHTML = "The element above is now editable. Try to change its text.";
			}
			function saveEdits(){
				var editElem = document.getElementById('edit');
				var userVersion = editElem.innerHTML;
				localStorage.userEdits = userVersion;
	
			}
			
			function checkEdits(){
				if(localStorage.userEdits != null)
					document.getElementById('edit').innerHTML = localStorage.userEdits;
			}
			// function readURL(input) {
   //          if (input.files && input.files[0]) {
   //              var reader = new FileReader();
   //              reader.onload = function (e) {
   //                  $('#blah')
   //                      .attr('src', e.target.result);
   //              };
   //              reader.readAsDataURL(input.files[0]);
   //          }
   //      }
		</script>
	</head>
	<body class="light-grey" onload="checkEdits()">

			<div class="header">
				<div class="logo">
					<i class="fa fa-tachometer"></i>
					<span>PlaceHunt</span>
				</div>
				<div class="user-field">
				  <a href="#" class="notifications"><i class="fa fa-bell-o" aria-hidden="true"><span class="circle">5+</span></i></a>
				  <a href="#">
				    <div class="user-img"></div>
				    <i class="fa fa-caret-down" aria-hidden="true"></i>
				  </a>
				</div>
				<a href="#" class="nav-trigger"><span></span></a>
			</div>
			<div class="side-nav">
				<div class="logo">
					<i class="fa fa-tachometer"></i>
					<span>PlaceHunt</span>
				</div>
				<nav>
					<ul>

						<li>
							<a href="https://github.com/">
								<img src="https://images-na.ssl-images-amazon.com/images/I/710JjlwJDZL._RI_.jpg" class="avatar" alt="avatar">
							</a>
						</li>
						<li class="active">
							<a href="index.php">
								<span><i class="fa fa-user"></i></span>
								<span>Dashboard</span>
							</a>
						</li>
						<li>
							<a href="applied.php">

								<span><i class="fa fa-envelope"></i></span>
								<span>Applied</span>
							</a>
						</li>
						<li>
							<a href="resume.php">
								<span><i class="fa fa-bar-chart"></i></span>
								<span>Resume</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>Tests</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>Performance</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>Companies</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>Notifications</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</nav>
				
			</div>

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


				          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNWkbzIr0rgBhjLJ1OqE7gmDEU5RqOunqwW-na5kcqKfr4tZx5eg" style="width:100%" alt="Profile img" id="blah">
				          <div class="display-bottomleft container text-white">
				            <h2 id="name"><b><?php echo "$name" ?></b></h2>
				          </div>
				        </div>
				        <div class="container">
				          <p id="title"><i class="fa fa-briefcase fa-fw margin-right large text-green"></i><?php echo $result['about'] ?></p>
				          <p id="location"><i class="fa fa-home fa-fw margin-right large text-green"></i>
				          	<?php echo $result['location'] ?></p>
				          <p id="email"><i class="fa fa-envelope fa-fw margin-right large text-green"></i>
				          	<?php echo $email ?></p>
				          <p id="contact"><i class="fa fa-phone fa-fw margin-right large text-green"></i>
				          	<?php echo $result['contact'] ?></p>
				          <p id="DOB"><i class="fa fa-birthday-cake fa-fw margin-right large text-green"></i>
				          	<?php echo $result['dob'] ?></p>
				          <hr>

				          
				          <p class="large text-theme text-black"><b><i class="fa fa-language fa-fw margin-right text-green"></i>Languages</b></p>
				          <p id="languages"><?php echo $result['languages'] ?></p>
				          
				        </div>
				      </div><br>

			
				    <!-- End Left Column -->
				    </div>

				    <!-- Right Column -->
				    <div class="twothird">
				    
				      <div class="container card-2 white margin-bottom">
				        <h2 class="text-black padding-16"><i class="fa fa-suitcase fa-fw margin-right xxlarge text-green"></i>Professional Work</h2>
				        <div class="container">
									<h5 class="opacity" id="designation1"><b>Web Designer & Developer</b></h5>
									<h5><h6 class="opacity" id="organisation1"><b>Sahil Sahu Pvt Ltd.</b></h6></h5>
				          <h6 class="text-green" id="timespan1"><i class="fa fa-calendar fa-fw margin-right"></i>Oct 2014 - <span class="tag green round">Current</span></h6>
				          <p></p>
				          <hr>

									<h5  class="opacity" id="designation2"><b>Web Designer & Developer</b></h5>
									<h5><h6 class="opacity" id="organisation2"><b>Sahil Sahu Pvt Ltd.</b></h6></h5>
				          <h6 class="text-green" id="timespan2"><i class="fa fa-calendar fa-fw margin-right"></i>Oct 2014 - <span class="tag green round">Current</span></h6>
									<p></p>
									
								</div>
	 </div>
								
	 <div class="container card-2 white margin-bottom">
				<h2 class="text-black padding-16"><i class="fa fa-cubes fa-fw margin-right xxlarge text-green"></i>Projects</h2>
				        <div class="container">
				            <h5 class="opacity" id="projname1"><b> One</b></h5><h6 class="opacity" id="projdesc1"> (One liner) </h6>
				            <hr>
				            <h5 class="opacity" id="projname2"><b> Two</b></h5><h6 class="opacity" id="projdesc2"> (One liner) </h6>
				            <hr>
				            <h5 class="opacity" id="projname3"><b> Three</b></h5><h6 class="opacity" id="projdesc3"> (One liner) </h6>
				            <hr>
				            
				        </div>
				        
				      </div>

				      <div class="container card-2 white margin-bottom">
				        <h2 class="text-black padding-16"><i class="fa fa-graduation-cap fa-fw margin-right xxlarge text-green"></i>Education</h2>
				        <div class="container">
				          <h5 class="opacity" id="eduname1"><b>Vivekanand Education Society's Institute of Technology, Chembur</b></h5>
				          <h6 class="text-green" id="eduduration1"><i class="fa fa-calendar fa-fw margin-right"></i>2016 - Present</h6>
									<p>B.E.</p>
									<p id="eduscore1" style="display:inline;"> 9.0 </p>&nbsp;/&nbsp;10.0
				          <hr>
				        </div>
				        <div class="container">
				          <h5 class="opacity" id="eduname2"><b>SIES College of Arts and Science, Sion</b></h5>
				          <h6 class="text-green" id="eduduration2"><i class="fa fa-calendar fa-fw margin-right"></i>2014 - 2016</h6>
				          <p>H.S.C</p>
									<p id="eduscore2" style="display:inline;">93.20</p>&nbsp;%
				          <hr>
				        </div>
				        <div class="container">
				          <h5 class="opacity" id="eduname3"><b>Holy Cross High School, Kurla</b></h5>
				          <h6 class="text-green" id="eduduration3"><i class="fa fa-calendar fa-fw margin-right"></i>2002 - 2014</h6>
				          <p>S.S.C</p>
									<p id="eduscore3" style="display:inline;">95.60</p>&nbsp;%
				          <hr>
				        </div>         
				      </div>

	 <div class="container card-2 white margin-bottom">
				<h2 class="text-black padding-16"><i class="fa fa-cubes fa-fw margin-right xxlarge text-green"></i>Awards and Achievements</h2>
				        <div class="container">
				            <h5 class="opacity" id="awardname1"><b> One</b></h5><h6 class="opacity" id="awarddesc1"> (One liner) </h6>
				            <hr>
				            <h5 class="opacity" id="awardname2"><b> Two</b></h5><h6 class="opacity" id="awarddesc2"> (One liner) </h6>
				            <hr>
				            <h5 class="opacity" id="awardname3"><b> Three</b></h5><h6 class="opacity" id="awarddesc3"> (One liner) </h6>
				            <hr>
				            
				        </div>
				        
				      </div>
							
							<div class="container card-2 white margin-bottom">
				        <h2 class="text-black padding-16"><i class="fa fa-suitcase fa-fw margin-right xxlarge text-green"></i>Personal Work</h2>
				        <div class="container">
				          <h5 class="opacity" style="display:inline;"><i class="fa fa-github fa-2x fa-fw margin-right text-green"></i><b> Github</b> </h5><h5 class="opacity" id="link1">https://github.com/ </h5>
				          <p></p>
				          <hr>
				        </div>
				        <div class="container">
				          <h5 class="opacity" style="display:inline;"><i class="fa fa-codepen fa-2x fa-fw margin-right text-green"></i><b>Linkedin</b> </h5><h5 class="opacity" id="link2">https://linkedin.com/in/</h5>
				          <p></p>
				          <hr>
				        </div>

				        
							</div>
							
				      <div class="container card-2 white margin-bottom margin-top text-grey">
				        <h2 class="text-black padding-16"><i class="fa fa-download fa-fw margin-right xxlarge text-green"></i> Resume (.docx file)</h2>
				          <div class="">
				            <form action="#" method="get"><!-- in place of # we could have a doc link -->
				            <button type="submit" class="btn white border border-blue round"><i class="fa fa-download"></i> Download Resume</button>
				          </form>
				          </div>
				          
				            
				          <br>
				        </div>


				    <!-- End Right Column -->
				    </div>
				    
				  <!-- End Grid -->
				  </div>
				  
				  	<button onclick="myFunction()">Update</button>

				  	<p id="demo"></p>

				  	<button onclick="saveEdits()" id="save">Save</button>
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
<script>
 $("#save").click(function(){

	$dict = {};

	$dict["name"] = document.getElementById("name").innerText;
	$dict["about"] = document.getElementById("title").innerText;
	$dict["location"] = document.getElementById("location").innerText;
	$dict["contact"] = document.getElementById("contact").innerText;
	$dict["dob"] = document.getElementById("DOB").innerText;
	$dict["email"] = document.getElementById("email").innerText;
	$dict["languages"] = document.getElementById("languages").innerText;
	$dict["designation1"] = document.getElementById("designation1").innerText;
	$dict["timespan1"] = document.getElementById("timespan1").innerText;
	$dict["organisation1"] = document.getElementById("organisation1").innerText;
	$dict["designation2"] = document.getElementById("designation2").innerText;
	$dict["timespan2"] = document.getElementById("timespan2").innerText;
	$dict["organisation2"] = document.getElementById("organisation2").innerText;
	$dict["projname1"] = document.getElementById("projname1").innerText;
	$dict["projname2"] = document.getElementById("projname2").innerText;
	$dict["projname3"] = document.getElementById("projname3").innerText;
	$dict["projdesc1"] = document.getElementById("projdesc1").innerText;
	$dict["projdesc2"] = document.getElementById("projdesc2").innerText;
	$dict["projdesc3"] = document.getElementById("projdesc3").innerText;
	$dict["eduname1"] = document.getElementById("eduname1").innerText;
	$dict["eduname2"] = document.getElementById("eduname2").innerText;
	$dict["eduname3"] = document.getElementById("eduname3").innerText;
	$dict["eduduration1"] = document.getElementById("eduduration1").innerText;
	$dict["eduduration2"] = document.getElementById("eduduration2").innerText;
	$dict["eduduration3"] = document.getElementById("eduduration3").innerText;
	$dict["eduscore1"] = document.getElementById("eduscore1").innerText;
	$dict["eduscore2"] = document.getElementById("eduscore2").innerText;
	$dict["eduscore3"] = document.getElementById("eduscore3").innerText;
	$dict["awardname1"] = document.getElementById("awardname1").innerText;
	$dict["awardname2"] = document.getElementById("awardname2").innerText;
	$dict["awardname3"] = document.getElementById("awardname3").innerText;
	$dict["awarddesc1"] = document.getElementById("awarddesc1").innerText;
	$dict["awarddesc2"] = document.getElementById("awarddesc2").innerText;
	$dict["awarddesc3"] = document.getElementById("awarddesc3").innerText;
	$dict["link1"] = document.getElementById("link1").innerText;
	$dict["link2"] = document.getElementById("link2").innerText;
	
	$jsondata = JSON.stringify($dict);
	console.log($jsondata);

	console.log("hii");

	$.ajax({
				url: "profileprocess.php",
				method:"POST",
				data: {data: $dict},
				dataType:"json",
				success:function(response){
					if(response.updated==true)
					{
						toastr["success"]("Profile updated successfully", $dict['name']);
						setTimeout("location.href = 'profile_view.php'", 1500);
					}else{
						toastr["error"]("Profile could not be updated. Try again", "We're sorry");
						setTimeout("location.href = 'profile_view.php'", 1500);
					}
					
				},
				error: function () {
						toastr["error"]("Profile could not be updated. Try again", "We're sorry");
						setTimeout("location.href = 'profile_view.php'", 1500);
				}  
						
				
		});
 });

</script>
	</body>
</html>
