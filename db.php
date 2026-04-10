<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mkce_hms";

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "mkce_hms",
    3306
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>