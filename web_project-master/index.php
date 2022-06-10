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

    <style>


    </style>

    <link rel="shortcut icon" href="img/logo.png"/>
    <title>NBAlatest- Home </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script>


    </script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            position: absolute;
            width: 1000px;
            height: 80px;
            bottom: 0px;
            left: 0px;
            color: #ffffff;
            background: black;
            text-align: center;
            font-weight: bold;
            opacity: 0.9;
            font-size: 23px;
            padding: 20px;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }

        article {
            display: inline-block;
            vertical-align: middle;
        }

    </style>


</head>

<body>

<div class="header">
    <h2 class="logo zoomIn" ; style="text-transform: none;">NBAlatest</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
    </label>


    <ul class="menu">
        <?php
        if (isset($_SESSION["emailA"])) {
            ?>
            <a href="index.php">Home</a>
            <a style="border-bottom: white 2px solid;" href="admindashboard.php">Dashboard</a>
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
            <a href="logout.php">Logout</a>
            <?php
        } elseif (isset($_SESSION['email'])) {

            ?>
            <a style="border-bottom: white 2px solid;" href="index.php">Home</a>
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
            <div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                    <center><a href="#"><img src="img/equipments/1.png" alt="image from database" height="120px"
                                             style="border-radius:50%"></a></center>
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
            <a style="border-bottom: white 2px solid;" href="index.php">Home</a>
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
            <a href="register.php">Register</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        <?php } ?>
    </ul>
</div>

<div class="w3-content" style="max-width:1600px">


    <header class="w3-container w3-center w3-padding-48 w3-white">
        <h1 class="w3-xxxlarge"><b>Welcome to <span style="color: #263238;font-weight: bolder;">NBA<span
                            style="color:#8b0000">latest</span></span
                        c></b></h1>

    </header>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <a href="https://www.nba.com/news/5-takeaways-from-the-celtics-game-3-victory-over-warriors-in-2022-nba-finals">
                <img src="img/celtis.jpg" style="width:100%">
            </a>
            <div class="text">5 Takeaways from Celtics' thorough Game 3 Victory</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <a href="https://www.nba.com/news/24-thoughts-on-game-2-of-2022-nba-finals">
                <img src="img/cel war.jpg" style="width:100%">
            </a>
            <div class="text">24 thoughts on Warriors' series-tying victory</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <a href="https://www.nba.com/news/the-finals-stat-game-3-celtics-dominate-the-paint">
                <img src="img/warriors.jpg" style="width:100%">
            </a>
            <div class="text">The Final Stat: Celtics dominate paint in Game 3</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <h1>Outside NBA</h1>

    <article align="left"
             style="
				width: 270px;
				height: 500px;
				border: 2px solid gray;
				padding: 5px;
				border-radius: 10px;
				margin: 10px;
			  "
    >
        <a href="https://www.fiba.basketball/basketballworldcup/2023/european-qualifiers/news/30-point-club-the-top-scoring-performances-in-the-european-qualifiers">
            <img
                    src=
                    "img/30 points.jpg"
                    alt=""
                    width="250"
                    height="200"
                    class="alignnone size-medium wp-image-560930"
            />
        </a>
        <h3>30-point club: The top scoring performances in the European Qualifiers</h3>

        <p>
            MUNICH (Germany) - There have been some memorable performances
            in the FIBA Basketball World Cup European Qualifiers in recent
            years with 12 players in the 30-point club since 2017.
        </p>

    </article>

    <article align="right"
             style="
				width: 270px;
				height: 500px;
				border: 2px solid gray;
				padding: 5px;
				border-radius: 10px;
				margin: 10px;
			  "
    >
        <a href="https://www.fiba.basketball/asiacup/2022/news/meet-the-asia-cup-2022-teams-syria">
            <img
                    src=
                    "img/siria.jpg"
                    alt=""
                    width="250"
                    height="200"
                    class="alignnone size-medium wp-image-560930"
            />
        </a>
        <h3>Meet the Asia Cup 2022 Teams: Syria</h3>

        <p>
            JAKARTA (Indonesia) - Through all of the situations
            that Syria have faced internally over the years,
            the spirit of the men’s basketball national team
            has always remained strong.
        </p>

    </article>

    <article
            style="
				width: 270px;
				height: 500px;
				border: 2px solid gray;
				padding: 10px;
				border-radius: 10px;
				margin: 10px;
			  "
    >
        <a href="https://www.fiba.basketball/basketballworldcup/2023/european-qualifiers/news/roster-tracker-2023-fiba-wc-european-qualifiers-window-3">
            <img
                    src=
                    "img/schro.jpg"
                    alt=""
                    width="250"
                    height="200"
                    class="alignnone size-medium wp-image-560930"
            />
        </a>
        <h3>Roster Tracker - Schroder features in Germany squad</h3>

        <p>
            MIES (Switzerland) - The third window of the FIBA Basketball
            World Cup 2023 European Qualifiers is inching closer and closer and with that,
            national federations from competing nations have begun to announce player rosters.
        </p>

    </article>

    <article
            style="
				width: 270px;
				height: 500px;
				border: 2px solid gray;
				padding: 10px;
				border-radius: 10px;
				margin: 10px;
			  "
    >
        <a href="https://www.fiba.basketball/basketballworldcup/2023/americas-qualifiers/news/one-question-each-americas-team-should-answer-in-window-3">
            <img
                    src=
                    "img/america.jpg"
                    alt=""
                    width="250"
                    height="200"
                    class="alignnone size-medium wp-image-560930"
            />
        </a>
        <h3>One question each Americas team should answer in Window 3</h3>

        <p>
            MIAMI (United States) – The common goal of each national
            team will be to add victories especially in this decisive
            third window of the Americas Qualifiers.
        </p>

    </article>

    <article
            style="
				width: 270px;
				height: 500px;
				border: 2px solid gray;
				padding: 10px;
				border-radius: 10px;
				margin: 10px;
			  "
    >
        <a href="https://www.fiba.basketball/americas/u18/2022/news/ecuador-grab-first-victory-usa-remain-undefeated-canada-argentina-win-in-day-3">
            <img
                    src=
                    "img/brazilo.jpg"
                    alt=""
                    width="250"
                    height="200"
                    class="alignnone size-medium wp-image-560930"
            />
        </a>
        <h3>Brazil, USA qualified as group leaders as they head to Quarterfinals</h3>

        <p>
            TIJUANA (Mexico) – The FIBA ​​U18 Americas Championship continued on
            Wednesday at the Zonkeys Auditorium in Tijuana, Mexico, with four
            games that defined the Quarter-Finals.
        </p>

    </article>


</div>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
</script>


<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>

                <p class="mb10">NBALatest</p>
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
