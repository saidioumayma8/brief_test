<?php
    include("connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>ElectroNaser</title>
</head>
<body>   
<div id="form">
    <h1>Login Form</h1>
    <Form name="form"action="login.php" onsubmit="return isvalid()" method="POST">
        <label>email</label>
           <input type="text" id="email" name="email"></br></br>
        <label> Username</label>
           <input type="text" id="user" name="user"></br></br>
             <label>Password: </label>
           <input type="Password" id="pass" name="pass"></br></br>
        <input type="submit" id="btn" value="Login" name="submit">
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