<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "Admin";
$dbName = "examen01";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>