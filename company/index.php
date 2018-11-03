<?php

require_once('sidenav.php');
require_once('../includes/companyfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}

$numjobs = getnumpostedjobs($_SESSION['name']);
$numapplications = getnumapplications($_SESSION['name']);
$numshortlists = getnumshortlisted($_SESSION['name']);


?>
		<style>
			.text{
				color: blue;
			}
			.text:hover{
				color:black;
			}
		</style>
		<div class="main-content">
			<div class="title">
				Dashboard
			</div>
			<div class="main">
				<div class="widget" onclick="location.href='posted.php'">

					<div class="title">Posted Jobs</div>
					<div class="overlay-wid">
					    <div class="text"><?php print_r($numjobs." posted"); ?> jobs</div>
					</div>
				</div>
				<div class="widget" onclick="location.href='upload.php'">
					<div class="title">Upload a job</div>
					<!-- <div class="overlay-wid">
					    <div class="text">Here You can </div>
					</div> -->
				</div>
				<div class="widget" onclick="location.href='applications.php'">
					<div class="title">Applications</div>
					<div class="overlay-wid">
					    <div class="text"><?php print_r($numapplications); ?> applications</div>
					</div>
				</div>
				<div class="widget" onclick="location.href='slisted.php'">
					<div class="title">Shortlisted Candidates</div>
					<div class="overlay-wid">
					    <div class="text"><?php print_r($numshortlists); ?> shortlists</div>
					</div>
				</div>
				<div class="widget" onclick="location.href='profile.html'">
					<div class="title">Company Profile</div>
					<!-- <div class="overlay-wid">
					    <div class="text">Here You can view your applied jobs</div>
					</div> -->
				</div>
			</div>
		</div>
	</body>
</html>
