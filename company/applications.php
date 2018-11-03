<?php 

require_once('sidenav.php');
require_once('../includes/studentfunctions.php');
require_once('../includes/companyfunctions.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

function getapplicationshtml($jobs){
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
        $jobshtml = $jobshtml."<td> <form action='view_studentprofile.php' method='POST'> <input type='submit' id='".$job['jid']."' value='View profile'> <input type='hidden' name='sid' value='".getsid($job['name'])['SID']."'></td> </form>";
        $jobshtml = $jobshtml."<td> <input type='button' id='".$job['jid']."' onclick='shortlist(".$sid.",".$job['jid'].",".$cid.")' value='Shortlist'></td>";
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

		<script type="text/javascript">
			function shortlist($sid, $jid, $cid) {
				$.ajax({
				url: "shortlist.php",
				method:"POST",
				data:{sid: $sid, jid: $jid, cid: $cid},
				dataType:"json",
				success:function(response){
					if(response.done==true)
					{
						toastr["success"]("Shortlisted candidate and sent mail successfully.");
						setTimeout("location.href = 'slisted.php'", 1500);
					}else{
						toastr["error"]("Shortlisting failed. Please retry");
						setTimeout("location.href = 'applications.php'", 1500);
					}
				},
				error: function () {
						toastr["error"]("Shortlisting failed. Please retry");
						setTimeout("location.href = 'applications.php'", 1500);
				}


			});
			}

		</script>
	</body>
</html>