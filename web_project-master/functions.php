<?php
include "dbconnection.php";

function getUser($email)
{
    global $con;
    $sql = "SELECT * FROM user where email='$email'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        return mysqli_fetch_assoc($result);
    } else return null;
}
