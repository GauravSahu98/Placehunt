<?php

require_once(__DIR__.'/../includes/db.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $username=mysqli_real_escape_string($connection,$_POST['username']);
        $emailid=mysqli_real_escape_string($connection,$_POST['email']);

        $query="Select * from student where name='$username'";
        $checkquery = mysqli_query($connection,$query);
        if($checkquery){
            if(mysqli_num_rows($checkquery)>0){
                $result["registered"] = false;
                $result["exists"] = true;
                $result["success"]=true;
                // convert the result array to json format
                // die($connection);
                echo json_encode($result);
                exit;
            }
        }

        $query="INSERT INTO student(name, password, email) VALUES('$username','$password','$emailid')";
        
        if(mysqli_query($connection, $query)) {
            $result["registered"] = true;
            $result["exists"] = false;
            $result["success"]=true;
            // convert the result array to json format
            echo json_encode($result);
            exit;
            // header("location: index.php");
        }
        else {
            $result["registered"] = false;
            $result["exists"] = false;
            $result["success"]=true;
            // convert the result array to json format
            echo json_encode($result);
            exit;
        }
        
	
    }
        
?>
