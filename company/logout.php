<?php
 session_unset();         
 session_destroy();
 unset($_SESSION['loggedIn']);
 //header("location: http://localhost.com/Placehunt/index.php");
 //header("Location: __DIR__ . '/Placehunt/index.php'");
//header("Location: ../Placehunt/index.php")
// header("url: ../index.php")
 header('Refresh: 0, url = /Placehunt/index.php');

 ?>