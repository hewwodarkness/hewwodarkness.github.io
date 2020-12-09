
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players";

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
$id_1 = uniqid();
$sql = "INSERT INTO main (id, dpi, hz, edpi)
VALUES ('$id_1', '1', '2', '3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>