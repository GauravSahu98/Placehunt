<?php

require_once('db.php');

function getappliedjobs($name){
    global $connection;
    $query = "SELECT * FROM JOB WHERE JID IN (SELECT JID FROM APPLIES WHERE SID=(SELECT SID FROM STUDENT WHERE NAME= '$name'))";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_all(mysqli_query($connection, $query), MYSQLI_ASSOC);
        return($row);
    }
}

?>