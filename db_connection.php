<?php
//database connection 'clienti'
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamecorrner";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql=("SELECT Picture FROM games");

$result=$conn->query($sql);
//if ($result->num_rows > 0) {
  //  while($row = $result->fetch_assoc())
?>
