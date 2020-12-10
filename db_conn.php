<?php  

$servername = "localhost";
$username = "id15637309_root";
$password = "t/i42|HRbb>bv7P^";
$dbname = "id15637309_players";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
	?>