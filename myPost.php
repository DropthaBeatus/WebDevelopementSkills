<?php

require_once "../db.conf";
file_put_contents("data.txt", "");
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $username = $_GET['username'];
    //$query = "select * from foodstock2 where cost > 10";

    $query = "SELECT title, post FROM post WHERE username = '$username';";

    $result = $mysqli->query($query);


    $array = array();
     while($row = mysqli_fetch_array($result))
    {

       $array[] = array('key1' => $row['title'], 'key2' => $row['post']);
    }
    echo json_encode($array); 
    

$result->close();
$mysqli->close();
?>