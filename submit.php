<?php
require_once "../db.conf";

  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

$username = $_POST['username'];
$Title = $_POST['title'];
$post = $_POST['text'];




         $query = "INSERT INTO post (username, title, post, addDate)
        VALUES ('$username','$Title', '$post', now());";

          $result = $mysqli->query($query);
            echo $username;
        
$result->close();
$mysqli->close();
          


?>