<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "note-app";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed", $conn->connect_error);
}

$user_name = "";
$user_password = "";

$query = "SELECT * FROM login WHERE user_name = '$user_name' AND user_password = '$user_password';";


?>