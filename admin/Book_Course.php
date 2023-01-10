<?php 

    session_start();
    require_once '../config/db.php';
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: ../signin.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!--icon-->
  <link rel="icon" type="../image/png" href="Login_v18/images/icons/favicon.ico"/>
  <link rel="stylesheet" href="../css/FormQR.css">
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
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li>
        <a href="../logout.php" class="btn btn-danger" class="nav-link" data-widget="fullscreen" >Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
          <?php 
      if (isset($_SESSION['admin_login'])) {
          $admin_id = $_SESSION['admin_login'];
          $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
          $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
      }
      ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/admin-2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['username'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                  Control user
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user.php" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>user</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="control.php" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>news post</p>
                </a>
              </li>
              <li class="nav-item">
              <li class="nav-item">
                <a href="course_information.php" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>เพิ่มข้อมูลคอร์สเรียน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="teacher_information.php" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>เพิ่มข้อมูลครู</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>เพิ่มข้อมูล???</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>เพิ่มข้อมูล???</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>เพิ่มข้อมูล???</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="View_gallery.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Book_Course.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Book Course</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="code.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>View Code php</p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Book Course</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

        <h2>----->Book course</h2>
        <p>---------->การจองคอร์สเรียนมวยไทย</p>
        <div id="btnContainer">
            <button class="btn" onclick="listView()"><i class="fa fa-bars"></i>+</button> 
            <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i>-</button>
        </div>
        <br><hr>

        <div class="row">
            <div class="column" style="background-color:#aaa;">
                <h2>course 1</h2>
                <p>Some text..</p>
                <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-bars"></i>จองคอร์ส</button> 
            </div>
        <div class="column" style="background-color:#bbb;">
            <h2>course 2</h2>
            <p>Some text..</p>
            <button class="btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><i class="fa fa-bars"></i>จองคอร์ส</button>
        </div>
        </div>

        <div class="row">
        <div class="column" style="background-color:#ccc;">
            <h2>course 3</h2>
            <p>Some text..</p>
            <button class="btn" onclick="document.getElementById('id03').style.display='block'" style="width:auto;"><i class="fa fa-bars"></i>จองคอร์ส</button>
        </div>
        <div class="column" style="background-color:#ddd;">
            <h2>course 4</h2>
            <p>Some text..</p>
            <button class="btn" onclick="document.getElementById('id04').style.display='block'" style="width:auto;"><i class="fa fa-bars"></i>จองคอร์ส</button>
        </div>
        </div>
        <div id="id01" class="modal"> 
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="../user/QRimg/QR_Code1.png" alt="Avatar" class="avatar">
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

        <div id="id02" class="modal"> 
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="../user/QRimg/QR_Code2.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <h2 style="text-align: center;">1,500 THB</h2>
            </div>
            <div class="container">     
            <button type="submit">ชำระเงินแล้ว</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
        </div>

        <div id="id03" class="modal"> 
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="../user/QRimg/QR_Code3.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <h2 style="text-align: center;">2,500 THB</h2>
            </div>
            <div class="container">     
            <button type="submit">ชำระเงินแล้ว</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
        </div>

        <div id="id04" class="modal"> 
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="../user/QRimg/QR_Code4.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <h2 style="text-align: center;">4,000 THB</h2>
            </div>
            <div class="container">     
            <button type="submit">ชำระเงินแล้ว</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
        </div>

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            
            </div>
          </div>
          <!-- ./col -->
        </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
            // Get the elements with class="column"
            var elements = document.getElementsByClassName("column");

            // Declare a loop variable
            var i;

            // List View
            function listView() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.width = "100%";
            }
            }

            // Grid View
            function gridView() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.width = "50%";
            }
            }

            /* Optional: Add active class to the current button (highlight it) */
            var container = document.getElementById("btnContainer");
            var btns = container.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
            }
            </script>
        <script src="../JS/Home.js"></script>
        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            // Get the modal
            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }    
            
            // Get the modal
            var modal = document.getElementById('id03');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }   

            // Get the modal
            var modal = document.getElementById('id04');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
</body>
</html>
