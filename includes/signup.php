<?php
include '../config/connection.php';
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];


    $sql = "INSERT into tasks (email, login, )
            values ('$email', '$login', '$pass');";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/home.php' );
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}