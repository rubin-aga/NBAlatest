<?php
include("db.php");
if (isset($_POST['submit'])) {

    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];
    $stmt = $con->prepare("INSERT INTO message (firstname, lastname,country,subject) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $fname, $lname, $country, $subject);
    $stmt->execute();
    if ($stmt) {

        header("Location: contact.php?message=success");
        exit();
    }


}

 
