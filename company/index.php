<?php

require_once('sidenav.php');
require_once('../includes/companyfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}

$numjobs = getnumpostedjobs($_SESSION['name']);


?>
		<div class="main-content">
			<div class="title">
				Dashboard
			</div>
			<div class="main">
				<div class="widget" onclick="location.href='posted.php'" style="background-image: url(https://www.dentistfriend.com//uploads/praxisimages/dental-jobs-opp.png);background-size: cover;">

					<div class="title">Posted Jobs</div>
					<div class="overlay-wid">
					    <div class="text"><?php print_r($numjobs." posted"); ?> jobs</div>
					</div>
				</div>
				<div class="widget" onclick="location.href='upload.php'" style="background-image: url(https://www.shareicon.net/data/512x512/2017/01/06/868273_sign_512x512.png);background-size: cover;">
					<div class="title">Upload a job</div>
					<!-- <div class="overlay-wid">
					    <div class="text">Here You can </div>
					</div> -->
				</div>
				<div class="widget" onclick="openNav()">
					<div class="title">Shortlisted Candidates</div>
					<!-- <div class="overlay-wid">
					    <div class="text">Here You can view your applied jobs</div>
					</div> -->
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
