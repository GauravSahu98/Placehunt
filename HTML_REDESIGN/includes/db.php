<?php
    define("server","localhost");
    define("username","root");
    define("password","");
    define("db","placehunt");
    $connection=mysqli_connect(server, username, password, db);
    
    if(!$connection){
        die("Connection failed: " . mysqli_connect_error());
     }
?>