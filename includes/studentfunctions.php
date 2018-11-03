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

function getnumappliedjobs($name){
    global $connection;
    $query = "SELECT * FROM JOB WHERE JID IN (SELECT JID FROM APPLIES WHERE SID=(SELECT SID FROM STUDENT WHERE NAME= '$name'))";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_num_rows(mysqli_query($connection, $query));
        return($row);
    }
}

function getallcompanies(){
    global $connection;
    $query = "SELECT * FROM COMPANY";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_all(mysqli_query($connection, $query), MYSQLI_ASSOC);
        return($row);
    }
}

function getnumcompanies(){
    global $connection;
    $query = "SELECT * FROM COMPANY";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_num_rows(mysqli_query($connection, $query));
        return($row);
    }
}

function getalljobs(){
    global $connection;
    $query = "SELECT * FROM JOB";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_all(mysqli_query($connection, $query), MYSQLI_ASSOC);
        return($row);
    }
}

function getsid($name) {
    global $connection;
    $query = "SELECT SID FROM STUDENT WHERE NAME='$name'";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}


function getemailid($name) {
    global $connection;
    $query = "SELECT email FROM STUDENT WHERE NAME='$name'";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}

function getstudentprofile($sid){
    global $connection;

    $query="SELECT * FROM student_profile where proid='$sid'";

        if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}

function getworkexperience($sid){
  global $connection;

  $query="SELECT * FROM workexperience where workid='$sid'";


      if(mysqli_query($connection, $query)) {
      $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
      return($row);
  }

}


function getproject($sid){

  $query="SELECT * FROM projects where pid='$sid'";

      global $connection;
      if(mysqli_query($connection, $query)) {
      $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
      return($row);
  }

}

function geteducation($sid){

  $query="SELECT * FROM education where education_id='$sid'";

      global $connection;
      if(mysqli_query($connection, $query)) {
      $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
      return($row);
  }

}

function getaward($sid){

  $query="SELECT * FROM awards where aid='$sid'";

      global $connection;
      if(mysqli_query($connection, $query)) {
      $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
      return($row);
  }

}

function getsocial($sid){

  $query="SELECT * FROM social_profiles where spid='$sid'";

      global $connection;
      if(mysqli_query($connection, $query)) {
      $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
      return($row);
  }

}

function getname($sid) {
    global $connection;
    $query = "SELECT NAME FROM STUDENT WHERE SID='$sid'";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}

function getstudent($sid) {
    global $connection;
    $query = "SELECT NAME, EMAIL FROM STUDENT WHERE SID='$sid'";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}

function getjobdetails($jid) {
    global $connection;
    $query = "SELECT TITLE FROM JOB WHERE JID='$jid'";
    if(mysqli_query($connection, $query)) {
        $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return($row);
    }
}

function curlreq($param) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.github.com/users/".$param,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_TIMEOUT => 30000,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    // Set Here Your Requested Headers
        'Content-Type: application/json',
        'User-Agent: UjalaJha'
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        return($response);
    }
}
?>
