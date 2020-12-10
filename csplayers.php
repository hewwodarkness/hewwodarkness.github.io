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
    <link rel="stylesheet" href="css/csplayersstyle.css">
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
        <a href="index.html"><h1 class="features__title">Portfolio</h1><a>
    </div>
    <div class="currentdevicesitem1">
      <a href="csplayers.php"><h1 class="features__title">CS Players list</h1></a>
    </div>
    <div class="currentdevicesitem1">
      <a href="form.html"><h1 class="features__title">Add player</h1></a>
    </div>
    <div class="currentdevicesitem1">
        <h1 class="features__title" style=" color: red">Calculator</h1>
    </div>

</div>
<?php include "db_conn.php"; ?>
<?php

$sql_select = "SELECT * FROM main";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<div class="intro">
<div class="csfeatures">
	<?php foreach($row as $row): ?>
        <div class="csplayers">
            <img class="csplayersimg" src="uploads/<?=$row['img']?>" alt="">
            <a href="csplayerspost.php?id=<?=$row['id']?>"><h1 class="features__title"><?=$row['name']?></h1></a>
        </div>
	<?php endforeach; ?>
</div>
</div>
<script>
    const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 50;
const balls = [];

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 94)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 94)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  
  balls.push(ball);
  document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 12
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});
</script>


</body>
</html>