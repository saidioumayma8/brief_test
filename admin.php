<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="image/A tech logo,circuit logo.png">
    <link rel="stylesheet" href="./style.css">
    <title>ElectroNaser</title>
</head>
<body>
    <?php 
    if(isset($_POST['ajouter'])){
        $login = $_POST['login'];
        $pwd = $_POST['password'];

        if(!empty($login) && !empty($pwd)){
            require_once 'inclode/database.php';
            $pdo->prepare(query: 'INSERT INTO user VALUES(?,?,?)');
            $sqlState->execute([$login,$pad,$date]);
            header( header: 'location: connexion.php');
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                login , password sont obligatoires
            </div>
            <?php
        }
    }
    ?>
<div class="wrapper bg-white">
    <div class="h2 text-center">ElectroNaser</div>
    <div class="h4 text-muted text-center pt-2">Enter your login details</div>
    <form class="pt-3">
        <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Username or Email Address" required class=""> </div>
        </div>
        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text" placeholder="Enter your Password" required class=""> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
        </div>
        <div class="d-flex align-items-start">
            <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div>
            <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div>
        </div> <button class="btn btn-block text-center my-3">Log in</button>
        <div class="text-center pt-3 text-muted">Not a member? <a href="signup.php">Sign up</a></div>
    </form>
</div>
</body>
</html>