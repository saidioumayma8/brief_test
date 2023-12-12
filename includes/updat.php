<?php
include '../config/db.php';
$idTask = $_GET['idTask'];

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['date'];

    $sql = "UPDATE tasks set title='$title', description='$description', dueDate='$due_date' where id=$idTask";
    if ($conn->query($sql) === TRUE) {
        header('location: ../pages/home.php?seccess=yes');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}