<?php
require_once "../db.conf";


    $DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  

    $DBH->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    

function get_all($DBH) {
    $sql = "SELECT * FROM post";
    $stmt = $DBH->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    echo $stmt;
    return $stmt;
}



$test = get_all($DBH);
echo $test;


?>