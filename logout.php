<?php 

    session_start();
    unset($_SESSION['user_login']);
    unset($_SESSION['admin_login']);
    unset($_SESSION['worker_login']);
    header('location: Home.php');

?>