<?php 
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * 
FROM tbl_templates as t 
INNER JOIN tbl_cat_breed as b ON t.Ref_BreedID=b.CatBreedID
WHERE t.TemplateID=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

$Ref_BreedID = $row['Ref_BreedID'];

$query = "SELECT * FROM tbl_cat_breed 
WHERE CatBreedID!=$Ref_BreedID" or die("Error:" . mysqli_error());
$result2 = mysqli_query($condb, $query);
?>
<br><br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">แก้ไขข้อมูลนามบัตรแมว<h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลนามบัตรแมว</li>
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
                    <a class="float-right btn btn-dark btn-sm" href="./table_pro_ctag.php">
                        <i class="fas fa-th-list"></i>
                        </i>
                        ดูข้อมูล
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form" action="update_tem_ctag_db.php" method="post" name="form1"  onsubmit="return checkForm();" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-sm-2">
                            <img src="./image/templates/<?php echo $row['TemplateFrontImage'];?>" width="200px">
                        </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">รูปภาพนามบัตรด้านหน้า</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="TemplateFrontImage" class="custom-file-input"
                                                id="exampleInputFile" eccept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">อัพโหลด</span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-2">
                            <img src="./image/templates/<?php echo $row['TemplateBackImage'];?>" width="200px">
                        </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">รูปภาพนามบัตรด้านหลัง</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="TemplateBackImage" class="custom-file-input"
                                                id="exampleInputFile" eccept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">อัพโหลด</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                            <img src="./image/templates/<?php echo $row['TemplateFrontImageSample'];?>" width="200px">
                        </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">รูปภาพนามบัตรด้านหน้า(ตัวอย่าง)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="TemplateFrontImageSample" class="custom-file-input"
                                                id="exampleInputFile" eccept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">อัพโหลด</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                            <img src="./image/templates/<?php echo $row['TemplateBackImageSample'];?>" width="200px">
                        </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="exampleInputFile">รูปภาพนามบัตรด้านหลัง(ตัวอย่าง)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="TemplateBackImageSample" class="custom-file-input"
                                                id="exampleInputFile" eccept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">อัพโหลด</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>ชื่อนามบัตร</label>
                                    <input type="text" name="TemplateName" class="form-control" value="<?php echo $row['TemplateName'];?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>ประเภทพันธุ์</label>
                                    <select name="Ref_BreedID" class="form-control">
                                        <option value="<?php echo $row['Ref_BreedID'];?>">-<?php echo $row['CatBreedName'];?>-
                                        </option>
                                        <option value="">--เลือกข้อมูล--</option>
                                        <?php foreach($result2 as $results2){ ?>
                                        <option value="<?php echo $results2["CatBreedID"];?>">
                                            - <?php echo $results2["CatBreedName"];?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                        <div class="form-group">
                                <label>ราคานามบัตร</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">฿</span>
                                </div>
                                <input type="number" name="TemplatePrice" class="form-control"   value="<?php echo $row['TemplatePrice'];?>">
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
                        <input type="hidden" name="TemplateFrontImage2" value="<?php echo $row['TemplateFrontImage'];?>">
                        <input type="hidden" name="TemplateBackImage2" value="<?php echo $row['TemplateBackImage'];?>">
                        <input type="hidden" name="TemplateFrontImageSample2" value="<?php echo $row['TemplateFrontImageSample'];?>">
                        <input type="hidden" name="TemplateBackImageSample2" value="<?php echo $row['TemplateBackImageSample'];?>">
                        <input type="hidden" name="TemplateID" value="<?php echo $row['TemplateID'];?>">
                        <input type="hidden" name="TemplateCategory" value="CTag">
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
    $('a[href^="./table_pro_ctag.php"]').addClass('nav-item has-treeview menu-open nav-link active ');
});
</script>

<script type="text/javascript">
      function demo() {
        $('.datepicker').datepicker();
      }
    
        </script>