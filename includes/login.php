<?php
include("connection.php");
if(isset($_POST['submit'])){
$email = $_POST['email'];
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "select * from login where username = '$username' and email = '$email' and password = '$password'"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC).
$count = mysqli_num_rows($result);
if($count == 1){
    header("location:adminh.php");
}
else{
    echo '<script>
        window.location.href = "index.php";
        alert("login faoled. Invalid username or password!!!")
        </script>';
}
}
?>