<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "log in";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Enter information Correctly");
}

?>