
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

/* CREATE YOUR MYSQL CONNECTION */
// $user_list = "SELECT * FROM users";
// while ($user = mysql_fetch_array($user_list))
// {
//     if ($id == $user['id'])
//     {
//         echo('Already exist.');
//     }
//     else
//     {
//         /* YOUR CODE */
//     }
// }
$dpi = $_POST["dpi"];
$hz = $_POST["hz"];
$edpi = $_POST["edpi"];
$id_1 = uniqid();
$sql = "INSERT INTO main (id, dpi, hz, edpi)
VALUES ('$id_1', '$dpi', '$hz', '$edpi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>