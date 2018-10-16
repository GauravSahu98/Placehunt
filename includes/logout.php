<?php


 session_start();
 
session_destroy();
 // header("Location: http://localhost.com/Placehunt/index.php");
 //header("Location: __DIR__ . '/../logout.php");
//header("location: http://localhost.com/Placehunt/index.php");

 //header("url: ../index.php");
header('Refresh: 0, url = /Placehunt/index.php');
 
 ?>