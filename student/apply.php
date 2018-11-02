<?php
   require_once(__DIR__.'/../includes/db.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sid = $_POST['sid'];
    $jid = $_POST['jid'];
    $query="INSERT INTO applies VALUES('$sid','$jid')";

    
}

?>