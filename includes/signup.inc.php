<?php
include_once 'connect.php';


    $user = $_POST['user'];
    $pwd = $_POST['pwd'];



    $sql = "INSERT INTO  users (username, psswrd) VALUES ('$user', '$pwd');";
    mysqli_query($conn, $sql);

    header("Location:../index.php?signup=success");