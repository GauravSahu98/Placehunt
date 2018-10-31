<?php 

require_once('../includes/studentfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}

?>

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
		<link rel="stylesheet" href="../vendors/bootstrap-toastr/toastr.min.css">
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="js/main.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../vendors/bootstrap-toastr/toastr.min.js"></script>
		<script>
    toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "1500",
            "showEasing": "swing",
            "extendedTimeOut": "1000",
            "hideEasing": "linear",
            "hideMethod": "fadeOut"
            "showMethod": "fadeIn",
          }
  </script>
	</head>
	<body>

			<div class="header">
				<div class="logo">
					<i class="fa fa-tachometer"></i>
					<span>PlaceHunt</span>
				</div>
				<div class="user-field">
				  <a href="#" class="notifications"><i class="fa fa-bell-o" aria-hidden="true"><span class="circle">5+</span></i></a>
				  <a href="#">
				    
				   <p>HIII <?php echo $_SESSION['name'] ?></p>
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
								<span>Applied Jobs</span>
							</a>
						</li>
						<li>
							<a href="alljobs.php">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>All Jobs</span>
							</a>
						</li>

						<li>
							<a href="problems.php">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>Practise</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>Performance</span>
							</a>
						</li>
						<li>
							<a href="companies.php">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>All Companies</span>
							</a>
						</li>
						<li>
							<a href="logout.php">
								<span><i class="fa fa-credit-card-alt"></i></span>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</nav>
				
			</div>
