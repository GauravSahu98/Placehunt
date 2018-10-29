<?php

require_once(__DIR__.'/../includes/db.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_POST['username'];
        $emailid=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $username=mysqli_real_escape_string($connection,$username);
        $emailid=mysqli_real_escape_string($connection,$emailid);
        
        $query="Select * from company where name='$username'";
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
        $query="INSERT INTO company(name, password, email) VALUES('$username','$password','$emailid')";
        
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
            // echo "Error: Could not register";
        }
        
	
    }
        
?>
