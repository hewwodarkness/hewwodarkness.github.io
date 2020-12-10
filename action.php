
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
$id_1 = abs( crc32( uniqid() ) );;;
$dpi = $_POST["dpi"];
$hz = $_POST["hz"];
$edpi = $_POST["edpi"];
$img = $_POST["img"];
$name = $_POST["name"];
$sensitivity = $_POST["sensitivity"];
$zoom = $_POST["zoom"];
$mouseaccel = $_POST["mouseaccel"];
$windowssens = $_POST["windowssens"];
$rawinput = $_POST["rawinput"];
$crosshair = $_POST["crosshair"];
$viewmodel = $_POST["viewmodel"];
$cl_bob = $_POST["cl_bob"];


$sql = "INSERT INTO main (id, dpi, hz, edpi, img, name, sensitivity, zoom, mouseaccel, windowssens, rawinput, crosshair, viewmodel, cl_bob)
VALUES ('$id_1', '$dpi', '$hz', '$edpi', '$img', '$name', '$sensitivity', '$zoom' ,'$mouseaccel','$windowssens','$rawinput','$crosshair','$viewmodel', '$cl_bob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>