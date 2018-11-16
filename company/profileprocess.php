<?php

// echo $_POST['data']['name'];
   require_once(__DIR__.'/../includes/db.php');
   require_once(__DIR__.'/../includes/studentfunctions.php');
    require_once(__DIR__.'/../includes/companyfunctions.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();

    $name=$_SESSION['name'];

}

   if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($connection,$_POST['data']['name']);
    $about= mysqli_real_escape_string($connection,$_POST['data']['about']);
    $location = mysqli_real_escape_string($connection,$_POST['data']['location']);
    $contact = mysqli_real_escape_string($connection,$_POST['data']['contact']);
    $founded= mysqli_real_escape_string($connection,$_POST['data']['founded']);
    $workwithus= mysqli_real_escape_string($connection,$_POST['data']['workwithus']);
    $email= mysqli_real_escape_string($connection,$_POST['data']['email']);


    $cid=getcid($name)['CID'];

    echo $cid;




    $sql="UPDATE company_profile SET about='$about', location='$location', contactno='$contact',founded='$founded',contactmail='$email',workwithus='$workwithus' WHERE proid='$cid'";

    if(mysqli_query($connection, $sql)) {
        $response["updated"] = true;
        $response["success"]=true;
        // convert the result array to json format
        echo json_encode($response);
        exit;
        // header("location: index.php");
    }
    else {
        $response["updated"] = false;
         $response["success"]=true;
        // convert the result array to json format
        echo json_encode($response);
        exit;
    }



}


?>
