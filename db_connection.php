<?php
//database connection 'clienti'
$servername = "localhost";
$my_username = "root";
<<<<<<< HEAD
$my_password = "root";
$dbname = "gamecorner";
=======
$my_password = "";
$dbname = "gamecorrner";
>>>>>>> 47b4783d71311d5e43318aa4174ff74ffd06ba27


// Create connection
$conn = new mysqli($servername, $my_username, $my_password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql=("SELECT Picture FROM games");

$result=$conn->query($sql);

?>
