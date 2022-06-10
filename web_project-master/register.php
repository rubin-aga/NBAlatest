<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
        .errorreg {
            background-color: red;
            color: white;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

        .successreg {
            background-color: green;
            color: white;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

    </style>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="styles/add.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="img/logo.png"/>
    <title>NBAlatest- Login </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
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
        <a href="login.php">Login</a>
        <a style="border-bottom: white 2px solid;" href="register.php">Register</a>

        <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
    </ul>
</div>

<div class="over1">
</div>
<div class="container-register">

    <form action="createacc.php" method="post">

        <h1 style="color: white">Register</h1>
        <p style="color: white">Please fill in this form to create an account.</p>

        <p id="result-reg"></p>
        <br>

        <label class="label-register">Name:</label><input type="text" class="register-input" placeholder="Enter Name"
                                                          name="name">

        <label class="label-register">Surname:</label><input type="text" class="register-input"
                                                             placeholder="Enter Surname" name="surname">


        <label class="label-register">Email:</label><input type="text" id="email-reg" class="register-input"
                                                           placeholder="Enter Email" name="email">

        <label class="label-register">Password:</label><input type="password" id="pass-reg" class="register-input"
                                                              placeholder="Enter Password" name="password">

        <label class="label-register">Date of Birth:</label><input type="date" class="register-input" name="dob">

        <button type="submit" name="submit" id="validate" class="registerbtn">Register</button>
    </form>

    <?php
    if (!isset($_GET['signup'])) {
        exit();
    } else {
        $signupCheck = $_GET['signup'];

        if ($signupCheck == "empty") {
            echo "<p class='errorreg'> You did not fill all the fields </p>";
            exit();
        } elseif ($signupCheck == "namewrong") {
            echo "<p class='errorreg'> Name should consist only name not numbers/special symbols  </p>";
            exit();
        } elseif ($signupCheck == "surnamewrong") {
            echo "<p class='errorreg'> Surname should consist only name not numbers/special symbols  </p>";
            exit();
        } elseif ($signupCheck == "emailwrong") {
            echo "<p class='errorreg'> Bad Format of Email !  </p>";
            exit();
        } elseif ($signupCheck == "emailtaken") {
            echo "<p class='errorreg'> Email taken </p>";
            exit();
        } elseif ($signupCheck == "passwordwrong") {
            echo "<p class='errorreg'> Password should be : at least 8 characters, one letter, one number </p>";
            exit();
        } else {
            echo "<p class='successreg'> Created! </p>";
            exit();
        }

    }

    ?>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <p>If you already registered <a style="border: 3px solid ; color: white; background-color: #263238;" href="#">Click
            here</a></p>

</div>


</div>

<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                <p class="mb10">NBA Latest</p>
                <p><i class="fa fa-location-arrow"></i> A005, Epoka University, Tiranë, Albania </p>
                <p><i class="fa fa-phone"></i> +355682245556 </p>
                <p><i class="fa fa fa-envelope"></i> acenga20@epoka.edu.al || raga20@epoka.edu.al ||
                    kmerdhoci20@epoka.edu.al </p>
                <a style="color: white;" href="adminlogin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    ADMIN LOGIN</a>
            </div>
            <p class="text-center">Copyright @2022 | NBALatest</p>

            <ul class="social_footer_ul">
                <li><a href="https://www.facebook.com/NBALatest/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/NBALatest"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/channel/NBALatest"><i
                                class="fab fa-youtube"></i></a>
                </li>
                <li><a href="https://www.instagram.com/epokauniversity/?hl=en"><i
                                class="fab fa-instagram"></i></a></li>
            </ul>

        </div>

</footer>


</body>

</html>