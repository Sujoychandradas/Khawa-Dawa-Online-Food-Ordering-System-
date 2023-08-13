<?php
    //Start Session
    session_start();


    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "food-order-service";
    define('SITEURL','http://localhost/Web%20Final/Final_Submission/');
    $conn = mysqli_connect($serverName,$userName,$password) or die(mysqli_connect_error());
    $db_select = mysqli_select_db($conn, $dbName) or die(mysqli_connect_error());

    // if(!$conn){
    //     die("connection Faild :".mysqli_connect_error());
    // }
    // else{
    //     echo "<script>alert('DB connected!!!')</script>";
    // }

    // $db_select = mysqli_select_db($conn, $dbName);
    // if(!$db_select){
    //     die("DB selection Faild :".mysqli_connect_error());
    // }
    // else{
    //     echo "<script>alert('DB selected!!!')</script>";
    // }

 ?>