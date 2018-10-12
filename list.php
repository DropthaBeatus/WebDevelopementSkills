<?php

require_once "../db.conf";
file_put_contents("data.txt", "");
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    
    //$query = "select * from foodstock2 where cost > 10";

    $query = "select * from post order by addDate desc;";

    $result = $mysqli->query($query);


    $array = array();
     while($row = mysqli_fetch_array($result))
    {

       $array[] = array('key1' => $row['username'], 'key2' => $row['title'], 'key3' => $row['post']);
    }
    echo json_encode($array); 
    

$result->close();
$mysqli->close();
?>