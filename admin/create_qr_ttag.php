<?php 
include('./include_menu.php'); 

$query = "SELECT * FROM tbl_products WHERE ProductCategory = 'TTag' " or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);
?>

<br><br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">เพิ่มคิวอาร์โค้ด<h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">เพิ่มคิวอาร์โค้ด</li>
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
                    <a class="float-right btn btn-dark btn-sm" href="./table_qrcode.php">
                        <i class="fas fa-th-list"></i>
                        </i>
                        ดูข้อมูล
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form" action="create_qr_ttag_db.php" method="post" name="pgenerate"  class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ระบุจำนวนตัวอักษรของรหัสผ่าน: </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="text" name="thelength" value="10" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="QrCodeName" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input name="button" class="btn btn-info" type="button" onClick="populateform(this.form.thelength.value)" value="สุ่มรหัสผ่าน">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-2">
                                <div class="form-group">
                                    <label>เลือกชื่อสินค้า: </label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="form-group">
                                    <select name="Ref_ProductID" class="form-control" required>
                                        <option value="">--เลือกข้อมูล--</option>
                                        <?php foreach($result as $results){ ?>
                                        <option value="<?php echo $results["ProductID"];?>">
                                            - <?php echo $results["ProductName"];?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
                        <input type="hidden" name="QRStatus" value="No">
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
var keylist="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789"
var temp=''

function generatepass(plength){
temp=''
for (i=0;i<plength;i++)
temp+=keylist.charAt(Math.floor(Math.random()*keylist.length))
return temp
}

function populateform(enterlength){
document.pgenerate.QrCodeName.value=generatepass(enterlength)
}
</script>

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