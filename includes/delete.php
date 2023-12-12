<?php
include '../config/db.php';
$idTask = $_GET['idTask'];
$sql = "delete from tasks where id = $idTask";
$result = $conn->query($sql);
header('location: ../pages/home.php' )
?>