<?php 

require_once('sidenav.php');
require_once('../includes/studentfunctions.php');
require_once('../includes/companyfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

function getshortlistedhtml($jobs){
	global $connection;
	$cid = getcid($_SESSION['name'])['CID'];
  $jobshtml = "";

    foreach($jobs as $job){
		$sid = getsid($job['name'])['SID'];
        $jobshtml = $jobshtml."<tr>";
        $jobshtml = $jobshtml."<td>".$job['jid']."</td>";
        $jobshtml = $jobshtml."<td>".$job['name']."</td>";
				$jobshtml = $jobshtml."<td>".$job['email']."</td>";
				$jobshtml = $jobshtml."<td>".$job['title']."</td>";
        $jobshtml = $jobshtml."<td>".$job['skills']."</td>";
        $jobshtml = $jobshtml."</tr>";
    }

    return $jobshtml;
}

$jobs = getshortlisted($_SESSION['name']);
$applicationshtml = getshortlistedhtml($jobs);
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
				<?php echo $_SESSION['name']."'s" ?> shortlisted applications
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Shortlisted</div>
					<table>
					  <tr>
                        <th>Jobid</th>
                        <th>Name of candidate</th>
												<th>email</th>
					    					<th>Title</th>
                        <th>Skills</th>
					  </tr>
					  					<?php 
                        echo $applicationshtml;
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