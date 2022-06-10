<?php
include("db.php");
if (isset($_POST["export"])) {

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=contactmsg.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('id_of_msg', 'firstname', 'lastname', 'country', 'subject', 'timestamp'));
    $query = "SELECT * from message ORDER BY id_of_msg ASC";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }
    fclose($output);

    //user export
}
if (isset($_POST["userexport"])) {

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=userinfo.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('id', 'name', 'surname', 'email', 'password', 'birthday', 'timestamp'));
    $query = "SELECT * from users ORDER BY id ASC";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }
    fclose($output);
} 


