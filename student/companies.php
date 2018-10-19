<?php 

require_once('sidenav.php');
require_once('../includes/studentfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

function getallcompanieshtml($companies){
    $companieshtml = "";

    foreach($companies as $company){
        $companieshtml = $companieshtml."<tr>";
        $companieshtml = $companieshtml."<td>".$company['cid']."</td>";
        $companieshtml = $companieshtml."<td>".$company['name']."</td>";
        $companieshtml = $companieshtml."<td>".$company['email']."</td>";
        $companieshtml = $companieshtml."<td>".$company['contactno']."</td>";
        $companieshtml = $companieshtml."</tr>";
    }

    return $companieshtml;
}

$companies = getallcompanies();
$companieshtml = getallcompanieshtml($companies);

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
				Companies
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Companies</div>
					<table>
					  <tr>
					    <th>Id</th>
					    <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                      </tr>
                      <?php 
                        echo $companieshtml;
                      ?>
					</table>
					<!--div class="overlay-wid">
					    <div class="text">Here You can view your applied jobs</div>
					</div-->
				</div>
			</div>
		</div>
	</body>
</html>