<?php
//database connection 'clienti'
$servername = "localhost";
$my_username = "root";
$my_password = "root";
$dbname = "gamecorner";


// Create connection
$conn = new mysqli($servername, $my_username, $my_password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql=("SELECT Picture FROM games");

$result=$conn->query($sql);

?>
