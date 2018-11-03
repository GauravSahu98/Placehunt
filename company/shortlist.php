<?php

require_once(__DIR__.'/../includes/db.php');
require_once(__DIR__.'/../includes/studentfunctions.php');
require_once(__DIR__.'/../includes/companyfunctions.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sid=mysqli_real_escape_string($connection, $_POST['sid']);
        $jid=mysqli_real_escape_string($connection, $_POST['jid']);
        $cid=mysqli_real_escape_string($connection, $_POST['cid']);


        $query = "INSERT INTO shortlisted(sid, jid) VALUES('$sid','$jid')";
        
        $student = getstudent($sid);
        $job = getjobdetails($jid);
        $cname = getcname($cid)['NAME'];
        
        if(mysqli_query($connection, $query)) {
            
            $command = escapeshellcmd("python mail.py ".$student['NAME']." ".$student['EMAIL']." ".$cname." ".$job['TITLE']);
            $output = shell_exec($command);
            
            // echo $output;
            if($output == 1){
                $response['done'] = true;
                $response['success'] = true;
                echo json_encode($response);
                exit;
            } else {
                $response['done'] = false;
                $response['success'] = true;
                echo json_encode($response);
                exit;
            }

        } else {
            $response['done'] = false;
            $response['success'] = false;
            echo json_encode($response);
            exit;
        }
    
    }
?>
        