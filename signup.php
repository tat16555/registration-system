<?php 

    session_start();
    require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Font Icon -->
        <link rel="stylesheet" href="FormSignup/fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="FormSignup/css/style.css">

    <link rel="stylesheet" href="css/signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
</head>
<body>
    <div class="topnav">
        <a href="Home.php">Home</a>
        <a href="visitor_page/news.php">News</a>
        <a href="user/Book_course.php">Book Course</a>
            <div class="topnav-right">
                <a href="signin.php">Log in</a>
                <a class="active" href="#">Sign Up</a>
            </div><br>
    </div>
</body>
<body>
<div class="container">
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="FormSignup/images/signup-1.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form action="signup_db.php" method="post" class="register-form" id="register-form">
                        <?php if(isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php 
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                                <?php } ?>
                                <?php if(isset($_SESSION['success'])) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php 
                                            echo $_SESSION['success'];
                                            unset($_SESSION['success']);
                                        ?>
                                    </div>
                                <?php } ?>
                                    <?php if(isset($_SESSION['warning'])) { ?>
                                        <div class="alert alert-warning" role="alert">
                                            <?php 
                                                echo $_SESSION['warning'];
                                                unset($_SESSION['warning']);
                                            ?>
                                        </div>
                        <?php } ?>
                    <h2>form signup</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstname" class="form-label">First name :</label>
                                <input type="text" class="form-control" name="firstname" id="name" aria-describedby="firstname">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="form-label">Last name :</label>
                                <input type="text" class="form-control" name="lastname" id="father_name" aria-describedby="lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">username :</label>
                            <input type="text" class="form-control" name="username" id="name" aria-describedby="username">
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone :</label>
                            <input type="phone" class="form-control" name="phone" id="phone" aria-describedby="phone">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email ID :</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm password" class="form-label">Confirm Password :</label>
                            <input type="password" class="form-control" name="c_password" id="c_password">
                        </div>

                        <div>
                            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                            <hr>
                            <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>