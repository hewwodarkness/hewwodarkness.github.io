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
  
<?php
$servername = "localhost";
$username = "id15637309_root";
$password = "t/i42|HRbb>bv7P^";
$dbname = "id15637309_players";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "players";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];

$sql_select = "SELECT * FROM main WHERE id =".$id;

$result = mysqli_query($conn, $sql_select);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

print_r($_GET)
?>

<!-- Header -->
<div class="header">
    <div class="container">
        <h2>Players and their settings</h2>
    </div>
</div>
<!-- Menu -->
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
<!-- Features -->

<div class="intro">
    <div class="features">
        <div class="features__item">
            <img class="features__icon" src=<?=$row['img']?> alt="">
            <h1 class="features__title"><?=$row['name']?></h1>
            <div class="features__text">An average player</div>

            <div>
                <i>
                    <a href="" target="_blank"><img class="two_icons" src="img/5.png"></a>
                </i>
                <i>
                    <a href="" target="_blank"><img class="two_icons" src="img/6.png"></a>
                </i>
            </div>
        </div>
        <div class="mouse_settings">
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">DPI</h1>
            <h4 class="setth4"><?=$row['dpi']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Sensitivity</h1> 
            <h4 class="setth4"><?=$row['sensitivity']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Zoom Sensitivity</h1>
            <h4 class="setth4"><?=$row['zoom']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">HZ</h1>
            <h4 class="setth4"><?=$row['hz']?></h4>
        </div>
        <div class="mouse_settings">
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Mouse Accel</h1>
            <h4 class="setth4"><?=$row['mouseaccel']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Windows Sensitivity</h1>
            <h4 class="setth4"><?=$row['windowssens']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">Raw input</h1> 
            <h4 class="setth4"><?=$row['rawinput']?></h4>
            <img class="settings_icon" src="img/10.png" alt="">
            <h1 class="settings__title">eDPI</h1> 
            <h4 class="setth4"><?=$row['edpi']?></h4>
        </div>
        
    </div>

    <!-- Alert -->
    <div>
        <div class="alert alert-info" role="alert">
			<span class="alert-title">
                Crosshair
            </span>
            <span class="alert-description" id="testtext">  
            <?=$row['crosshair']?>
            </span>

            <button class="jsbtn" id="cp_btn"><i class="fa fa-home"></i>Copy</button>
            
            <script lang="JavaScript">
                document.getElementById("cp_btn").addEventListener("click", copy_password);

                function copy_password() {
                    var copyText = document.getElementById("testtext");
                    var textArea = document.createElement("textarea");
                    textArea.value = copyText.textContent;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand("Copy");
                    textArea.remove();
                }
            </script>

		</div>
    </div>
    <div>
        <div class="alert alert-info" role="alert">
			<span class="alert-title">
                Viewmodel
            </span>
				<span class="alert-description" id="testtext1">  
                    <?=$row['viewmodel']?>
                </span>

                <button class="jsbtn" id="cp_btn1"><i class="fa fa-home"></i>Copy</button>
            
                <script lang="JavaScript">
                    document.getElementById("cp_btn1").addEventListener("click", copy_password);
    
                    function copy_password() {
                        var copyText = document.getElementById("testtext1");
                        var textArea = document.createElement("textarea");
                        textArea.value = copyText.textContent;
                        document.body.appendChild(textArea);
                        textArea.select();
                        document.execCommand("Copy");
                        textArea.remove();
                    }
                </script>
    
		</div>
    </div>
    <div>
        <div class="alert alert-info" role="alert">
			<span class="alert-title">
                CL_BOB
            </span>
				<span class="alert-description" id="testtext2">  
                <?=$row['cl_bob']?>
                </span>

                <button class="jsbtn" id="cp_btn2"><i class="fa fa-home"></i>Copy</button>
            
                <script lang="JavaScript">
                    document.getElementById("cp_btn2").addEventListener("click", copy_password);
    
                    function copy_password() {
                        var copyText = document.getElementById("testtext2");
                        var textArea = document.createElement("textarea");
                        textArea.value = copyText.textContent;
                        document.body.appendChild(textArea);
                        textArea.select();
                        document.execCommand("Copy");
                        textArea.remove();
                    }
                </script>
		</div>
    </div>
<?php if ($id == 1): ?>
    <h2 class="currentdevices">Current devices</h2>

    <!-- Features -->
    <div class="features">
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/13.png" alt="">
            <h1 class="devices__title">Acer ED242QR</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/12.jpg" alt="">
            <h1 class="devices__title">AOC I2476VWM Black</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/11.jpg" alt="">
            <h1 class="devices__title">Logitech G305</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/14.jpg" alt="">
            <h1 class="devices__title">Razer Gigantus Elite Speed Control</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/16.jpg" alt="">
            <h1 class="devices__title">Corsair Strafe Cherry MX Red</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/17.jpg" alt="">
            <h1 class="devices__title">Wacom Intuos Creative Pen Tablet CTL-480</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/18.jpg" alt="">
            <h1 class="devices__title">Blue Yeti USB Microphone - Blackout Edition</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/19.jpg" alt="">
            <h1 class="devices__title">Apple EarPods with Remote and Mic</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/20.jpg" alt="">
            <h1 class="devices__title">Intel Core i7 7700 BOX</h1>
        </div>
        <div class="currentdevicesitem">
            <img class="currentdevicesimg" src="img/21.jpg" alt="">
            <h1 class="devices__title">Zotac Geforce GTX 1060 Amp Edition 3Gb GDDR5</h1>
        </div>
    </div>
</div>
<?php endif ?>
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
