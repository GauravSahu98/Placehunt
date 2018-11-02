<?php
   require_once(__DIR__.'/../includes/db.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $sid = $_POST['sid'];
    $jid = $_POST['jid'];
    $query="INSERT INTO applies(sid,jid) VALUES('$sid','$jid')";

    if(mysqli_query($connection, $query)) {
        $result["applied"] = true;
        $result["success"]=true;
        // convert the result array to json format
        echo json_encode($result);
        exit;
        // header("location: index.php");
    }
    else {
        $result["applied"] = false;
        $result["success"]=true;
        // convert the result array to json format
        echo json_encode($result);
        exit;
    }
    
}

?>