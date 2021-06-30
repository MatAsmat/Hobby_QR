<?php 
session_start();

include('../condb.php');

$AdminID = $_SESSION['AdminID'];
$AdminLevel = $_SESSION['AdminLevel'];

if($AdminLevel!='admin'){
	Header("Location: ../logout.php");
}


$sql = "
SELECT * FROM tbl_admin
WHERE AdminID=$AdminID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HobbyQR</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/test.js"></script>
    <!-- ============================================= -->
    <!-- (1) link-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>

</head>
<!-- ============================================= -->
<!-- </head>
<style>
li {
  font-family: "JasmineUPC", Times, serif;
  /* font-size: 15px; */
  /* font-size: large; */
  font-size: 120%;
}
</style> -->

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">
        <!-- ============================================= -->
        <!-- (2) navbar-->
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-success navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index.php" class="nav-link">หน้าแรก</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../logout.php" class="nav-link">ออกจากระบบ</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- ============================================= -->

        <!-- ============================================= -->
        <!-- (3) sidebar_menu -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="../index.php" class="brand-link">
                <img src="../images/qrcode.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">HobbyQR (Admin)</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="../images/person_4.jpg" class="img-circle elevation-2" alt="User Image"> -->
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"> <?php echo $AdminFirstName.'  '.$AdminLastName;?></a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="./index.php" class="nav-link">
                                <i class=" nav-icon fas fa-chart-pie"></i>

                                <p>
                                    รายงานสรุป
                                </p>
                            </a>
                        </li>


                        <li class="nav-header">ตรวจสอบข้อมูล</li>
                        <li class="nav-item">
                            <a href="./table_member.php" class="nav-link">
                                <i class="nav-icon fas fa-user-check"></i>

                                <p>
                                    ข้อมูลสมาชิก
                                </p>
                            </a>
                        </li>


                        <li class="nav-header">จัดการข้อมูล</li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-qrcode"></i>
                                <p>
                                QR Code Generator
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-success right">2</span> -->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./table_qr_dtag.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>DTag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./table_qr_ctag.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-success"></i>
                                        <p>CTag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./table_qr_ttag.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-success"></i>
                                        <p>TTag</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tag"></i>
                                <p>
                                    Product
                                    <i class="fas fa-angle-left right"></i>
                                    <!-- <span class="badge badge-success right">2</span> -->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./table_pro_dtag.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>DTag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./table_pro_ctag.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-success"></i>
                                        <p>CTag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./table_pro_ttag.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-success"></i>
                                        <p>TTag</p>
                                    </a>
                                </li>
                            </ul>
                           
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon far fa-address-card"></i>
                                <p>
                                    Template
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./table_tem_dtag.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>DTag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./table_tem_ctag.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-success"></i>
                                        <p>CTag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./table_tem_ttag.php" class="nav-link">
                                        <i class="nav-icon far fa-circle text-success"></i>
                                        <p>TTag</p>
                                    </a>
                                </li>
                            </ul>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <p>
                                        <i class="nav-icon fas fa-paw"></i>
                                        Breed 
                                    <i class="nav-icon fas fa-seedling"></i>
                                    Seedling
                                        <i class="fas fa-angle-left right"></i>
                                        <!-- <span class="badge badge-success right">2</span> -->
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="./table_type_dtag.php" class="nav-link">
                                            <i class="far fa-circle nav-icon text-success"></i>
                                            <p>DTag</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./table_type_ctag.php" class="nav-link">
                                            <i class="nav-icon far fa-circle text-success"></i>
                                            <p>CTag</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./table_type_ttag.php" class="nav-link">
                                            <i class="nav-icon far fa-circle text-success"></i>
                                            <p>TTag</p>
                                        </a>
                                    </li>
                                </ul>
                            
                      
                        <li class="nav-header">อื่นๆ</li>
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    หน้าแรก
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>

                                <p>
                                    ออกจากระบบ
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- ============================================= -->

        <!-- content -->

        <!-- ============================================= -->
        <!-- (4) footer-->
        <footer class="main-footer">
            <strong>ระบบ HobbyQR
                <a href="https://alphageek.co.th/" style="color:green">บริษัท อัลฟ่ากีค จำกัด</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>2021</b>
            </div>
        </footer>

        <!-- ============================================= -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- ============================================= -->
    <!-- (5) script-->
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard3.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
</body>
<!-- ============================================= -->

</html>