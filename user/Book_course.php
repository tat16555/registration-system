<?php 

    session_start();
    require_once '../config/course_information.php';
    require_once '../config/db.php';
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
    <title>Book course</title>
    
    <link rel="icon" type="../image/png" href="../Login_v18/images/icons/favicon.ico"/>
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="../css/FormQR.css">
    <link rel="stylesheet" href="../css/Book_course.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <style>
            * {
            box-sizing: border-box;
            }

            /* Create two equal columns that floats next to each other */
            .column {
            float: left;
            width: 50%;
            padding: 10px;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }
            .btn:hover {
            background-color: #ddd;
            }

            .btn.active {
            background-color: #666;
            color: white;
            }
</style>
</head>

<body>
    <div class="container">
        <?php 
            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    </div>
    <div class="topnav">
        <a href="../user.php">Home</a>
        <a href="news.php">News</a>
        <a class="active" href="Book_course.php">Book Course</a>
            <div class="topnav-right">
                <a>User <?php echo $row['username'] ?></a>
                <a href="../logout.php" class="btn btn-danger">Logout</a><br>
            </div>
            <br><br><hr>
            <h1 style="text-align: center;">เรียนมวยไทยได้ง่ายๆ เพียงแค่คุณกดจอง</h1>
                <ul>
                    <li>คอร์สเรียน มีทั้งหมด 4 คอร์สเรียน ได้แก่</li>
                    <li>ยังไม่มีพื้นฐาน ( Basic/Beginner Class training )</li>
                    <li>มีพื้นฐานแล้ว ( Intermediate Class Training )</li>
                    <li>สำหรับนักมวยมืออาชีพหรือผู้ที่ฝึกทักษะป้องกันตัวแบบจริงจัง ( Advance Class Training )</li>
                    <li>เรียนตัวต่อตัว ( Private Training )</li>
                </ul>
                <hr>
            <?php 
                    $conn = new PDO("mysql:host=$servername;dbname=data_studio", $username, $password);
                    $stmt = $conn->query("SELECT * FROM course");
                    $stmt->execute();
                    $course = $stmt->fetchAll();

                    if (!$course) {
                        echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                    } else {
                    foreach($course as $course)  {  
                ?>
            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color:#04AA6D"><?php echo $course['Type_Name']; ?></li>
                    <li class="grey"><?php echo $course['Cou_Name']; ?></li>
                    <li><p class="btn btn-warning">ราคา <?php echo $course['price']; ?> THB</p></li>
                    <li>รายระเอียดคอร์สเรียน</li>
                    <li><?php echo $course['details']; ?></li>
                    <li class="grey"><button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-bars"></i>จองคอร์ส</button><button class="btn btn-warning">ในราคา <?php echo $course['price']; ?> THB</button></li>
                </ul>              
            </div>
            <?php }  } ?>
            <div class="columns">
                <ul class="price">
                    <li class="header">จะมาในเร็วๆ นี้</li>
                    <li class="grey">ไม่พบข้อมูล</li>
                    <li><p class="btn btn-warning">ราคา???</p></li>
                    <li>รายระเอียดคอร์สเรียน</li>
                    <li>ไม่มีข้อมูลที่เป็นประโยชน์!%d</li><br><br><br><br>
                    <li class="grey"><button class="container" style="width:auto;"><i class="fa fa-bars"></i>จองคอร์ส</button><button class="btn btn-warning">ในราคา ??? THB</button></li>
                </ul>
            </div>
            <div class="columns">
                <ul class="price">
                    <li class="header">จะมาในเร็วๆ นี้</li>
                    <li class="grey">ไม่พบข้อมูล</li>
                    <li><p class="btn btn-warning">ราคา???</p></li>
                    <li>รายระเอียดคอร์สเรียน</li>
                    <li>ไม่มีข้อมูลที่เป็นประโยชน์!%d</li><br><br><br><br>
                    <li class="grey"><button class="container" style="width:auto;"><i class="fa fa-bars"></i>จองคอร์ส</button><button class="btn btn-warning">ในราคา ??? THB</button></li>
                </ul>
            </div>

            <div id="id01" class="modal"> 
            <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="QRimg/QR_Code1.png" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <h2 style="text-align: center;">1,000 THB</h2>
                </div>
                <div class="container">     
                <button type="submit">ชำระเงินแล้ว</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
            </div>
        <script src="../JS/Home.js"></script>
</body>
</html>