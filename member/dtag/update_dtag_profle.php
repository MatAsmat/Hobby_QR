<!-- INNER JOIN tbl_owner as o ON d.Ref_OwnerID = o.OwnerID
INNER JOIN tbl_qrcode as q ON d.Ref_QrCodeID = q.QrCodeID -->
<?php  
include('./include_menu.php'); 


$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_dog as d
INNER JOIN tbl_dog_breed as db ON d.Ref_DogBreedID = db.DogBreedID
INNER JOIN tbl_templates as t ON d.Ref_TemplateID = t.TemplateID
WHERE d.DogID=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

$Ref_DogBreedID = $row['Ref_DogBreedID'];

$query = "SELECT * FROM tbl_dog_breed
WHERE DogBreedID!=$Ref_DogBreedID" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);

$Ref_TemplateID = $row['Ref_TemplateID'];

$query2 = "SELECT * FROM tbl_templates
WHERE TemplateID!=$Ref_TemplateID" or die("Error:" . mysqli_error());
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
            <h2>แก้ไขข้อมูลส่วนตัว</h2>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo6">เพิ่มข้อมูล</button> -->
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <form role="form" action="update_dtag_profile_db.php" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
            <div class="col-sm-10">
                            ________ ภาพปัจจุบัน ________
                            <br>
                            <img src="../profileimg/dtag/<?php echo $row['DogPhoto'];?>" width="250px" height="250px" alt="">
                            <br>
                        </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input type="text" name="DogName" class="form-control"  value="<?php echo $row['DogName'];?>">
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
                                        <input type="file" name="DogPhoto" class="custom-file-input" 
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
                                        <input type="date" name="DogBirthdate" class="form-control"
                                            value="<?php echo $row['DogBirthdate'];?>">
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-2">
                                <div class="form-group">
                                    <label>เพศ</label>
                                    <select name="DogGender" class="form-control">
                                        <option value="<?php echo $row['DogGender'];?>">-<?php echo $row['DogGender'];?>-
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
                                    <select name="DogBlood" id="" class="form-control">
                                        <option value="<?php echo $row['DogBlood'];?>">-<?php echo $row['DogBlood'];?>-
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
                                <input type="text" name="DogCoatColor" class="form-control"  value="<?php echo $row['DogCoatColor'];?>">
                            </div>
                        </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>ลักษณะนิสัย</label>
                                    <select name="DogPersonality" id="" class="form-control">
                                        <option value="<?php echo $row['DogPersonality'];?>">-<?php echo $row['DogPersonality'];?>-
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
                                    <label>พันธุ์สุนัข</label>
                                    <select name="Ref_DogBreedID" class="form-control">
                                        <option value="<?php echo $row['Ref_DogBreedID'];?>">
                                            -<?php echo $row['DogBreedName'];?>-
                                        </option>
                                        <option value="">--เลือกข้อมูล--</option>
                                        <?php foreach($result as $results){ ?>
                                        <option value="<?php echo $results["DogBreedID"];?>">
                                            - <?php echo $results["DogBreedName"];?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>นามบัตรสุนัข</label>
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
                        <input type="hidden" name="DogPhoto2" value="<?php echo $row['DogPhoto'];?>">
                        <input type="hidden" name="Ref_OwnerID" value="<?php echo $row['Ref_OwnerID'];?>">
                        <input type="hidden" name="Ref_QrCodeID" value="<?php echo $row['Ref_QrCodeID'];?>">
                        <input type="hidden" name="DogID" value="<?php echo $row['DogID'];?>">
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
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->

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
