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
WHERE TemplateID!=$Ref_TemplateID AND TemplateCategory = 'DTag' " or die("Error:" . mysqli_error());
$result2 = mysqli_query($condb, $query2);

function getImagePath($src) {
    include('../../condb.php');
    $getTemplate = "SELECT TemplateID, 	TemplateFrontImageSample, TemplateBackImageSample FROM tbl_templates WHERE TemplateID = $src"  or die("Error:" . mysqli_error());
    $templateResults =  mysqli_query($condb, $getTemplate);
    $templateStatus = mysqli_fetch_row($templateResults);
    return $templateStatus[1];
};

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
                <a class="active"><span class="las la-dog"></span>
                        <span>ดูข้อมูลสุนัขทั่วไป</span></a>
                </li>
               
                <li>
                    <a href="info_body.php"><span class="las la-bookmark"></span>
                        <span>กายวิภาคสุนัข</span></a>
                </li>
                <li>
                    <a href="info_ave_age.php"><span class="las la-bookmark"></span>
                        <span>อายุเฉลี่ยสุนัข</span></a>
                </li>
                <li>
                    <a href="info_supplies.php"><span class="las la-bookmark"></span>
                        <span>อุปกรณ์ในการเลี้ยงสุนัข</span></a>
                </li>
                <li>
                    <a href="info_communicate.php"><span class="las la-bookmark"></span>
                        <span>การสื่อสารเบื้องต้นของสุนัข</span></a>
                </li>
                <li>
                    <a href="info_treat.php"><span class="las la-bookmark"></span>
                        <span>การเลี้ยงดูสุนัขเบื้องต้น</span></a>
                </li>
                <li>
                    <a href="info_cleaning.php"><span class="las la-bookmark"></span>
                        <span>การทำความสะอาดสุนัข</span></a>
                </li>
                <li>
                    <a href="info_diseases.php"><span class="las la-bookmark"></span>
                        <span>โรคต่างๆของสุนัข</span></a>
                </li>
                <li>
                    <a href="info_questions.php"><span class="las la-bookmark"></span>
                        <span>คำถามที่พบบ่อย</span></a>
                </li>
                <li>
                    <a href="info_vaccine.php"><span class="las la-bookmark"></span>
                        <span>ตารางการให้วัดซีนของสุนัข</span></a>
                </li>
                <li>
                    <a href="info_sickness.php"><span class="las la-bookmark"></span>
                        <span>ข้อสังเกตสุนัขเมื่อป่วย</span></a>
                </li>
                <li>
                    <a href="info_choose_food.php"><span class="las la-bookmark"></span>
                        <span>เลือกอาหารสุนัขให้เหมาะกับวัย</span></a>
                </li>
                <li>
                    <a href="info_takecare.php"><span class="las la-bookmark"></span>
                        <span>ข้อควรระวังในการเลี้ยงสุนัข</span></a>
                </li>
                <li>
                    <a href="info_neuter.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการทำหมันสุนัข</span></a>
                </li>
                <li>
                    <a href="info_type_food.php"><span class="las la-bookmark"></span>
                        <span>ประเภทอาหารของสุนัข</span></a>
                </li>
                <li>
                    <a href="info_vaccine_program.php"><span class="las la-bookmark"></span>
                        <span>โปรแกรมวัคซีนในสุนัข</span></a>
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
            <h2>เปลี่ยนนามบัตรสัตว์เลี้ยง</h2>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo6">เพิ่มข้อมูล</button> -->
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <form role="form" action="update_dtag_template_db.php" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
                    <div class="row">
                            <!-- <div class="col-sm-6">
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
                            </div> -->
                          
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>นามบัตรสุนัข</label>
                                    <select name="Ref_TemplateID" id="imageSelector" class="form-control">
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
                            <div class="col-md-6">
                            <div id="imagePreview"></div>
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
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
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

        <script>
    $(document).ready(function() {
    $("#imageSelector").change(function() {
        var src = $(this).val();
        $.ajax({
            type:'POST',
            url : 'getPath.php',
            data : {templateID:src},
            success : function(data){
            $("#imagePreview").html(src ? "<img  width='300px' alt='image' src= '../admin/image/templates/" + data + "'>" : "");
                }
            });      
        });
    });
</script>

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
