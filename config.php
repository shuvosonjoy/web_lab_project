<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "web_assignment";

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        die("connection Faild :".mysqli_connect_error());
    }
    else{
        echo "<script>alert('DB connected!!!')</script>";
    }


 ?>