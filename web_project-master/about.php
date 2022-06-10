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
    <title>NBAlatest- About </title>
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
            <div class="dropdown">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                    <a href="accessoriesShop.php">Accessories</a>
                    <a href="shirtsShop.php">Shirts</a>
                    <a href="shortsShop.php">Shorts</a>
                </div>
            </div>
            <a href="logout.php">Logout</a>
            <?php
        } elseif (isset($_SESSION['email'])) {

            ?>
            <a href="index.php">Home</a>
            <a style="border-bottom: white 2px solid;" href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                    <a href="accessoriesShop.php">Accessories</a>
                    <a href="shirtsShop.php">Shirts</a>
                    <a href="shortsShop.php">Shorts</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                    <center><a href="#">
                        <img src="img/equipments/1.png" alt="image from database" height="120px" style="border-radius:50%">
                    </a></center>
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
            <div class="dropdown">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                    <a href="accessoriesShop.php">Accessories</a>
                    <a href="shirtsShop.php">Shirts</a>
                    <a href="shortsShop.php">Shorts</a>
                </div>
            </div>
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
    <a class="selectedMenu" href="#">Who we are</a>
    <a href="creators.php">Meet the creators</a>
    <a href="contact.php">Get in touch!</a>
</ul>


<div class="outer">
    <div class="">
        <div class="meetContent">
            <h1><b>NBAlatest</b></h1>
            <p> NBALatest is an Albanian news outlet for all the latest scoops
                regarding basketball with its headquarters in Tirana, Albania.<br>
                The company has offices throughout the United States and Europe.<br>
                It is one of the world's leading news source for news and basketball equipment.<br>
                We make sure to provide real, interesting and captivating stories every day for our readers. <br>
                The merchandise shop features high-quality premium made basketball equipment and clothes. <br>
                This includes shirts, shorts and other accessories that will help elevate your game </p>
        </div>
        <br>
        <div class="meetContent">
            <h2><b>Check out our shop:</b></h2>
            <a href="shirtsShop.php"><img height="400px" src="img/shop.gif" alt="shop"/></a>
        </div>
    </div>
</div>
<br>
<br>
<br>


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
