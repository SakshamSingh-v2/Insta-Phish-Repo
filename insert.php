<?php
$old = $_post['old'];
$new = $_post['new'];

$host = "";
$dbUsername = "";
$dbPassword =  "";
$dbname = "";
    //connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' .$conn->connect_error);
}else {
     $stmt = $conn->prepare("INSERT INTO register (old, new) VALUES (?,?");
     $stmt->bind_param("ss,$old ,$new");
     $stmt->execute();
     echo "Password reset successfully";
     $stmt->close();
     $conn->close();

}







?>