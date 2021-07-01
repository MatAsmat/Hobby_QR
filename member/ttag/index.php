<?php
    include './include_menu_dtag.php'
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ข้อมูลส่วนตัว</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div>/.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
        <div class="col-md-6">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('../../dist/img/photo1.png') center center;">
                <h3 class="widget-user-username text-right">nickname</h3>
                <h5 class="widget-user-desc text-right">Judy</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="../testimg/plantprofile.jpg" alt="User Avatar">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="description-block">
                    <img src="../testimg/plant1.png" alt="" width="250px">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                    <img src="../testimg/plant2.png" alt="" width="250px">
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-lg-6">
            <div class="card card-success card-outline">
            <div class="card-header">
                <h5 class="card-title m-0">ข้อมูลเจ้าของ</h5>
              </div>
              <div class="card-body">
                            <h2 class="text-muted text-md"><b>ชื่อผู้ใช้: </b> nick</h2>
                            <h2 class="text-muted text-md"><b>ชื่อ-นามสกุล: </b>
                            name </h2>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="middle"><span class="fa-li"><i class="fas fa-phone-square-alt"></i></span>
                                    เบอร์โทรศัพท์: +6612345679</li>
                                    <li class="middle"><span class="fa-li"><i class="fab fa-facebook-square"></i></i></span>
                                    เฟสบุ๊ค: nick name</li>
                                    <li class="middle"><span class="fa-li"><i class="fab fa-line"></i></span>
                                    ไลน์: nick</li>
              </div>
            </div>
            <div class="card card-success card-outline">
            <div class="card-header">
                <h5 class="card-title m-0">ข้อมูลต้มไม้</h5>
              </div>
              <div class="card-body">
                            <h2 class="text-muted text-md"><b>ชื่อ-นามสกุล: </b>
                            Judy </h2>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="middle"><span class="fa-li"><i class="fas fa-birthday-cake"></i></i></span>
                                    อายุต้นไม้: 1 เดือน</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    พันธุ์: สกุลมอนสเตอร่า (Monstera)</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    การดูแลเบื้องต้น: ชอบอากาศร้อนชื้น ไม่ชอบแสงแดดจัด</li>
                            </ul>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include './include_footer.php'
?>