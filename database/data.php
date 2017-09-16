<?php
$servername = $_SERVER["HTTP_HOST"];
$username = "root";
$password = "";
  
$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
sql = "CREATE DATABASE IF NOT EXISTS lavla;
CREATE TABLE IF NOT EXISTS accs(INT id, STRING username, STRING password)";
$result = $conn->query($sql);
?>
