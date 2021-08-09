<?php 
include('./include_menu.php'); 

$DogBreedID = $_GET['ID'];
$sql = "SELECT * FROM tbl_dog_breed WHERE DogBreedID=$DogBreedID";
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
                    <h1 class="m-0 text-dark">แก้ไขข้อมูลพันธุ์สุนัข<h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลพันธุ์สุนัข</li>
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
                    <a class="float-right btn btn-dark btn-sm" href="./table_type_dtag.php">
                        <i class="fas fa-th-list"></i>
                        </i>
                        ดูข้อมูล
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form" action="update_type_dtag_db.php" method="post" name="form1"  onsubmit="return checkForm();" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>ชื่อพันธุ์</label>
                                    <input type="text" name="DogBreedName" class="form-control" value="<?php echo $row['DogBreedName'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>ข้อมูลทั่วไปและลักษณะนิสัย 1</label>
                                <input type="text" name="DogBreedPersonality1" class="form-control" value="<?php echo $row['DogBreedPersonality1'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>ข้อมูลทั่วไปและลักษณะนิสัย 2</label>
                                <input type="text" name="DogBreedPersonality2" class="form-control" value="<?php echo $row['DogBreedPersonality2'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>ข้อมูลทั่วไปและลักษณะนิสัย 3</label>
                                <input type="text" name="DogBreedPersonality3" class="form-control" value="<?php echo $row['DogBreedPersonality3'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>ข้อมูลทั่วไปและลักษณะนิสัย 4</label>
                                <input type="text" name="DogBreedPersonality4" class="form-control" value="<?php echo $row['DogBreedPersonality4'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>ข้อมูลทั่วไปและลักษณะนิสัย 5</label>
                                <input type="text" name="DogBreedPersonality5" class="form-control" value="<?php echo $row['DogBreedPersonality5'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>ข้อมูลทั่วไปและลักษณะนิสัย 6</label>
                                <input type="text" name="DogBreedPersonality6" class="form-control" value="<?php echo $row['DogBreedPersonality6'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>บุคลิก 1</label>
                                    <input type="text" name="DogBreedCharacter1" class="form-control" value="<?php echo $row['DogBreedCharacter1'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>บุคลิก 2</label>
                                    <input type="text" name="DogBreedCharacter2" class="form-control" value="<?php echo $row['DogBreedCharacter2'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>บุคลิก 3</label>
                                    <input type="text" name="DogBreedCharacter3" class="form-control" value="<?php echo $row['DogBreedCharacter3'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>บุคลิก 4</label>
                                    <input type="text" name="DogBreedCharacter4" class="form-control" value="<?php echo $row['DogBreedCharacter4'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>บุคลิก 5</label>
                                    <input type="text" name="DogBreedCharacter5" class="form-control" value="<?php echo $row['DogBreedCharacter5'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>บุคลิก 6</label>
                                    <input type="text" name="DogBreedCharacter6" class="form-control" value="<?php echo $row['DogBreedCharacter6'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>วิธีดูแล 1</label>
                                    <input type="text" name="DogBreedCare1" class="form-control" value="<?php echo $row['DogBreedCare1'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>วิธีดูแล 2</label>
                                    <input type="text" name="DogBreedCare2" class="form-control" value="<?php echo $row['DogBreedCare2'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>วิธีดูแล 3</label>
                                    <input type="text" name="DogBreedCare3" class="form-control" value="<?php echo $row['DogBreedCare3'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>วิธีดูแล 4</label>
                                    <input type="text" name="DogBreedCare4" class="form-control" value="<?php echo $row['DogBreedCare4'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>วิธีดูแล 5</label>
                                    <input type="text" name="DogBreedCare5" class="form-control" value="<?php echo $row['DogBreedCare5'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>วิธีดูแล 6</label>
                                    <input type="text" name="DogBreedCare6" class="form-control" value="<?php echo $row['DogBreedCare6'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ผู้เลี้ยงที่เหมาะกับสายพันธ์ุ 1</label>
                                    <input type="text" name="DogBreedHerdsman1" class="form-control" value="<?php echo $row['DogBreedHerdsman1'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ผู้เลี้ยงที่เหมาะกับสายพันธ์ุ 2</label>
                                    <input type="text" name="DogBreedHerdsman2" class="form-control" value="<?php echo $row['DogBreedHerdsman2'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ผู้เลี้ยงที่เหมาะกับสายพันธ์ุ 3</label>
                                    <input type="text" name="DogBreedHerdsman3" class="form-control" value="<?php echo $row['DogBreedHerdsman3'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ผู้เลี้ยงที่เหมาะกับสายพันธ์ุ 4</label>
                                    <input type="text" name="DogBreedHerdsman4" class="form-control" value="<?php echo $row['DogBreedHerdsman4'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ผู้เลี้ยงที่เหมาะกับสายพันธ์ุ 5</label>
                                    <input type="text" name="DogBreedHerdsman5" class="form-control" value="<?php echo $row['DogBreedHerdsman5'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ผู้เลี้ยงที่เหมาะกับสายพันธ์ุ 6</label>
                                    <input type="text" name="DogBreedHerdsman6" class="form-control" value="<?php echo $row['DogBreedHerdsman6'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ภาวะปัญหาสุขภาพของสายพันธุ์ 1</label>
                                    <input type="text" name="DogBreedHealthIssues1" class="form-control" value="<?php echo $row['DogBreedHealthIssues1'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ภาวะปัญหาสุขภาพของสายพันธุ์ 2</label>
                                    <input type="text" name="DogBreedHealthIssues2" class="form-control" value="<?php echo $row['DogBreedHealthIssues2'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ภาวะปัญหาสุขภาพของสายพันธุ์ 3</label>
                                    <input type="text" name="DogBreedHealthIssues3" class="form-control" value="<?php echo $row['DogBreedHealthIssues3'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ภาวะปัญหาสุขภาพของสายพันธุ์ 4</label>
                                    <input type="text" name="DogBreedHealthIssues4" class="form-control" value="<?php echo $row['DogBreedHealthIssues4'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ภาวะปัญหาสุขภาพของสายพันธุ์ 5</label>
                                    <input type="text" name="DogBreedHealthIssues5" class="form-control" value="<?php echo $row['DogBreedHealthIssues5'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ภาวะปัญหาสุขภาพของสายพันธุ์ 6</label>
                                    <input type="text" name="DogBreedHealthIssues6" class="form-control" value="<?php echo $row['DogBreedHealthIssues6'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ความต้องการด้านสารอาหารของสุนัข 1</label>
                                    <input type="text" name="DogBreedNutrients1" class="form-control" value="<?php echo $row['DogBreedNutrients1'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ความต้องการด้านสารอาหารของสุนัข 2</label>
                                    <input type="text" name="DogBreedNutrients2" class="form-control" value="<?php echo $row['DogBreedNutrients2'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ความต้องการด้านสารอาหารของสุนัข 3</label>
                                    <input type="text" name="DogBreedNutrients3" class="form-control" value="<?php echo $row['DogBreedNutrients3'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ความต้องการด้านสารอาหารของสุนัข 4</label>
                                    <input type="text" name="DogBreedNutrients4" class="form-control" value="<?php echo $row['DogBreedNutrients4'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ความต้องการด้านสารอาหารของสุนัข 5</label>
                                    <input type="text" name="DogBreedNutrients5" class="form-control" value="<?php echo $row['DogBreedNutrients5'];?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ความต้องการด้านสารอาหารของสุนัข 6</label>
                                    <input type="text" name="DogBreedNutrients6" class="form-control" value="<?php echo $row['DogBreedNutrients6'];?>">
                                </div>
                            </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
                        <input type="hidden" name="DogBreedID" value="<?php echo $row['DogBreedID'];?>">
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