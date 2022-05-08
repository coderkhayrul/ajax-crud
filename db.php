<?php
$hostname = "localhost";
$username = "khayrul";
$password = "Password";
$dbname = "ajax_crud";

$conn = new mysqli($hostname, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Error connecting to server". $conn->connect_error);
// }else{
//     echo "Server connected successfully";
// }