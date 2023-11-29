<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="x-icon" href="image/A tech logo,circuit logo.png">
    <title>ElectroNaser</title>
</head>
<body>

<?php include'inclode/nav.php'?>

<?php 
    if(isset($_POST['connexion'])){
        $login = $_POST['login'];
        $pwd = $_POST['password'];

        if(!empty($login) && !empty($pwd)){
            require_once 'inclode/database.php';
            $sqlstaet = $pdo->prepare(query: 'SELECT * FROM utilisateur
                                            WHERE LOGIN=?
                                            AND password=?');
            $sqlState->execute([$login,$pwd]);
            if($sqlState->rewCount()>=1){
            session_start();
            S_SESSION['utilisateure'] = $sglstate->fetch();
            header(header: 'location: home.php');
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                login ou password incorrectes.
            </div>
            <?php
        }
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