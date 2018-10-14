<?php

require_once(__DIR__.'\includes\db.php');
$username="";
$emailid="";
$password="";


    if(isset($_POST['signup'])){
        $username=$_POST['username'];
        $emailid=$_POST['email'];
        $password=$_POST['password'];
        
        $username=mysqli_real_escape_string($connection,$username);
        $emailid=mysqli_real_escape_string($connection,$emailid);
        
        $query="Select * from student where username='$username'";
        $check_query=mysqli_query($connection,$query);
        if(mysqli_num_rows($check_query)>0){
            echo"user already exists";
            die();
        }
        $query="INSERT INTO student(name, password, email) VALUES('$username','$password','$emailid')";
        
        $insert_user_query=mysqli_query($connection,$query);
        echo "User registered Sucessfully";
	/**redirect to any page*/
    }
        
?>
