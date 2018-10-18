<?php

require_once(__DIR__.'/../includes/db.php');
$username="";
$emailid="";
$password="";


    if(isset($_POST['ssignup'])){
        $username=$_POST['username'];
        $emailid=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $username=mysqli_real_escape_string($connection,$username);
        $emailid=mysqli_real_escape_string($connection,$emailid);
        
        $query="Select * from student where username='$username'";
        $check_query=mysqli_query($connection,$query);
        if(mysqli_num_rows($check_query)>0){
            echo "User already exists";
            die($connection);
        }
        $query="INSERT INTO student(name, password, email) VALUES('$username','$password','$emailid')";
        
        if(mysqli_query($connection, $query)) {
            header("location: index.php");
        }
        else {
            echo "Error: Could not register";
        }
        
	
    }
        
?>
