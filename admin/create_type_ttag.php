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
                    <h1 class="m-0 text-dark">เพิ่มข้อมูลพันธุ์ต้นไม้<h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลพันธุ์ต้นไม้</li>
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
                <form role="form" action="create_type_ttag_db.php" method="post" name="form1"  onsubmit="return checkForm();" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>ชื่อพันธุ์</label>
                                    <input type="text" name="TreeBreedName" class="form-control" placeholder="ป้อน . . ." required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>การดูแลเบื้องต้น</label>
                                    <textarea name="TreeBreedCare" class="form-control" rows="1" placeholder="ป้อน . . ."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>อาการผิดปกติ/โรค/ศัตรู และวิธีการรักษาเบื้องต้น</label>
                                    <textarea name="TreeBreedDisease" class="form-control" rows="1" placeholder="ป้อน . . ."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>คำเตือน และคำแนะนำเพิ่มเติม</label>
                                    <textarea name="TreeBreedWarning" class="form-control" rows="1" placeholder="ป้อน . . ."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>สัดส่วนการใช้เครื่องปลูกและปุ๋ย</label>
                                    <textarea name="TreeBreedFertilize" class="form-control" rows="1" placeholder="ป้อน . . ."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>การขยายพันธุ์ / การเพาะปลูก</label>
                                    <textarea name="TreeBreedPropagation" class="form-control" rows="1" placeholder="ป้อน . . ."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">ระดับการดูแลน้ำ</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="TemplateFrontImage" class="custom-file-input" required
                                                id="exampleInputFile" eccept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">อัพโหลด</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">ระดับการดูแลแสง</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="TemplateBackImage" class="custom-file-input" required
                                                id="exampleInputFile" eccept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">อัพโหลด</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
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