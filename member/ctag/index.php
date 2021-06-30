<?php
    include './include_menu_ctag.php'   
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
                <img class="img-circle" src="../testimg/catprofile.jpg" alt="User Avatar">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="description-block">
                    <img src="../testimg/cat1.png" alt="" width="250px">
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                    <img src="../testimg/cat2.png" alt="" width="250px">
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
                            <h2 class="text-muted text-md"><b>ชื่อผู้ใช้: </b> aaaaaaaaaaaaa</h2>
                            <h2 class="text-muted text-md"><b>ชื่อ-นามสกุล: </b>
                            aaaaaaaaaaaaa </h2>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="middle"><span class="fa-li"><i class="fas fa-phone-square-alt"></i></span>
                                    เบอร์โทรศัพท์: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fab fa-facebook-square"></i></i></span>
                                    เฟสบุ๊ค: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fab fa-line"></i></span>
                                    ไลน์: aaaaaaaaaaaaa</li>
              </div>
            </div>
            <div class="card card-success card-outline">
            <div class="card-header">
                <h5 class="card-title m-0">ข้อมูลสัตว์เลี้ยง</h5>
              </div>
              <div class="card-body">
                            <h2 class="text-muted text-md"><b>ชื่อ-นามสกุล: </b>
                            aaaaaaaaaaaaa </h2>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="middle"><span class="fa-li"><i class="fas fa-birthday-cake"></i></i></span>
                                    วัน เดือน ปีเกิด: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    พันธุ์: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    เพศ: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    กรุ๊ปเลือด: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    สีตัว: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    ลักษณะนิสัย: aaaaaaaaaaaaa</li>
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