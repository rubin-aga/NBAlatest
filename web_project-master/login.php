<?php

require("loginfile.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="img/logo.png"/>
    <title>NBAlatest- Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="styles/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>


    <style>
        .over1 {

        }

        .errorreg {
            background-color: red;
            color: white;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }
    </style>

</head>

<body>

<div class="header">
    <h2 class="logo" ; style="text-transform: none;">NBAlatest</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
    </label>

    <ul class="menu">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <div class="dropdown">
            <button class="dropbtn">Shop</button>
            <div class="dropdown-content">
                <a href="accessoriesShop.php">Accessories</a>
                <a href="shirtsShop.php">Shirts</a>
                <a href="shortsShop.php">Shorts</a>
            </div>
        </div>
        <a style="border-bottom: white 2px solid;" href="login.php">Login</a>
        <a href="register.php">Register</a>


    </ul>
</div>

<div class="over1">
</div>
<form action="loginfile.php" method="post">
    <div class="container-register">


        <h1 style="color: white">Login</h1>
        <br>
        <p style="color: white">Please fill in this form to login in NBAlatest</p><br>


        <label class="label-register">Email:</label><input type="text" class="register-input" placeholder="Enter Email"
                                                           name="email" required><br>


        <label class="label-register">Password: </label><input type="password" class="register-input"
                                                               placeholder="Enter Password" name="password"
                                                               required><br>


        <input type="submit" value="Login" name="submit" class="registerbtn"></input>


        <?php
        if (!isset($_GET['login'])) {
            exit();
        } else {
            $logincheck = $_GET['login'];

            if ($logincheck == "fail") {
                echo "<p class='errorreg'> Error with your username/password  </p>";
                exit();
            }

        }


        ?>


</form>

<center>
    <p>If you already are not registered <a style="border: 3px solid ; color: white; background-color: #263238;"
                                            href="register.php">Click here</a></p>

</center>

</div>


</div>


</body>

</html>
