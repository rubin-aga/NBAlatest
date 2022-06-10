<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <style>

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
    <link rel="shortcut icon" href="img/logo.png"/>
    <title>NBAlatest- Contact </title>
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
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


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
            <a href="about.php">About</a>
            <a style="border-bottom: white 2px solid;" href="contact.php">Contact</a>
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
            <a href="about.php">About</a>
            <a style="border-bottom: white 2px solid;" href="contact.php">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">Shop</button>
                <div class="dropdown-content">
                    <a href="accessoriesShop.php">Accessories</a>
                    <a href="shirtsShop.php">Shirts</a>
                    <a href="shortsShop.php">Shorts</a>
                </div>
            </div>
            <a href="logout.php">Logout</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            <?php
        } else {
            ?>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a style="border-bottom: white 2px solid;" href="contact.php">Contact</a>
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


<br>
<br>
<br>
<div class="outer1">
    <div class="">
        <div class="meetContent">
            <h1><b>Leave your feedback!</b></h1>
            <p> Whether you have a question, you would like some improvements, do not hesitate to contact us.</p>
        </div>
    </div>
</div>

<div style="text-align: center" class="container_form">
    <form action="messagefile.php" method="POST">
        <br>
        <label class="form_label" for="fname"><b>First Name:</b></label>
        <input class="input_form" type="text" id="fname" name="firstname" placeholder="Your name.."> <br>
        <br>
        <label class="form_label" for="lname"><b>Last Name:</b></label>
        <input class="input_form" type="text" id="lname" name="lastname" placeholder="Your last name.."> <br>
        <br>
        <label class="form_label" for="country"><b>Country:</b></label>
        <select style="width:202px;border:2px solid black" class="input_form" id="country" name="country">
            <option value="Albania">Albania</option>
            <option value="Kosova">Kosovo</option>
            <option value="USA">USA</option>
            <option value="Europe">Europe</option>
        </select>
        <br>

        <label style="margin-right:340px;display: inline-block;" class="" for="subject"><b>Your comment:</b></label><br>
        <textarea class="input_form" id="subject" name="subject" placeholder="Write something.."
                  style="height:200px"></textarea>

        <input id="submit_contact" type="submit" name="submit" value="Submit">


    </form>

</div>

<br>
<br>
<h1 style="text-align:center;font-family: 'Alata', sans-serif;"> User Reviews</h1>
<p style="text-align:center;font-family: 'Alata', sans-serif;color:darkgray">More than 1000 users are satisfied using
    our website, and we wanted to share their experience with you</p>
<br>
<article>
    <div class="columnForm contactsForm">
        <div style="font-family: 'Alata', sans-serif;font-size:25px;padding:20px;">Erica Marshall<br>
            <p style="font-size:15px;font-family: 'Alata', sans-serif;">Entrepreneur</p>
        </div>
        <img src="img/erica.jpeg" height="200px" alt="erica"></img>
        <br>
        <h3 style="font-family: 'Alata', sans-serif;">Feedback:</h3>
        <p class="userParagraph">
            "I loved this page, it made my life so stress free, since I enjoy watching
            the latest news in one place and I also found the best merch to gift to
            my boyfriend who is a huge Boston Celtics fan. Cheers to the team,
            keep up the great work..."
        </p>

    </div>
    <div class="columnForm contactsForm">
        <div style="font-family:'Alata', sans-serif;;font-size:25px;padding:20px;">Ben Johnson<br>
            <p style="font-size:15px;font-family: 'Alata', sans-serif;">Social Media Manager</p>
        </div>
        <img src="img/ben.jpg" height="200px" alt="ben"></img>
        <br>
        <h3 style="font-family:'Alata', sans-serif;">Feedback:</h3>
        <p class="userParagraph">
            "There is nothing I don't love about this page...
            Well probably the fact that it is so well structured that I always tend to spend more than
            the limit of money I allow mysel."
        </p>

    </div>
    <div class="columnForm contactsForm">
        <div style="font-family:'Alata', sans-serif;;font-size:25px;padding:20px;">Nina & Sara<br>
            <p style="font-size:15px;font-family: 'Alata', sans-serif;">Photographers</p>
        </div>
        <img src="img/ninaSara.jpg" height="200px" alt="sisters"></img>
        <br>
        <h3 style="font-family: 'Alata', sans-serif;">Feedback:</h3>
        <p class="userParagraph">
            "As huge basketball appreciators (we have been practicing since we were 10 and 8),
            we enjoy watching NBA whenever we find the time. Also we attend lots of NBA games
            as professional photographers that is why we enjoy to learn the latest scoops from the page."
        </p>

    </div>
</article>
<br>


<h1 style="text-align:center;font-family: 'Alata', sans-serif;">Our location:</h1>

<div style="text-align: center; class=" gmap
">
<iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.573860342286!2d19.703647315290258!3d41.40505997926261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13502c4d8e14227d%3A0x92c16879aa946786!2sEpoka%20University!5e0!3m2!1sen!2s!4v1579431780780!5m2!1sen!2s"
        width="600" height="450" frameborder="0" style="border-radius:50px;border:2px solid black"
        allowfullscreen=""></iframe>


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
