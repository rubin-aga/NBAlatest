<?php

session_start();
if (isset($_POST['submit'])) {
    include("db.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result1 = mysqli_query($con, "SELECT email, password FROM users WHERE email = '" . $email . "' AND  password = '" . $password . "'");
    if (mysqli_num_rows($result1) > 0) {
        $error = FALSE;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = "$password";
        header("Location: index.php");
    } else {


        header("Location: login.php?login=fail");
        exit();


    }
}
//   ?>
