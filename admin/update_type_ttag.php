<?php 
include('./include_menu.php'); 

$TreeBreedID = $_GET['ID'];
$sql = "SELECT * FROM tbl_tree_breed WHERE TreeBreedID=$TreeBreedID";
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
                    <h1 class="m-0 text-dark">แก้ไขข้อมูลพันธุ์ต้นไม้<h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลพันธุ์ต้นไม้</li>
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
                    <a class="float-right btn btn-dark btn-sm" href="./table_type_ttag.php">
                        <i class="fas fa-th-list"></i>
                        </i>
                        ดูข้อมูล
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form" action="update_type_ttag_db.php" method="post" name="form1"  onsubmit="return checkForm();" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>ชื่อพันธุ์</label>
                                    <input type="text" name="TreeBreedName" class="form-control" value="<?php echo $row['TreeBreedName'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>วิธีดูแล</label>
                                    <input type="text" name="TreeBreedCare" class="form-control" value="<?php echo $row['TreeBreedCare'];?>">
                                </div>
                            </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
                        <input type="hidden" name="TreeBreedID" value="<?php echo $row['TreeBreedID'];?>">
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

    $('a[href^="./table_board.php"]').addClass('nav-item has-treeview menu-open nav-link active ');

});
</script>
<!-- <script language="javascript">
function checkID(id)
{
if(id.length != 13) return false;
for(i=0, sum=0; i < 12; i++)
sum += parseFloat(id.charAt(i))*(13-i); if((11-sum%11)%10!=parseFloat(id.charAt(12)))
return false; return true;}

function checkForm(){ 
    if(!checkID(document.form1.id_card.value)){
    $('#idcard').select().focus().val('');
    alert('รหัสประชาชนไม่ถูกต้อง');
    return false;
    }else{
    return true;
    }
}
</script> -->

<script type="text/javascript">
      function demo() {
        $('.datepicker').datepicker();
      }
    
        </script>