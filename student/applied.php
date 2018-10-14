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
		<style>
		table {
		    border-collapse: collapse;
		    width: 100%;
		}
		th {
			background: blue;
		}
		th, td {
		    padding: 8px;
		    text-align: left;
		    border-bottom: 2px solid #ddd;
		}
		tr:hover {background-color:#f5f5f5;}
		</style>
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
						<a href="https://github.com/">
							<img src="https://images-na.ssl-images-amazon.com/images/I/710JjlwJDZL._RI_.jpg" class="avatar" alt="avatar">
						</a>
					</li>
					<li>
						<a href="index.php">
							<span><i class="fa fa-user"></i></span>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="active">
						<a href="#">
							<span><i class="fa fa-envelope"></i></span>
							<span>Applied</span>
						</a>
					</li>
					<li>
						<a href="#">
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
			<div class="title">
				Applied Jobs
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Applied Jobs</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					  </tr>
					  <tr>
					    <td>Peter</td>
					    <td>Griffin</td>
					    <td>$100</td>
					  </tr>
					  <tr>
					    <td>Lois</td>
					    <td>Griffin</td>
					    <td>$150</td>
					  </tr>
					  <tr>
					    <td>Joe</td>
					    <td>Swanson</td>
					    <td>$300</td>
					  </tr>
					  <tr>
					    <td>Cleveland</td>
					    <td>Brown</td>
					    <td>$250</td>
					  </tr>
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your applied jobs</div>
					</div-->
				</div>
			</div>
		</div>
	</body>
</html>