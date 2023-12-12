<?php
    include("../config/connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>ElectroNaser</title>
</head>
<body>   
<div id="form">
    <h1>signup Form</h1>
    <Form name="form"action="signup.php" method="POST">
        <label>Enter Username</label>
        <input type="text" id="user" name="user" required></br></br>

        <label>Enter Email</label>
        <input type="email" id="email" name="email" required></br></br>

        <label>Enter Password</label>
        <input type="password" id="pass" name="pass" required></br></br>

        <label>Retype Password</label>
           <input type="password" id="cpass" name="cpass" required></br></br>
           <h4>i have a conte ?<a href="./index.php">login</a></h4>

        <input type="submit" id="btn" value="sign up" name="submit">

        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("Username and password field is emply!!!");
                    return false;
                }
                else{
                    if(user.length==""){
                        alert("Username is emply!!!");
                        return false
                    }
                    if(user.length==""){
                        alert("password is emply!!!");
                        return false
                    }
                }
            }
</script>
</body>
</html>