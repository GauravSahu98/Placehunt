<?php
   require_once(__DIR__.'/../includes/db.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connection,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['password']); 
      
      $sql = "SELECT * FROM student WHERE name = '$myusername'";

      if(mysqli_query($connection,$sql)) {
         $row = mysqli_fetch_assoc(mysqli_query($connection,$sql));
         $count = mysqli_num_rows(mysqli_query($connection,$sql));

         if($count == 1 and password_verify($mypassword, $row['password'])) {
         $_SESSION['name'] = $row['name'];
         
         header("location: index.php");
         }
      }
      
      echo "Error: Invalid login username or password";
   }
?>