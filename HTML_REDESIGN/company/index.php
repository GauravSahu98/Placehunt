<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Placehunt</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		
		<script src="js/main.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>PlaceHunt</span>
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
						<a href="https://github.com/SahilSahu">
							<img src="https://images-na.ssl-images-amazon.com/images/I/710JjlwJDZL._RI_.jpg" class="avatar" alt="avatar">
						</a>
					</li>
					<li class="active">
						<a href="#">
							<span><i class="fa fa-user"></i></span>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-envelope"></i></span>
							<span>Upload</span>
						</a>
					</li>
					<li>
						<a href="slisted.html">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Shortlisted</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Analysis</span>
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
			<div id="myNav" class="overlay">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <div class="overlay-content">
			    <center><a href="https://www.google.co.in/"><span><i class="fa fa-spinner"></i></span>&nbsp;&nbsp;Visit Page</a></center>
			  </div>
			</div>
			<div class="title">
				Dashboard
			</div>
			<div class="main">
				<div class="widget" onclick="openNav()" style="background-image: url(https://images-na.ssl-images-amazon.com/images/I/710JjlwJDZL._RI_.jpg);background-size: cover;">

					<div class="title">Statistics</div>
					<div class="overlay-wid">
					    <div class="text">Here You can view your applied jobs</div>
					</div>
				</div>
				<div class="widget" onclick="openNav()">
					<div class="title">Upload a job</div>
					<div class="overlay-wid">
					    <div class="text">Here You can </div>
					</div>
				</div>
				<div class="widget" onclick="openNav()">
					<div class="title">Shortlisted Candidates</div>
					<div class="overlay-wid">
					    <div class="text">Here You can view your applied jobs</div>
					</div>
				</div>
				<div class="widget" onclick="openNav()">
					<div class="title">Company Profile</div>
					<div class="overlay-wid">
					    <div class="text">Here You can view your applied jobs</div>
					</div>
				</div>
			</div>
		</div>
		<script>
		function openNav() {
		  document.getElementById("myNav").style.width = "100%";
		}
		function closeNav() {
		  document.getElementById("myNav").style.width = "0%";
		}
		</script>
	</body>
</html>