<?php
   require_once(__DIR__.'/../includes/db.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $query="INSERT INTO student(name, password, email) VALUES('$username','$password','$emailid')";
}
?>