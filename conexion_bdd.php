<?php
$servername = "localhost";
$username = "phpuser";
$password = "shampopo64";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE myDB";
if($conn->query($sql)===TRUE){
    echo "Connected successfully";
}else{
    echo "Error creating database: ". $conn->error;
}
$conn->close();
?>


