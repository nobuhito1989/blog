<?php

require_once("classes/Users.php");

session_start();

if(!empty($_SESSION['userid'])){
    header("location: http://localhost/phpblog/index.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="userAction.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
            <input type="email" name="email" placeholder="E-mail" class="form-control">
            </div>
            <div class="form-group">
            <input type="password" name="pass" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="login">Login</button>
            </div>


        </form>

    </div>

</body>