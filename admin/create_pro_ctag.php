<?php 
include('./include_menu.php'); 
?>

<br><br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">เพิ่มข้อมูลสินค้าแมว<h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลสินค้าแมว</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- general form elements disabled -->
            <div class="card">
                <div class="card-header">
                    <a class="float-right btn btn-dark btn-sm" href="./table_pro_dtag.php">
                        <i class="fas fa-th-list"></i>
                        </i>
                        ดูข้อมูล
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form" action="create_pro_ctag_db.php" method="post" name="form1"  onsubmit="return checkForm();" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">รูปภาพ</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="ProductImage" class="custom-file-input" required
                                                id="exampleInputFile" eccept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">อัพโหลด</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ชื่อสินค้า</label>
                                    <input type="text" name="ProductName" class="form-control" placeholder="ป้อน . . ." required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                        <div class="form-group">
                                <label>ราคาสินค้า</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">฿</span>
                                </div>
                                <input type="number" name="ProductPrice" class="form-control"   placeholder="ป้อน . . ." required>
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                      
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
                        <input type="hidden" name="ProductCategory" value="CTag">
                        <button class="btn btn-info" type="submit" >บันทึก</button>
                        <button class="btn btn-default" type="reset">ยกเลิก</button>
                        <!-- <button class="btn btn-default float-right" type="submit">Cancel</button> -->
                    </div>

                </div>
                </form>
                <!-- /.card-header -->
            </div>
            <!-- /.card -->
        </div>
        <br><br>
</div>
<!-- /.card -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
$(document).ready(function() {
    $('a[href^="./table_pro_dtag.php"]').addClass('nav-item has-treeview menu-open nav-link active ');
});
</script>

<script type="text/javascript">
      function demo() {
        $('.datepicker').datepicker();
      }
    
        </script>