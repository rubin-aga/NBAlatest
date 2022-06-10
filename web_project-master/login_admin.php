<?php
if (isset($_POST['submit'])) {


    include("db.php");


    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);

    $result1 = mysqli_query($con, "SELECT * FROM admin WHERE email = '" . $email . "' AND  password = '" . $password . "'");
    if (mysqli_num_rows($result1) > 0) {
        session_start();
        $_SESSION["emailA"] = "$email";
        $_SESSION["password"] = "$password";
        $error = FALSE;
        header("Location: admindashboard.php");
    } else {
        header("Location: adminlogin.php?login=fail");
        exit();
    }
}
?>
