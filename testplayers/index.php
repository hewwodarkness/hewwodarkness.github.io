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

//print "$row[dpi] | $row[hz]";

?>
<!DOCTYPE HTML PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Selected User</title>
</head>
<body>
	<?php foreach($row as $row): ?>
		<div class="container">
 <div class="row">
  <div class="col-md-9">
   <div class="page-header">
    <h1>Все записи:</h1>
   </div>
   <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-9">
     <h4><a href="#"><?=$row['dpi']?></a></h4>
     <p>
     
     </p>
     <p><a class="btn-info btn-sm" href="#">Читать полностью</a></p>
     <br/>
     <ul class="list-inline">
      <li><i class="glyphicon glyphicon-list"></i><a href="#"> Категория: </a> | </li>
      <li><i class="glyphicon glyphicon-calendar"></i> Sept 16th. 2012 | </li>
      <li><i class="glyphicon glyphicon-comment"></i> by <a href="#">3 comments</a> | </li>
     </ul>
    </div>
   </div>
  </div>
  <div class="col-md-3">
   sidebar
  </div>
 </div>
</div>
	<?php endforeach; ?>
</body>
</html>