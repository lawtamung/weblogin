<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "my_database";

$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
}
?>
