<?php
require_once "../db.conf";

  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


    if($mysqli->connect_error){
        die('Connect Error('. $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }


$username = $_POST['username'];
$password = $_POST['password'];
 

            $query = "SELECT username FROM users WHERE username = '$username' AND password = '$password';";

          $result = $mysqli->query($query);
          $row = mysqli_fetch_array($result);
        if(empty($row)){
        
        }
        else{
            echo $row['username'];
        }
        
     //while($row = mysqli_fetch_array($result))
   //{

   //    if($username == $row['username'] && $password == $row['password']){
    //       echo $username;
   //        break;
    //   }
  //  }
            
$result->close();
$mysqli->close();

?>