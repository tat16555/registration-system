<?php 
    session_start(); 
    include_once '../config/dbConfig.php';
    require_once '../config/db.php';
    if (!isset($_SESSION['admin_login'])) {
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
        <link rel="stylesheet" href="../css/signin.css">
        <link rel="stylesheet" href="../css/news_Sy.css">
        <link rel="stylesheet" href="../css/signincontrol.css">
        <link rel="icon" type="image/png" href="Login_v18/images/icons/favicon.ico">  
        <style>
            * {
            box-sizing: border-box;
            }

            body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            }

            .header {
            text-align: center;
            padding: 32px;
            }

            .row {
            display: -ms-flexbox; /* IE 10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE 10 */
            flex-wrap: wrap;
            padding: 0 4px;
            }

            /* Create two equal columns that sits next to each other */
            .column {
            -ms-flex: 50%; /* IE 10 */
            flex: 50%;
            padding: 0 4px;
            }

            .column img {
            margin-top: 8px;
            vertical-align: middle;
            }

            /* Style the buttons */
            .btn {
            border: none;
            outline: none;
            padding: 10px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
            font-size: 18px;
            }

            .btn:hover {
            background-color: #ddd;
            }

            .btn.active {
            background-color: #666;
            color: white;
            }
            </style>
        <?php  if (!empty($_SESSION['statusMsg'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php 
                            echo $_SESSION['statusMsg']; 
                            unset($_SESSION['statusMsg']);
                ?>
            </div>
        <?php } ?>
    </head>
<body>
  <?php 
      if (isset($_SESSION['admin_login'])) {
      $admin_id = $_SESSION['admin_login'];
      $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
    ?>
        <div class="topnav">
            <a href="" class="info"><?php echo $row['username'] ?></a>
            <a href="">Pre view Post</a>
                <div class="topnav-right">
                    <a href="../admin.php">go to admin</a>
                    <a href="control.php">out of view</a>
                </div>
        </div>
        <body>
                <div class="row">
                </div>

                <div class="leftcolumn">
                <div class="card">
                        <h1>News Thai boxing</h1>
                </div>
                        <?php 
                            $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
                            if ($query->num_rows > 0) {
                                while($row = $query->fetch_assoc()) {
                                    $imageURL = '../img/uploads/'.$row['file_name'];
                                    $headlines = $row['headlines'];
                                    $content = $row['content'];
                                    $uploaded_on = $row['uploaded_on']; 
                                ?>
                        <div class="card">
                                <div class="">
                                    <div class="">                                     
                                    <h2 style="text-align:left;" ><?php echo $headlines ?><br></h2><p style="text-align:left;"><?php echo $content ?></p><br><img src="<?php echo $imageURL ?>" alt="" width=" 80%" text-align=" center"  class="card-img"><br><p class="btn btn-sm btn-primary mb-3">อัพโหลดเมื่อ : <?php echo $uploaded_on ?></p><hr>
                                    </div>
                                </div>
                        </div>
                            <?php 
                                }
                            } else { ?>
                            <p>No image found...</p>
                        <?php } ?>  
                    </div>
                </div>
                </div>
                    <div class="rightcolumn">
                        <div class="card">
                        <h2>Thai boxing</h2>
                        <img src="../img/img_home/TB66666666666.jpg" style="width:100%">
                    </div>
                        <div class="card">                                
                            <div class="fakeimg"><img src="../img/img_home/GMLive-woman-we-love-muay-thai-beauty04.jpg" style="width:100%"></div><br>
                            <div class="fakeimg"><img src="../img/img_home/TB3214.jpg" style="width:100%"></div><br>
                            <div class="fakeimg"><img src="../img/img_home/TB322222222222222.jpg" style="width:100%"></div><br>
                            <div class="fakeimg"><img src="../img/img_home/TB09213.jpg" style="width:100%"></div>
                            <div class="fakeimg"><img src="../img/img_home/TB0942532.jpg" style="width:100%"></div>
                        </div>
                </div><hr>
        <script src="../JS/Home.js"></script>
    </body>
</html>