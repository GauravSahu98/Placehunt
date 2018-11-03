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
					<div class="overlay-wid">
						<div class="bottom"><?php print_r($numjobs." applied"); ?></div>
					</div>
				</div>
				<div class="widget" onclick="location.href='companies.php'" id="cmpn">
					<div class="title">All Companies</div>
					<div class="bottom"><?php print_r($numcompany." companies"); ?></div>
				</div>
				<div class="widget" onclick="location.href='problems.php'" id="tests">
					<div class="title">Practise Problems</div>
					<div class="bottom">Practice makes you perfect</div>
				</div>
				<div class="widget" id="pfmance" onclick="location.href='performance.php'">
					<div class="title">Open Source</div>
					<div class="bottom">Track contributions</div>
				</div>
				<div class="widget" onclick="location.href='profile_view.php' " id="profile">
					<div class="title">View/Edit Profile</div>
					<div class="bottom">Make an impact</div>
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