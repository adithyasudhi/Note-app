<?php
    $servername =  "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "note-app";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("connection failed", $conn->connect_error);
    }
    if(isset($_POST["signupBtn"])){
        $name = $_POST["user_name"];
        $password = $_POST["user_password"];
        $query = INSERT INTO note-app VALUES ('$name', 'Password');
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "insertion failed";
        }
        else{
            header("Location: index.html");
        }
    }
?>