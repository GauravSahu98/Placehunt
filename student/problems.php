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
					    <th>id</th>
					    <th>Problem</th>
					    <th>Solve</th>
					  </tr>
					  <tr>
					    <td>1</td>
					    <td>Reverse Array</td>
					    <td><a href="problem2.html" target="_blank"><button>Solve</button></a></td>
					  </tr>
					  <tr>
					    <td>2</td>
					    <td>Caesar Cipher</td>
					    <td><a href="problem3.html" target="_blank"><button>Solve</button></a></td>
					  </tr>
					  <tr>
					    <td>3</td>
					    <td>Longest Common Subsequence</td>
					    <td><a href="problem1.html" target="_blank"><button>Solve</button></a></td>
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