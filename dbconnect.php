<?php

$servername = "localhost";
$username = "*";
$password = "*";
$dbname = "site";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
