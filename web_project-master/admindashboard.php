<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
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

        .button1 {
            background-color: #517082;
            border: none;
            color: white;
            padding: 16px 32px;
            margin-top: 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1:hover {
            background-color: #5e859b;
            color: white;
        }
    </style>

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


</head>

<body>

<?php
include('db.php');
session_start();

if (isset($_SESSION["emailA"])) {
    $email = $_SESSION["emailA"];
    $query = mysqli_real_escape_string($con, "SELECT * FROM message ");
    $result1 = mysqli_query($con, $query) or die(mysqli_error($con));
    echo('

    <div class="header">
        <h2 class="logo" ; style="text-transform: none;">NBAlatest</h2>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>
        <ul class="menu">



            <a href="index.php">Home</a>
            <a style="border-bottom: white 2px solid;" href="admindashboard.php">Dashboard</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>




            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>

    <div class="w3-content" style="max-width:1600px">


        <header class="w3-container w3-center w3-padding-48 w3-white">
            <h1 class="w3-xxxlarge"><b>Welcome in <span style="color: #34495E;font-weight: bolder;">admin dashboard</span
                        c></b></h1>
                        <div>
                        <h2 style="text-shadow:1px 1px 0 #444">CUSTOMERS MESSAGES 
                        
                        <i class="fa fa-refresh"></i>
                      
                        </h2>  
                      </div>
<form action="export.php" method="post">
<input class="button1" type="submit" value="Download Excel file of contact info" name="export">
<input class="button1" type="submit" value="Download Excel file of user info" name="userexport">
</form>


        </header>

       
    ');

    $sql = "SELECT * FROM message";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            ?>

            <style>
                table {
                    overflow-x: auto;
                    width: 100%;
                    align = "center"
                }

                th, td {
                    padding: 15px;
                    text-align: center;
                    border-bottom: 2px solid #ddd;
                    background-color: #34495E;
                    color: white;
                }

                td {
                    max-width: 100px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }

                }
            </style>
            <table>
                <thead>
                <tr>
                    <th><?php echo "Id of msg" ?></th>
                    <th><?php echo "firstname" ?></th>
                    <th><?php echo "lastname" ?></th>
                    <th><?php echo "country" ?></th>
                    <th><?php echo "subject" ?></th>

                    </th>

                </thead>
                <br>
                <thead>

                <tr>
                    <td><?php echo $row['id_of_msg'] ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['subject'] ?></td>
                </tr>
                </thead>

            </table>

            <?php
        }
    }
    while ($row = mysqli_fetch_array($result1, MYSQLI_NUM)) {
        echo(`
        <tr>
          <td>$row[0]</td>
          <td>$row[1]</td>
          <td>$row[2]</td>
        </tr>`);
    }
    echo('</table>');

} else {
    echo "error";
}
?>

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
