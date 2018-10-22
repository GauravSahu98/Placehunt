<?php 

require_once('sidenav.php');
require_once('../includes/studentfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

function getappliedjobshtml($jobs){
    $jobshtml = "";

    foreach($jobs as $job){
        $jobshtml = $jobshtml."<tr>";
        $jobshtml = $jobshtml."<td>".$job['jid']."</td>";
		$jobshtml = $jobshtml."<td>".$job['title']."</td>";
		$jobshtml = $jobshtml."<td>".$job['skills']."</td>";
		$jobshtml = $jobshtml."<td>".$job['description']."</td>";
		$jobshtml = $jobshtml."<td>".$job['salary']."</td>";
		$jobshtml = $jobshtml."<td>".$job['CGPA']."</td>";
        $jobshtml = $jobshtml."</tr>";
    }

    return $jobshtml;
}

$appliedjobs = getappliedjobs($_SESSION['name']);
$appliedjobshtml = getappliedjobshtml($appliedjobs);

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
				<?php echo $_SESSION['name']."'s" ?> Applied jobs
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Jobs</div>
					<table>
					  <tr>
					    <th>Id</th>
					    <th>Title</th>
					    <th>Skills</th>
						<th>Description</th>
						<th>Salary</th>
						<th>CGPA</th>
					  </tr>
					  <?php 
                        echo $appliedjobshtml;
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