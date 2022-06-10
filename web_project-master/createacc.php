<?php


if (isset($_POST['submit'])) {


    include("db.php");

    $email = $_POST["email"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];

    $password = $_POST["password"];
    $dob = $_POST['dob'];

    if (empty($email) || empty($name) || empty($surname) || empty($password) || empty($dob)) {
        header("Location: register.php?signup=empty");
        exit();

    } else {

        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            header("Location: register.php?signup=namewrong");
            exit();
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $surname)) {
            header("Location: register.php?signup=surnamewrong");
            exit();
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: register.php?signup=emailwrong");
            exit();

        } elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $password)) {
            header("Location: register.php?signup=passwordwrong");
            exit();
        }
    }

    $emailcheck = mysqli_query($con, "SELECT `email` FROM `users` WHERE email='$email'");


    if (mysqli_num_rows($emailcheck) >= 1) {
        header("Location: register.php?signup=emailtaken");
        exit();

    } else {
        $stmt = $con->prepare("INSERT INTO users (name, surname,email,password,date) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss", $name, $surname, $email, $password, $dob);
        $stmt->execute();
        header("Location: register.php?signup=success");
        exit();
    }
}


?>




