<?php 
include('./include_menu.php'); 

$ProductID = $_GET['ID'];
$sql = "SELECT * FROM tbl_products WHERE ProductID=$ProductID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);

extract($row);
?>
<br><br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">แก้ไขข้อมูลสินค้าสุนัข<h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลสินค้าสุนัข</li>
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
                <form role="form" action="update_pro_dtag_db.php" method="post" name="form1"  onsubmit="return checkForm();" class="form-horizontal" enctype="multipart/form-data">
                <div class="col-sm-10">
                            <b>ภาพปัจจุบัน</b>
                            <br>
                            <img src="./image/products/<?php echo $row['ProductImage'];?>" width="300px">
                            <br><br>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">รูปภาพ</label>
                                    (เลือกภาพใหม่)
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="ProductImage" class="custom-file-input"
                                                id="exampleInputFile" accept="image/*" class="form-control">
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
                                    <input type="text" name="ProductName" class="form-control"
                                        value="<?php echo $row['ProductName'];?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                        <div class="form-group">
                                <label>ราคาสินค้า</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">฿</span>
                                </div>
                                <input type="number" name="ProductPrice" class="form-control"  value="<?php echo $row['ProductPrice'];?>">
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
                        <input type="hidden" name="ProductCategory" value="DTag">
                        <input type="hidden" name="ProductImage2" value="<?php echo $row['ProductImage'];?>">
                        <input type="hidden" name="ProductID" value="<?php echo $row['ProductID'];?>">
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