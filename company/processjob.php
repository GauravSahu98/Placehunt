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

    if(mysqli_query($connection, $query)) {
        header('location: posted.php');
    }
    else {
        echo 'Could not post job';
    }
}

?>