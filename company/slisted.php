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
		.button {
			background: rgba(66, 134, 244,0.7);
		    border: none;
		    border-left: 5px solid blue;
		    border-bottom-left-radius: none;
		    border-top-left-radius: 15px;
		    color: white;
		    padding: 5px 5px;
		    text-align: center;
		    font-size: 12px;
		    cursor: pointer;
		}
		.button:hover {
			box-shadow: 2px 2px 2px black;
		}
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
						<a href="https://github.com/SahilSahu">
							<img src="https://images-na.ssl-images-amazon.com/images/I/710JjlwJDZL._RI_.jpg" class="avatar" alt="avatar">
						</a>
					</li>
					<li>
						<a href="index.php">
							<span><i class="fa fa-user"></i></span>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="upload.php">

							<span><i class="fa fa-envelope"></i></span>
							<span>Upload</span>
						</a>
					</li>
					<li class="active">
						<a href="#">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Shortlisted</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="notification.html">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Messages</span>
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
				Shortlisted candidates
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
							<td>700</td>
							<form method="POST" action="mail.php">
							<input type="hidden" value="" name="">
							<td><button class="button" type="submit">view resume</button></td>
	</form>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
				<div class="widget">
					<div class="title">Job Title</div>
					<table>
					  <tr>
					    <th>First Name</th>
					    <th>Last Name</th>
					    <th>Points</th>
					    <th>Resumes</th>
					  </tr>
					  <tr>
					    <td>Sahil</td>
					    <td>Sahu</td>
					    <td>700</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Anurag</td>
					    <td>Shelar</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Gaurav</td>
					    <td>Sahu</td>
					    <td>500</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <!--tr>
					    <td>Milan</td>
					    <td>hazra</td>
					    <td>450</td>
					    <td><button class="button">view resume</button></td>
					  </tr>
					  <tr>
					    <td>Athul</td>
					    <td>Balakrishnan</td>
					    <td>425</td>
					    <td><button class="button">view resume</button></td>
					  </tr-->
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your Job Title</div>
					</div-->
				</div>
			</div>
		</div>
	</body>
</html>



<?php
$to = "2016.anurag.shelar@ves.ac.in";
$subject = "Testing PHP mailer";

$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline.</h1>";

$header = "From:abc@somedomain.com \r\n";
$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
	 echo "Message sent successfully...";
}else {
	 echo "Message could not be sent...";
}
?>