<?php 

require_once('sidenav.php');
require_once('../includes/studentfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

$numjobs = getnumappliedjobs($_SESSION['name']);
$numcompany = getnumcompanies();


?>
		<div class="main-content">
			<div class="main">
				<div class="widget" onclick="location.href='applied.php'" id="appl">
					<div class="title">Applied Jobs</div>
					<h5><?php print_r($numjobs." applied"); ?></h5>
				</div>
				<div class="widget" onclick="location.href='companies.php'" id="cmpn">
					<div class="title">All Companies</div>
					<h5><?php print_r($numcompany." companies"); ?></h5>
				</div>
				<div class="widget" onclick="location.href='problems.php'" id="tests">
					<div class="title">Practise Problems</div>
				</div>
				<div class="widget" id="pfmance">
					<div class="title">Track Performance</div>
				</div>
				<div class="widget" onclick="location.href='profile_view.php' " id="profile">
					<div class="title">View/Edit Profile</div>
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