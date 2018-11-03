<?php

require_once(__DIR__.'/../includes/db.php');
require_once(__DIR__.'/../includes/studentfunctions.php');
require_once(__DIR__.'/../includes/companyfunctions.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$name=$_SESSION['name'];
$cid=getcid($name)['CID'];
$result=getcompanyprofile($cid);

$email=getcompanyemailid($name)['email'];


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
	<body class="light-grey">

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
			<?php require_once('sidenav.php');?>

			<div class="main-content">


			<div class="main">
				<!-- Page Container -->

				<!-- <input type='file' onchange="readURL(this);" /> -->
				<div class="content margin-top" style="max-width:1400px;">
				  <!-- The Grid -->
				  <div class="row-padding" id="edit">

				    <!-- Left Column -->
				    <div class="third" style="float:left;width:80%;">

				      <div class="white text-grey card-4">
				        <!-- <div class="display-container">


                  <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNWkbzIr0rgBhjLJ1OqE7gmDEU5RqOunqwW-na5kcqKfr4tZx5eg" style="width:100%" alt="Profile img" id="blah">
                  <div class="display-bottomleft container text-white">
                    <h2 id="name"><b><?php echo "$name" ?></b></h2>
                  </div> ->

				        </div> -->
				        <div class="container">
				          <h2 id="name"><i class="fa fa-briefcase fa-fw margin-right large text-green"></i><?php if (empty($result['name'])) {  echo 'Enter Company Name'; }else {echo ($result['name']);} ?></h2>
				          <p id="location"><i class="fa fa-home fa-fw margin-right large text-green"></i>
				          	 <?php if (empty($result['location'])) {  echo 'Enter Company locations'; }else {echo ($result['location']);} ?></p>
				          <p id="email"><i class="fa fa-envelope fa-fw margin-right large text-green"></i>
				          	<?php if (empty($email)) {  echo 'Enter email id'; }else {echo ($email);} ?></p>
				          <p id="contact"><i class="fa fa-phone fa-fw margin-right large text-green"></i>
				          	 <?php if (empty($result['contact'])) {  echo 'Enter Contact Number'; }else {echo ($result['contact']);} ?></p>
				          <p id="founded"><i class="fa fa-birthday-cake fa-fw margin-right large text-green"></i>
				          	<?php if (empty($result['founded'])) {  echo 'Enter Foundation Year'; }else {echo ($result['founded']);} ?></p>
				          <hr>




				        </div>
				      </div><br>


				    <!-- End Left Column -->
				    </div>

				    <!-- Right Column -->
				    <div class="twothird" style="width:80%;">

				      <div class="container card-2 white margin-bottom">
				        <p><h2 class="text-black padding-16"><i class="fa fa-suitcase fa-fw margin-right xxlarge text-green"></i>About Company</h2></p>
				        <div class="container" style="height:30vh;">
									<h5 class="opacity" id="about"><b> <?php if (empty($result['about'])) {  echo 'Write about your company'; }else {echo ($result['about']);} ?></b></h5>

								</div>
	             </div>

	 <div class="container card-2 white margin-bottom">
				<h2 class="text-black padding-16"><i class="fa fa-cubes fa-fw margin-right xxlarge text-green"></i>Why work with us</h2>
				        <div class="container" style="height:30vh;">
				            <h5 class="opacity" id="workwithus"><b> <?php if (empty($result['workwithus'])) {  echo 'Description'; }else {echo ($result['workwithus']);} ?></b></h5>


				        </div>

				      </div>



				    <!-- End Right Column -->
				    </div>

				  <!-- End Grid -->
				  </div>

				  	<button onclick="myFunction()" style="background:green;color:white;border:none;height:2%;">Update</button>

				  	<p id="demo"></p>

				  	<button onclick="saveEdits()" style="background:white;color:blue;border:1px solid blue;height:2%;" id="save">Save</button>
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
	$dict["about"] = document.getElementById("about").innerText;
	$dict["location"] = document.getElementById("location").innerText;
	$dict["contact"] = document.getElementById("contact").innerText;
	$dict["founded"] = document.getElementById("founded").innerText;
	$dict["email"] = document.getElementById("email").innerText;
  $dict["workwithus"] = document.getElementById("workwithus").innerText;

	$jsondata = JSON.stringify($dict);
	console.log($jsondata);



	$.ajax({
				url: "profileprocess.php",
				method:"POST",
				data: {data: $dict},
				dataType:"json",
				success:function(response){
					if(response.updated==true)
					{
						alert("Profile updated succesfully");
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
