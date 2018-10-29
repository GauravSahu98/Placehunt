<?php

require_once('../includes/db.php');

session_start();
if(!isset($_SESSION['name'])){
	header('location: ../index.php');
}	

if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["submit"])) {
    $title = mysqli_real_escape_string($connection,$_POST['title']);
    $description = mysqli_real_escape_string($connection,$_POST['description']);
    $cgpa = mysqli_real_escape_string($connection,$_POST['cgpa']);
    $skills = mysqli_real_escape_string($connection,$_POST['skills']);
    $package = mysqli_real_escape_string($connection,$_POST['package']);

    $query = "INSERT INTO JOB(title, skills, description, salary, CGPA) VALUES('$title','$skills','$description','$package','$cgpa')";


    $cname = $_SESSION['name'];
    $cidquery = "SELECT CID FROM COMPANY WHERE NAME='$cname'";
    $result = mysqli_query($connection,$cidquery);
    $value = mysqli_fetch_assoc($result);
    $cid = $value['CID'];

    if(mysqli_query($connection, $query)) {
    }
    else {
        echo 'Could not post job';
    }



    $jidquery = "SELECT JID FROM JOB WHERE TITLE='$title'";
    $result = mysqli_query($connection,$jidquery);
    $value = mysqli_fetch_assoc($result);
    $jid = $value['JID'];

    $query1 = "INSERT INTO POSTS VALUES($cid, $jid)";

    if(mysqli_query($connection, $query1)) {
        header('location: index.php');
    }
    else {
        echo 'Could not post job';
    }


}

?>