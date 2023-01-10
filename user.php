<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: ../signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="icon" type="image/png" href="Login_v18/images/icons/favicon.ico"/>
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/home.css">
    <img src="snowflake.png" alt="Snowflake" style="display: none;">
    <style>
        .snowflake {
            position: absolute;
            top: -50px;
            left: 0;
            width: 30px;
            height: 30px;
            background-image: url(snowflake.png);
            background-size: cover;
            animation: fall 8s linear infinite;
            }

            @keyframes fall {
            0% {
                transform: translateY(-50px);
            }
            100% {
                transform: translateY(100vh);
            }
        }
    </style>
</head>
<?php 
            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    <body>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="visitor_page/news.php">News</a>
        <a href="user/Book_course.php">Book Course</a>
            <div class="topnav-right">
                <a href="#" class="d-block"><?php echo $row['username'] ?></a>
                <a href="logout.php">Logout</a>
            </div>
    </div>
    </body>
    <body onload="showPopup()">
        <script>
            function showPopup() {
                alert("ยินดีต้อนรับเข้าสู่ระบบ", {
                style: "font-family: Arial, sans-serif; font-size: 18px; color: red; background-color: yellow; border: 2px solid green;"
                });
                alert("Happy Christmas 2022 <br> สุขสันต์วันคริสต์มาส", {
                style: "font-family: Arial, sans-serif; font-size: 18px; color: green; background-color: yellow; border: 2px solid red;"
                });
            }
        </script>
    <div class="row">
        </div>
        <div class="leftcolumn">
        <div class="card">
                <h1>Happy Christmas 2022</h1>
                <h3>มาร่วมฉลองวันคริสมาสกับเราด้วยการจองครอส</h3>
                <img src="img/christmas-feature_759.jpg" style="width: 100%";>
            </div>
            <div class="card">
            <div class="slideshow-container">
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/img_home/h4.jpg" style="width:100%">
            <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/img_home/h5.jpg" style="width:100%">
            <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/img_home/h6.jpg" style="width:100%">
            <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
        </div>
            <div class="card">
                <h2>boxing stadium</h2>
                <h5>12/20/2022</h5>
                <img src="img/img_home/Thaiboxing321441.jpg" style="width:100%">
             </div>
        </div>
            <div class="rightcolumn">
                <div class="card">
                <h2>Thai boxing</h2>
                <img src="img/img_home/TB66666666666.jpg" style="width:100%">
            </div>
                <div class="card">                                
                    <div class="fakeimg"><img src="img/img_home/GMLive-woman-we-love-muay-thai-beauty04.jpg" style="width:100%"></div><br>
                    <div class="fakeimg"><img src="img/img_home/TB3214.jpg" style="width:100%"></div><br>
                    <div class="fakeimg"><img src="img/img_home/TB322222222222222.jpg" style="width:100%"></div><br>
                    <div class="fakeimg"><img src="img/img_home/TB09213.jpg" style="width:100%"></div>
                    <div class="fakeimg"><img src="img/img_home/TB0942532.jpg" style="width:100%"></div>
                </div>
        </div><hr>
            <div class="footer"><br>
                <h2>Thank you for visiting our website.<br>ขอบคุณสำหรับการเยี่ยมชมเว็บไซต์ของเรา<hr></h2>
            </div>
        <script src="JS/Home.js"></script>
        <script>
            function createSnowflake() {
            var snowflake = document.createElement("div");
            snowflake.className = "snowflake";
            snowflake.style.top = "-50px";
            snowflake.style.left = Math.random() * window.innerWidth + "px";
            document.body.appendChild(snowflake);
            }
            setInterval(createSnowflake, 500);
        </script>
    </body>
</html>