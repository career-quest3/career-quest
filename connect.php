<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "career_quest";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Failed to connect db: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
