<?php  
include('./include_menu.php'); 


// $ID = $_GET['ID'];
// $sql = "
// SELECT * FROM tbl_cat
// WHERE CatID=$ID";
// $result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
// $row = mysqli_fetch_array($result);
// extract($row);

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
                <form role="form" action="update_owner_profile_db.php" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
            <div class="col-sm-10">
                            ________ ภาพปัจจุบัน ________
                            <br>
                            <img src="./profileimg/owner/<?php echo $row['OwnerPhoto'];?>" width="250px" height="250px" alt="">
                            <br>
                        </div><br>
                    <div class="row">
                        <div class="col-sm-2">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ชื่อผู้ใช้</label>
                                <input type="text" name="Username" class="form-control"  value="<?php echo $row['Username'];?>" disabled>
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
                                        <input type="file" name="OwnerPhoto" class="custom-file-input" 
                                            id="exampleInputFile"accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">อัพโหลด</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ชื่อจริง</label>
                                <input type="text" name="FirstName" class="form-control"  value="<?php echo $row['FirstName'];?>">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>นามสกุลจริง</label>
                                <input type="text" name="LastName" class="form-control"  value="<?php echo $row['LastName'];?>">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>อีเมล</label>
                                <input type="email" name="Email" class="form-control"  value="<?php echo $row['Email'];?>" >
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="text" name="Telephone" class="form-control"  value="<?php echo $row['Telephone'];?>" >
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>ไลน์</label>
                                <input type="text" name="Line" class="form-control"  value="<?php echo $row['Line'];?>" >
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>เฟซบุ๊ก</label>
                                <input type="text" name="Facebook" class="form-control"  value="<?php echo $row['Facebook'];?>" >
                            </div>
                        </div>
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
                        <input type="hidden" name="Level" value="member">
                        <input type="hidden" name="OwnerPhoto2" value="<?php echo $row['OwnerPhoto'];?>">
                        <input type="hidden" name="OwnerID" value="<?php echo $row['OwnerID'];?>">
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
