<?php 

require_once('sidenav.php');
require_once('../includes/companyfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

function getapplicationshtml($jobs){
    $jobshtml = "";

    foreach($jobs as $job){
        $jobshtml = $jobshtml."<tr>";
        $jobshtml = $jobshtml."<td>".$job['jid']."</td>";
        $jobshtml = $jobshtml."<td>".$job['name']."</td>";
		$jobshtml = $jobshtml."<td>".$job['email']."</td>";
		$jobshtml = $jobshtml."<td>".$job['title']."</td>";
        $jobshtml = $jobshtml."<td>".$job['skills']."</td>";
        $jobshtml = $jobshtml."<td>
        <form action='viewprofile.php' method='POST'>
        <input type='hidden' name='name' value='".$job['name']."'>
        <input type='submit' name='submit' value='View Profile'>
        </form>
        </td>";
        $jobshtml = $jobshtml."<td>
        <form action='viewprofile.php' method='POST'>
        <input type='hidden' name='name' value='".$job['name']."'>
        <input type='submit' name='submit' value='Shortlist'>
        </form>
        </td>";
        $jobshtml = $jobshtml."</tr>";
    }

    return $jobshtml;
}

$jobs = getapplications($_SESSION['name']);
$applicationshtml = getapplicationshtml($jobs);
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
				<?php echo $_SESSION['name']."'s" ?> total applications
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Applications</div>
					<table>
					  <tr>
                        <th>Jobid</th>
                        <th>Name of candidate</th>
						<th>email</th>
					    <th>Title</th>
                        <th>Skills</th>
                        <th>View</th>
                        <th>Shortlist</th>
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