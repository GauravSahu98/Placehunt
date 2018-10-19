<?php 

require_once('sidenav.php');
require_once('../includes/studentfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

$numcompany = getallcompanies();

?>

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
		<div class="main-content">
			<div class="title">
				Problem Set
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Problems</div>
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