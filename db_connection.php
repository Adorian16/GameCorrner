<?php

$servername = "localhost";
$my_username = "root";
$my_password = "";
$dbname = "gamecorrner";

$conn = new mysqli($servername, $my_username, $my_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql=("SELECT Picture FROM games");

$result=$conn->query($sql);


?>
