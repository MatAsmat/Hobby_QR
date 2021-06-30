<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>HobbyQR</title>
 <!-- DataTables -->
 <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="../../images/logo/icon-1_72.png" alt="HobbyQr Logo"
             style="opacity: .8">
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link">หน้าแรก</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">ดูข้อมูล</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="info_topten.php" class="dropdown-item">ข้อมูลต้นไม้ยอดนิยม 10 อันดับ</a></li>
                                <li><a href="info_structure.php" class="dropdown-item">กายวิภาคของต้นไม้</a></li>

                                <li class="dropdown-divider"></li>

                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-item dropdown-toggle">ข้อมูลต้นไม้ตามพันธุ์</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">การดูแลเบื้องต้น</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">อาการผิดปกติ/โรค/ศัตรูพืช และวิธีการรักษาเบื้องต้น</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">คำเตือน และคำแนะนำเพิ่มเติม</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">สัดส่วนการใช้เครื่องปลูกและปุ๋ย</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">การขยายพันธุ์/การเพาะปลูก</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">จัดการข้อมูล</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="table_medicine.php" class="dropdown-item">ตารางรดต้นไม้</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-cog"></i> แก้ไขข้อมูลส่วนตัว
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <i class="fas fa-user-circle"></i> ข้อมูลส่วนตัว
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <i class="fas fa-user-edit"></i> แก้ไขข้อมูลส่วนตัว
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <i class="fas fa-key"></i> แก้ไขรหัสผ่าน
            </a>
        </li>
     
                    </ul>
                     <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <a class="nav-link"  href="../../logout.php" role="button">
              <i class="fas fa-home"></i> ออกจากระบบ</a>
        </li>
      </ul>
                </div>
    </div>
  </nav>
  <!-- /.navbar -->

  
