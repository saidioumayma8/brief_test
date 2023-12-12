<?php
include '../config/connection.php';
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['date'];


    $sql = "INSERT into tasks (title, description, dueDate)
            values ('$title', '$description', '$due_date');";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/home.php' );
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}