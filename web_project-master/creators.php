<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="styles/add.css">
    <link rel="shortcut icon" href="img/logo.png"/>
    <title>NBAlatest- Creators </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

<div class="header">
    <h2 class="logo" ; style="text-transform: none;">NBAlatest</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
    </label>

    <ul class="menu">
        <?php
        if (isset($_SESSION["emailA"])) {
            ?>
            <a href="index.php">Home</a>
            <a href="admindashboard.php">Dashboard</a>
            <a style="border-bottom: white 2px solid;" href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>
            <?php
        } elseif (isset($_SESSION['email'])) {

            ?>
            <a href="index.php">Home</a>
            <a style="border-bottom: white 2px solid;" href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                    <a href="#">
                        <image href="" alt="image from database">
                    </a>
                    <a href="update.php">Update Account</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            <?php
        } else {
            ?>
            <a href="index.php">Home</a>
            <a style="border-bottom: white 2px solid;" href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        <?php } ?>
    </ul>
</div>


<section style="background-image: url('img/3.jpg');height:300px">
    <div>
        <br>
        <h1 class="about_h"><b>ABOUT US</b></h1>
        <p class="sous_paragraph">Our mission is to create a fully, easily accessible news page <br> with additional fun
            functionalities. <br>
            Learn more about us in the following sections.</p>
    </div>
</section>

<ul class="menuAbout">
    <a href="about.php">Who we are</a>
    <a class="selectedMenu" href="#">Meet the creators</a>
    <a href="contact.php">Get in touch!</a>
</ul>


<h1 style="text-align:center;margin-top: 24px; padding-top: 30px;"><b>Meet our team!</b></h1>
<p style="font-size:16px;text-align: center;font-family: " montserrat", sans-serif;">Rubin, Alissa, and Klaid are
currently in their second year of university studying Software Engineering, at Epoka University.<br>
They first met during their first year of studies and discovered they shared a common passion for the world of
coding.<br>
Throughout these two years they have worked on a lot of projects, with <i>NBAlatest</i> being their latest creation.<br><br><br>
<span style="font-size: 13px">If any questions arise, feel free to contact us.</span>
</p>
<br>


<div class="row">
    <div class="column">
        <div class="card">
            <img src="img/rubin.png" alt="Rubin" style="width:35%">
            <div class="container">
                <h2>Rubin Aga</h2>
                <p class="title">CEO & Founder</p>
                <p>Software Engineering Student <b>@Epoka University</b>.</p>
                <p>raga20@epoka.edu.al</p>
                <p>
                    <button class="button"><a href="mailto:raga@epoka.edu.al">Contact</a></button>
                </p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="img/alissa.png" alt="alissa" style="width:35%">
            <div class="container">
                <br>
                <h2>Alissa Çenga</h2>
                <p class="title">CEO & Founder</p>
                <p>Software Engineering Student <b>@Epoka University</b>.</p>
                <p>acenga20@epoka.edu.al</p>
                <p>
                    <button class="button"><a href="mailto:acenga20@epoka.edu.al">Contact</a></button>
                </p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="img/klaid.png" alt="ks" style="width:31%">
            <div class="container">
                <br>
                <h2>Klaid Merdhoci</h2>
                <p class="title">CEO & Founder</p>
                <p>Software Engineering Student <b>@Epoka University</b>.</p>
                <p>kmerdhoci20@epoka.edu.al</p>
                <p>
                    <button id="abcde" class="button"><a href="mailto:kmerdhoci20@epoka.edu.al">Contact</a></button>
                </p>
            </div>
        </div>
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
