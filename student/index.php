<?php 

require_once('sidenav.php');
require_once('../includes/studentfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

$numjobs = getnumappliedjobs($_SESSION['name']);
$

?>
		

		<div class="main-content">
			<div class="main">
				<div class="widget" id="appl">
					<div class="title">Applied Jobs</div>
					<!--p>10 Applied</p-->
				</div>
				<div class="widget" onclick="location.href='resume.php' " id="resume">
					<div class="title">View/Update Resume</div>
				</div>
				<div class="widget" id="tests">
					<div class="title">Scheduled Tests</div>
				</div>
				<div class="widget" id="pfmance">
					<div class="title">Performance</div>
				</div>
				<div class="widget" id="cmpn">
					<div class="title">Companies</div>
				</div>
				<div class="widget" onclick="location.href='profile.php' " id="profile">
					<div class="title">My Profile</div>
				</div>
			</div>
		</div>

		<script>
		function openNav() {

		  document.getElementById("myNav").style.width = "100%";
		  
		  var myWindow = window.open("","_self");
    	  myWindow.document.write("<p>I replaced the current window.</p>");
		}
		function closeNav() {
		  document.getElementById("myNav").style.width = "0%";
		}
		</script>
	</body>
</html>