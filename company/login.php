<?php
   require_once(__DIR__.'/../includes/db.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connection,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['password']); 
      
      $sql = "SELECT * FROM company WHERE name = '$myusername' and password = '$mypassword'";



      if(mysqli_query($connection,$sql)) {
         $row = mysqli_fetch_assoc(mysqli_query($connection,$sql));
      
         $count = mysqli_num_rows(mysqli_query($connection,$sql));

         echo "count".$count;

         if($count == 1) {
         $_SESSION['username'] = $myusername;
         
         header("location: index.php");
         }
      }
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      else {
         $error = "Your Login Name or Password is invalid";

         echo "error ".$error;
      }
   }
?>
