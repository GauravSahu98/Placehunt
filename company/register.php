<?php

require_once(__DIR__.'/../includes/db.php');
$username="";
$emailid="";
$password="";


    if(isset($_POST['signup'])){
        $username=$_POST['username'];
        $emailid=$_POST['email'];
        $password=$_POST['password'];
        
        $username=mysqli_real_escape_string($connection,$username);
        $emailid=mysqli_real_escape_string($connection,$emailid);
        
        $query="Select * from company where username='$username'";
        $check_query=mysqli_query($connection,$query);
        if(mysqli_num_rows($check_query)>0){
            echo "user already exists";
            die($connection);
        }
        $query="INSERT INTO company(name, password, email) VALUES('$username','$password','$emailid')";
        
        if(mysqli_query($connection, $query)) {
            header("location: index.php");
        }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }
        
	
    }
        
?>
