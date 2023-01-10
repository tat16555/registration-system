<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['worker_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="icon" type="image/png" href="Login_v18/images/icons/favicon.ico"/>
</head>
<body>
    <div class="container">
        <?php 

            if (isset($_SESSION['worker_login'])) {
                $admin_id = $_SESSION['worker_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $worker_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    </div>
</body>
</html>