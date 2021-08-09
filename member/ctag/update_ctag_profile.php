<!-- INNER JOIN tbl_owner as o ON d.Ref_OwnerID = o.OwnerID
INNER JOIN tbl_qrcode as q ON d.Ref_QrCodeID = q.QrCodeID -->
<?php  
include('./include_menu.php'); 


$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_cat as c
INNER JOIN tbl_cat_breed as cb ON c.Ref_CatBreedID = cb.CatBreedID
INNER JOIN tbl_templates as t ON c.Ref_TemplateID = t.TemplateID
WHERE c.CatID=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

$Ref_CatBreedID = $row['Ref_CatBreedID'];

$query = "SELECT * FROM tbl_cat_breed
WHERE CatBreedID!=$Ref_CatBreedID" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);

$Ref_TemplateID = $row['Ref_TemplateID'];

$query2 = "SELECT * FROM tbl_templates
WHERE TemplateID!=$Ref_TemplateID AND TemplateCategory = 'CTag'" or die("Error:" . mysqli_error());
$result2 = mysqli_query($condb, $query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HobbyQr Member</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.boostrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

</head>
<body>
<input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><pan class="las la-qrcode"></pan> <span>HobbyQr</span></h2>
        </div>

        <div class="sidebar-menu">
        <ul>
                <li>
                    <a href="../index.php" ><span class="las la-igloo"></span>
                        <span>หน้าหลัก</span></a>
                </li>
                <li>
                <a class="active"><span class="las la-cat"></span>
                        <span>ดูข้อมูลแมวทั่วไป</span></a>
                </li>
               
                <li>
                    <a href="info_body.php"><span class="las la-bookmark"></span>
                        <span>กายวิภาคแมว</span></a>
                </li>
                <li>
                    <a href="info_ave_age.php"><span class="las la-bookmark"></span>
                        <span>อายุเฉลี่ยแมว</span></a>
                </li>
                <li>
                    <a href="info_supplies.php"><span class="las la-bookmark"></span>
                        <span>อุปกรณ์ในการเลี้ยงแมว</span></a>
                </li>
                <li>
                    <a href="info_communicate.php"><span class="las la-bookmark"></span>
                        <span>การสื่อสารเบื้องต้นของแมว</span></a>
                </li>
                <li>
                    <a href="info_treat.php"><span class="las la-bookmark"></span>
                        <span>การเลี้ยงดูแมวเบื้องต้น</span></a>
                </li>
                <li>
                    <a href="info_cleaning.php"><span class="las la-bookmark"></span>
                        <span>การทำความสะอาดแมว</span></a>
                </li>
                <li>
                    <a href="info_diseases.php"><span class="las la-bookmark"></span>
                        <span>โรคต่างๆของแมว</span></a>
                </li>
                <li>
                    <a href="info_questions.php"><span class="las la-bookmark"></span>
                        <span>คำถามที่พบบ่อย</span></a>
                </li>
                <li>
                    <a href="info_vaccine.php"><span class="las la-bookmark"></span>
                        <span>ตารางการให้วัดซีนของแมว</span></a>
                </li>
                <li>
                    <a href="info_sickness.php"><span class="las la-bookmark"></span>
                        <span>ข้อสังเกตแมวเมื่อป่วย</span></a>
                </li>
                <li>
                    <a href="info_choose_food.php"><span class="las la-bookmark"></span>
                        <span>เลือกอาหารแมวให้เหมาะกับวัย</span></a>
                </li>
                <li>
                    <a href="info_takecare.php"><span class="las la-bookmark"></span>
                        <span>ข้อควรระวังในการเลี้ยงแมว</span></a>
                </li>
                <li>
                    <a href="info_neuter.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการทำหมันแมว</span></a>
                </li>
                <li>
                    <a href="info_type_food.php"><span class="las la-bookmark"></span>
                        <span>ประเภทอาหารของแมว</span></a>
                </li>
                <li>
                    <a href="info_healthy.php"><span class="las la-bookmark"></span>
                        <span>แมวที่มีสุขภาพดี</span></a>
                </li>
                <li>
                    <a href="info_fur_style.php"><span class="las la-bookmark"></span>
                        <span>ลักษณะขนของแมว</span></a>
                </li>
                <li>
                    <a href="info_intro.php"><span class="las la-bookmark"></span>
                        <span>แนะนำแมวเข้าสู่บ้านใหม่</span></a>
                </li>
                <li>
                    <a href="info_pamper.php"><span class="las la-bookmark"></span>
                        <span>วิธีเอาใจแมว</span></a>
                </li>
                <li>
                    <a href="info_raise.php"><span class="las la-bookmark"></span>
                        <span>เลี้ยงแมวให้มีความสุข</span></a>
                </li>
                <li>
                    <a href="info_hangout.php"><span class="las la-bookmark"></span>
                        <span>ห้างพาแมวเที่ยวเล่น</span></a>
                </li>
                <li>
                    <a href="../../logout.php"><span class="las la-home"></span>
                        <span>ออกจากระบบ</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <?php
           include('include_header.php');
        ?>
    <main>
        <div class="container">
            <div class="card">
            <div class="card-body">
            <h2>แก้ไขข้อมูลสัตว์เลี้ยง</h2>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo6">เพิ่มข้อมูล</button> -->
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <form role="form" action="update_ctag_profile_db.php" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
            <div class="col-sm-10">
                            ________ ภาพปัจจุบัน ________
                            <br>
                            <img src="../profileimg/ctag/<?php echo $row['CatPhoto'];?>" width="250px" height="250px" alt="">
                            <br>
                        </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input type="text" name="CatName" class="form-control"  value="<?php echo $row['CatName'];?>">
                            </div>
                        </div>
                       
                        <!-- <div class="col-sm-3">
                            <div class="form-group">
                                <label>รหัสผ่าน</label>
                                <input type="password_member" name="password_member" class="form-control"
                                value="<?php echo $row['password_member'];?>" >
                            </div>
                        </div> -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputFile">รูปภาพ</label> (เลือกภาพใหม่)
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="CatPhoto" class="custom-file-input" 
                                            id="exampleInputFile"accept="image/*">
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
                                    <label>วัน เดือน ปีเกิด</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" name="CatBirthdate" class="form-control"
                                            value="<?php echo $row['CatBirthdate'];?>">
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-2">
                                <div class="form-group">
                                    <label>เพศ</label>
                                    <select name="CatGender" class="form-control">
                                        <option value="<?php echo $row['CatGender'];?>">-<?php echo $row['CatGender'];?>-
                                        </option>
                                        <option value="">--เลือกเพศ (Gender)--</option>
                                        <option value="ผู้">- ผู้</option>
                                        <option value="เมีย">- เมีย</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>กรุ๊ปเลือด</label>
                                    <select name="CatBlood" id="" class="form-control">
                                        <option value="<?php echo $row['CatBlood'];?>">-<?php echo $row['CatBlood'];?>-
                                        </option>
                                        <option value="">--เลือกกรุ๊ปเลือด (Blood)--</option>
                                                <option value="DEA 1.1">DEA 1.1</option>
                                                <option value="DEA 1.2">DEA 1.2</option>
                                                <option value="DEA 3">DEA 3</option>
                                                <option value="DEA 4">DEA 4</option>
                                                <option value="DEA 5">DEA 5</option>
                                                <option value="DEA 6">DEA 6</option>
                                                <option value="DEA 7">DEA 7</option>
                                                <option value="DEA 8">DEA 8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>สี</label>
                                <input type="text" name="CatCoatColor" class="form-control"  value="<?php echo $row['CatCoatColor'];?>">
                            </div>
                        </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>ลักษณะนิสัย</label>
                                    <select name="CatPersonality" id="" class="form-control">
                                        <option value="<?php echo $row['CatPersonality'];?>">-<?php echo $row['CatPersonality'];?>-
                                        </option>
                                        <option value="">--เลือกลักษณะนิสัย (Personality)--</option>
                                                <option value="ใจดี (Friendly)">ใจดี (Friendly)</option>
                                                <option value="ขี้อ้อนชอบคนตามใจ (Eager to Please)">ขี้อ้อนชอบคนตามใจ (Eager to Please)</option>
                                                <option value="ขี้เล่น (Playful)">ขี้เล่น (Playful)</option>
                                                <option value="ตื่นเต้น/กระวนกระวาย (Nervous/Anxious)">ตื่นเต้น/กระวนกระวาย (Nervous/Anxious)</option>
                                                <option value="หวงของ หวงเจ้าของ (Bossy)">หวงของ หวงเจ้าของ (Bossy)</option>
                                                <option value="ดื้อ (Stubborn)">ดื้อ (Stubborn)</option>
                                                <option value="ดุก้าวร้าว ไม่สุงสิงกับใคร (Aggressive)">ดุก้าวร้าว ไม่สุงสิงกับใคร (Aggressive)</option>
                                                <option value="ขี้อาย/เรียบร้อย (Shy/Timid)">ขี้อาย/เรียบร้อย (Shy/Timid)</option>
                                                <option value="เอาแน่เอานอนไม่ได้ แล้วแต่อารมณ์ (Unpredictable)">เอาแน่เอานอนไม่ได้ แล้วแต่อารมณ์ (Unpredictable)</option>
                                                <option value="คึกคัก ร่าเริง (Alert)">คึกคัก ร่าเริง (Alert)</option>
                                                <option value="ตกใจง่ายขี้กลัว (Easily Frightened)">ตกใจง่ายขี้กลัว (Easily Frightened)</option>
                                                <option value="เข้าได้ง่ายกับทุกคน (Good with Everyone)">เข้าได้ง่ายกับทุกคน (Good with Everyone)</option>
                                                <option value="ชอบกินมากที่สุด (Food Lover)">ชอบกินมากที่สุด (Food Lover)</option>
                                                <option value="ขี้เซาที่สุด (Sleepyhead)">ขี้เซาที่สุด (Sleepyhead)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>พันธุ์แมว</label>
                                    <select name="Ref_CatBreedID" class="form-control">
                                        <option value="<?php echo $row['Ref_CatBreedID'];?>">
                                            -<?php echo $row['CatBreedName'];?>-
                                        </option>
                                        <option value="">--เลือกข้อมูล--</option>
                                        <?php foreach($result as $results){ ?>
                                        <option value="<?php echo $results["CatBreedID"];?>">
                                            - <?php echo $results["CatBreedName"];?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>นามบัตรแมว</label>
                                    <select name="Ref_TemplateID" class="form-control">
                                        <option value="<?php echo $row['Ref_TemplateID'];?>">
                                            -<?php echo $row['TemplateName'];?>-
                                        </option>
                                        <option value="">--เลือกข้อมูล--</option>
                                        <?php foreach($result2 as $results2){ ?>
                                        <option value="<?php echo $results2["TemplateID"];?>">
                                            - <?php echo $results2["TemplateName"];?>
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
                        <input type="hidden" name="CatPhoto2" value="<?php echo $row['CatPhoto'];?>">
                        <input type="hidden" name="CatID" value="<?php echo $row['CatID'];?>">
                        <button class="btn btn-info" type="submit">บันทึก</button>
                        <button class="btn btn-default" type="submit">ยกเลิก</button>
                        <!-- <button class="btn btn-default float-right" type="submit">Cancel</button> -->
                    </div>

                </div>
                </form>
                       
            </div><!--row-->
                 </div> <!--card-body-->
            </div>  <!--card-->
        </div> <!--container-->
      
    </main>
    </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.datatables.net/1.10.18/js/jquery.daTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script> -->
          <!-- DataTables -->
        <!-- <script src="../plugins/datatables/jquery.dataTables.js"></script>
        <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>        -->
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

        <script>
            $(function() {
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

        <script>
            
            $(document).ready( function () {
    $('#myTable').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
    $('#myTable4').DataTable();
    $('#myTable5').DataTable();
    $('#myTable6').DataTable();
    $('#myTable7').DataTable();
} );

            $(document).ready(function() {
                $('.editbtn1').on('click', function() {
                    $('#editInfo1').modal('show');
                });
            });

            $(document).ready(function() {
                $('.editbtn2').on('click', function() {
                    $('#editInfo2').modal('show');
                });
            });

            $(document).ready(function() {
                $('.editbtn3').on('click', function() {
                    $('#editInfo3').modal('show');
                });
            });

            $(document).ready(function() {
                $('.editbtn4').on('click', function() {
                    $('#editInfo4').modal('show');
                });
            });

            $(document).ready(function() {
                $('.editbtn5').on('click', function() {
                    $('#editInfo5').modal('show');
                });
            });

            $(document).ready(function() {
                $('.editbtn6').on('click', function() {
                    $('#editInfo6').modal('show');
                });
            });

            $(document).ready(function() {
                $('.editbtn7').on('click', function() {
                    $('#editInfo7').modal('show');
                });
            });
        </script>
    </body>
</html>
