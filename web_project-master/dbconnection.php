<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "q23g1sw8Px3q";
$db = "web_project";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
