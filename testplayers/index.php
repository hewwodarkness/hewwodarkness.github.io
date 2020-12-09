<!-- 
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
// $dpi = $_POST["dpi"];
// $hz = $_POST["hz"];
// $edpi = $_POST["edpi"];
// $id_1 = uniqid();
// $sql = "INSERT INTO main (id, dpi, hz, edpi)
// VALUES ('$id_1', '$dpi', '$hz', '$edpi')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close(); -->

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/8.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
<div class="header">
    <div class="container">
        <h2>Players and their settings</h2>
    </div>
</div>
<div class="menutest">
<div class="features1">
    <div class="currentdevicesitem1">
        <h1 class="features__title">CS</h1>
    </div>
    <div class="currentdevicesitem1">
        <h1 class="features__title">Valorant</h1>
    </div>
    <div class="currentdevicesitem1">
        <h1 class="features__title">Main</h1>
    </div>
    <div class="currentdevicesitem1">
        <h1 class="features__title">Calculator</h1>
    </div>

</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_select = "SELECT * FROM main";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<div class="intro">
<div class="csfeatures">
	<?php foreach($row as $row): ?>
        <div class="csplayers">
            <img class="csplayersimg" src=<?=$row['img']?> alt="">
            <a href="post.php?id=<?=$row['id']?>"><h1 class="features__title"><?=$row['name']?></h1></a>
        </div>
	<?php endforeach; ?>
</div>
</div>
</body>
</html>