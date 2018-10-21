<?php

require_once('db.php');

function getpostedjobs($name) {
    global $connection;
    $query = "SELECT * FROM JOB WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name'))";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_all(mysqli_query($connection, $query), MYSQLI_ASSOC);
        return($row);
    }
}

function getnumpostedjobs($name){
    global $connection;
    $query = "SELECT * FROM JOB WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name'))";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_num_rows(mysqli_query($connection, $query));
        return($row);
    }
}