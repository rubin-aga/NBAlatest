<?php
include("db.php");


$name = $_POST["name"];
$surname = $_POST["surname"];
$password = $_POST["password"];
$dob = $_POST['dob'];
session_start();
$email = $_SESSION['email'];
$sql = "UPDATE users(name, surname, email, password, date)
        SET `name` = '$name' , surname = '$surname' , email = '$email' , password = '$password' ,date = '$dob '
    WHERE  `email` = '$email'";

if ($con->query($sql) === TRUE) {
    header("Location: index.php");

} else {
    echo "error";
}

