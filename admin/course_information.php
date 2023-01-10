<?php 

    session_start();
    require_once '../config/course_information.php';
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
  <title>course</title>

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

  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">เพิ่มข้อมูลcourse</h1>     
          </div><!-- /.col -->
        </div><!-- /.row -->
        <form action="system_course_information.php" method="post">
              <label for="id_Type" class="form-label">idประเภทคอร์สเรียน : </label>
                  <div class="form-check">     
                      <input type="radio" class="form-check-input" id="id_Type1" name="id_Type" checked value="01">
                      <label class="form-check-label" for="id_Type1">01</label>
                  </div>
                  <div class="form-check">     
                      <input type="radio" class="form-check-input" id="id_Type2" name="id_Type"  value="02">
                      <label class="form-check-label" for="id_Type1">02</label>
                  </div>
                  <div class="form-check">     
                      <input type="radio" class="form-check-input" id="id_Type3" name="id_Type"  value="03">
                      <label class="form-check-label" for="id_Type1">03</label>
                  </div>
                  <div class="form-check">     
                      <input type="radio" class="form-check-input" id="id_Type3" name="id_Type"  value="04">
                      <label class="form-check-label" for="id_Type1">04</label>
                  </div>
                  <label for="Type_Name" class="form-label">ประเภทคอร์สเรียน : </label>
                  <div class="form-check">     
                      <input type="radio" class="form-check-input" id="Type_Name1" name="Type_Name" checked value="Basic/Beginner Class training">
                      <label class="form-check-label" for="Type_Name">ยังไม่มีพื้นฐาน ( Basic/Beginner Class training )</label>
                  </div>
                  <div class="form-check">     
                      <input type="radio" class="form-check-input" id="Type_Name2" name="Type_Name"  value="Intermediate Class Training">
                      <label class="form-check-label" for="Type_Name1">มีพื้นฐานแล้ว ( Intermediate Class Training )</label>
                  </div>
                  <div class="form-check">     
                      <input type="radio" class="form-check-input" id="Type_Name3" name="Type_Name"  value="Advance Class Training">
                      <label class="form-check-label" for="Type_Name1">ฝึกทักษะป้องกันตัวแบบจริงจัง ( Advance Class Training )</label>
                  </div>
                  <div class="form-check">     
                      <input type="radio" class="form-check-input" id="Type_Name3" name="Type_Name"  value="Private Training">
                      <label class="form-check-label" for="Type_Name1">เรียนตัวต่อตัว ( Private Training )</label>
                  </div>
                  <div class="mb-3">
                      <label for="Cou_Name" class="form-label">ชื่อคอร์สเรียน : </label>
                      <input type="text" class="form-control" id="Cou_Name" name="Cou_Name">
                  </div>
                  <div class="mb-3">
                      <label for="details" class="form-label">รายละเอียดเพิ่มเติม : </label>
                      <input type="text" class="form-control" id="details" name="details">
                  </div>
                  <div class="mt-3">
                      <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                      <a href="View_course.php"><button type="button" class="btn btn-warning">ดูข้อมูลคอร์สเรียนทั้งหมด</button></a>
                  </div>
              </form>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
