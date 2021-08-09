<!-- INNER JOIN tbl_owner as o ON d.Ref_OwnerID = o.OwnerID
INNER JOIN tbl_qrcode as q ON d.Ref_QrCodeID = q.QrCodeID -->
<?php  
include('./include_menu.php'); 


$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_tree as d
INNER JOIN tbl_tree_breed as db ON d.Ref_TreeBreedID = db.TreeBreedID
INNER JOIN tbl_templates as t ON d.Ref_TemplateID = t.TemplateID
WHERE d.TreeID=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

$Ref_TreeBreedID = $row['Ref_TreeBreedID'];

$query = "SELECT * FROM tbl_tree_breed
WHERE TreeBreedID!=$Ref_TreeBreedID" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);

$Ref_TemplateID = $row['Ref_TemplateID'];

$query2 = "SELECT * FROM tbl_templates
WHERE TemplateID!=$Ref_TemplateID AND TemplateCategory = 'TTag'" or die("Error:" . mysqli_error());
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
                <a class="active"><span class="las la-seedling"></span>
                        <span>ดูข้อมูลต้นไม้ทั่วไป</span></a>
                </li>
               
                <li>
                    <a href="info_structure.php"><span class="las la-bookmark"></span>
                        <span>โครงสร้างของพืช</span></a>
                </li>
                <!-- <li>
                    <a href="info_potted_plant.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการปลูกต้นไม้กระถาง</span></a>
                </li> -->
                <li>
                    <a href="info_pot_plant.php"><span class="las la-bookmark"></span>
                        <span>กระถางหรือภาชนะปลูก</span></a>
                </li>
                <li>
                    <a href="info_pot_shape.php"><span class="las la-bookmark"></span>
                        <span>รูปทรงกระถางต้นไม้</span></a>
                </li>
                <li>
                    <a href="info_how_to_plant.php"><span class="las la-bookmark"></span>
                        <span>วิธีการปลูก</span></a>
                </li>
                <li>
                    <a href="info_fertilizing.php"><span class="las la-bookmark"></span>
                        <span>การให้ปุ๋ย</span></a>
                </li>
                <li>
                    <a href="info_watering.php"><span class="las la-bookmark"></span>
                        <span>การให้น้ำ</span></a>
                </li>
                <li>
                    <a href="info_soil_planter.php"><span class="las la-bookmark"></span>
                        <span>ดินหรือเครื่องปลูก</span></a>
                </li>
                <li>
                    <a href="info_tree_care.php"><span class="las la-bookmark"></span>
                        <span>การดูแลรักษาโดยทั่วไป</span></a>
                </li>
                <li>
                    <a href="info_preventing.php"><span class="las la-bookmark"></span>
                        <span>การป้องกันและกำจัดศัตรูพืช</span></a>
                </li>
                <li>
                    <a href="info_benefits_plant.php"><span class="las la-bookmark"></span>
                        <span>ประโยชน์ของไม้กระถาง</span></a>
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
            <h2>แก้ไขข้อมูลต้นไม้</h2>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo6">เพิ่มข้อมูล</button> -->
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <form role="form" action="update_ttag_profile_db.php" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
            <div class="col-sm-10">
                            ________ ภาพปัจจุบัน ________
                            <br>
                            <img src="../profileimg/ttag/<?php echo $row['TreePhoto'];?>" width="250px" height="250px" alt="">
                            <br>
                        </div><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input type="text" name="TreeName" class="form-control"  value="<?php echo $row['TreeName'];?>">
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
                                        <input type="file" name="TreePhoto" class="custom-file-input" 
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
                                        <input type="date" name="TreeBirthdate" class="form-control"
                                            value="<?php echo $row['TreeBirthdate'];?>">
                                    </div>
                                </div>
                                </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>พันธุ์ต้นไม้</label>
                                    <select name="Ref_TreeBreedID" class="form-control">
                                        <option value="<?php echo $row['Ref_TreeBreedID'];?>">
                                            -<?php echo $row['TreeBreedName'];?>-
                                        </option>
                                        <option value="">--เลือกข้อมูล--</option>
                                        <?php foreach($result as $results){ ?>
                                        <option value="<?php echo $results["TreeBreedID"];?>">
                                            - <?php echo $results["TreeBreedName"];?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>นามบัตรต้นไม้</label>
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
                        <input type="hidden" name="TreePhoto2" value="<?php echo $row['TreePhoto'];?>">
                        <input type="hidden" name="TreeID" value="<?php echo $row['TreeID'];?>">
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
