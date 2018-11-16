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

function getapplications($name){
    global $connection;
    $query = "SELECT S.NAME, S.EMAIL, J.JID, J.TITLE, J.SKILLS FROM (SELECT * FROM STUDENT WHERE SID IN (SELECT SID FROM APPLIES WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name')))) AS S, (SELECT * FROM JOB WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name'))) AS J";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_all(mysqli_query($connection, $query), MYSQLI_ASSOC);
        return($row);
    }
}

    global $connection;
function getnumapplications($name){
    $query = "SELECT S.NAME, S.EMAIL, J.JID, J.TITLE, J.SKILLS FROM (SELECT * FROM STUDENT WHERE SID IN (SELECT SID FROM APPLIES WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name')))) AS S, (SELECT * FROM JOB WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name'))) AS J";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_num_rows(mysqli_query($connection, $query));
        return($row);
    }
}

function getcid($name) {
    global $connection;
    $query = "SELECT CID FROM COMPANY WHERE NAME='$name'";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}

function getcname($cid) {
    global $connection;
    $query = "SELECT NAME FROM COMPANY WHERE CID='$cid'";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}

function getshortlisted($name){
    global $connection;
    $query = "SELECT S.NAME, S.EMAIL, J.JID, J.TITLE, J.SKILLS FROM (SELECT * FROM STUDENT WHERE SID IN (SELECT SID FROM SHORTLISTED WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name')))) AS S, (SELECT * FROM JOB WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name'))) AS J";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_all(mysqli_query($connection, $query), MYSQLI_ASSOC);
        return($row);
    }
}
function getnumshortlisted($name){

    global $connection;
    $query = "SELECT S.NAME, S.EMAIL, J.JID, J.TITLE, J.SKILLS FROM (SELECT * FROM STUDENT WHERE SID IN (SELECT SID FROM SHORTLISTED WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name')))) AS S, (SELECT * FROM JOB WHERE JID IN (SELECT JID FROM POSTS WHERE CID=(SELECT CID FROM COMPANY WHERE NAME= '$name'))) AS J";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_num_rows(mysqli_query($connection, $query));
        return($row);
    }
}
function getcompanyprofile($cid){
    global $connection;

    $query="SELECT * FROM company_profile where proid='$cid'";

        if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}

function getcompanyemailid($name) {
    global $connection;
    $query = "SELECT email FROM company WHERE NAME='$name'";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}
?>
