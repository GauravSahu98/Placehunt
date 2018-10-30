<?php

// echo $_POST['data']['name'];
   require_once(__DIR__.'/../includes/db.php');
   require_once(__DIR__.'/../includes/studentfunctions.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

   if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($connection,$_POST['data']['name']);
    $about= mysqli_real_escape_string($connection,$_POST['data']['about']);
    $location = mysqli_real_escape_string($connection,$_POST['data']['location']);
    $contact = mysqli_real_escape_string($connection,$_POST['data']['contact']);
    $dob = mysqli_real_escape_string($connection,$_POST['data']['dob']);
    $languages = mysqli_real_escape_string($connection,$_POST['data']['languages']);

    $designation1= mysqli_real_escape_string($connection,$_POST['data']['designation1']);
    $organisation1 = mysqli_real_escape_string($connection,$_POST['data']['organisation1']);
    $timespan1 = mysqli_real_escape_string($connection,$_POST['data']['timespan1']);
    $designation2= mysqli_real_escape_string($connection,$_POST['data']['designation2']);
    $organisation2 = mysqli_real_escape_string($connection,$_POST['data']['organisation2']);
    $timespan2 = mysqli_real_escape_string($connection,$_POST['data']['timespan2']);

    $projname1 = mysqli_real_escape_string($connection,$_POST['data']['projname1']);
    $projdesc1 = mysqli_real_escape_string($connection,$_POST['data']['projdesc1']);

    $eduname1 = mysqli_real_escape_string($connection,$_POST['data']['eduname1']);
    $eduduration1 = mysqli_real_escape_string($connection,$_POST['data']['eduduration1']);
    $eduscore1 = mysqli_real_escape_string($connection,$_POST['data']['eduscore1']);


    $eduname2 = mysqli_real_escape_string($connection,$_POST['data']['eduname2']);
    $eduduration2 = mysqli_real_escape_string($connection,$_POST['data']['eduduration2']);
    $eduscore2 = mysqli_real_escape_string($connection,$_POST['data']['eduscore2']);

    $eduname3 = mysqli_real_escape_string($connection,$_POST['data']['eduname3']);
    $eduduration3 = mysqli_real_escape_string($connection,$_POST['data']['eduduration3']);
    $eduscore3 = mysqli_real_escape_string($connection,$_POST['data']['eduscore3']);

    $awardname1 = mysqli_real_escape_string($connection,$_POST['data']['awardname1']);
    $awarddesc1 = mysqli_real_escape_string($connection,$_POST['data']['awarddesc1']);

    $awardname2 = mysqli_real_escape_string($connection,$_POST['data']['awardname2']);
    $awarddesc2 = mysqli_real_escape_string($connection,$_POST['data']['awarddesc2']);

    $awardname3 = mysqli_real_escape_string($connection,$_POST['data']['awardname3']);
    $awarddesc3 = mysqli_real_escape_string($connection,$_POST['data']['awarddesc3']);

    $social1 = mysqli_real_escape_string($connection,$_POST['data']['link1']);
    $social2 = mysqli_real_escape_string($connection,$_POST['data']['link2']);



    $sid=getsid($name)['SID'];






    $sql="UPDATE student_profile SET about='$about', location='$location', contact='$contact',dob='$dob',languages='$languages' WHERE proid='$sid'";
    $sqlwork="UPDATE workexperience SET designation1='$designation1', organization1='$organisation1', timespan1='$timespan1',designation2='$designation2', organization2='$organisation2', timespan2='$timespan2' WHERE workid='$sid'";
    $sqlproj="UPDATE projects SET name='$projname1', description='$projdesc1'  WHERE pid='$sid'";
    $sqledu="UPDATE education SET school_name='$eduname3', school_duration='$eduduration3',ssc_marks='$eduscore3',college_name='$eduname2', college_duration='$eduduration2',hsc_marks='$eduscore2',grad_name='$eduname1', grad_duration='$eduduration1',grad_cgpa='$eduscore1',  WHERE education_id='$sid'";
    $sqlaward="UPDATE awards SET title1='$awardname1', description1='$awarddesc1',title2='$awardname2', description2='$awarddesc2',title3='$awardname3', description3='$awarddesc3'  WHERE aid='$sid'";
    $sqlsocial="UPDATE social_profiles SET github='$social1',linkedin='$social2'  WHERE spid='$sid'";

    if(mysqli_query($connection, $sql) and mysqli_query($connection, $sqlwork)) {
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

    if(mysqli_query($connection, $sqlproj) and mysqli_query($connection, $sqledu)) {
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

    if(mysqli_query($connection, $sqlaward) and mysqli_query($connection, $sqlsocial)) {
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
