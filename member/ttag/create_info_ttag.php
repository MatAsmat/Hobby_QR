<?php  
include('./include_menu.php'); 


$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_tree
WHERE TreeID=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

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
    <div class="modal fade" id="editInfo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลรดต้นไม้</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่</label>
                                <input type="date" name="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>เวลา</label>
                                <input type="number" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">แก้ไข</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addInfo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลรดต้นไม้</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_tree_water_db.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่</label>
                                <input type="date" name="WaterDate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>เวลา</label>
                                <input type="time" name="WaterTime" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                            <input type="hidden" name="Ref_TreeID" value="<?php echo $TreeID;?>">
                                <input type="hidden" name="Ref_OwnerID" value="<?php echo $OwnerID;?>">
                                <button type="submit" class="btn btn-success">บันทึก</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
            <div class="card-body">
            <h2>ตารางรดต้นไม้</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo1">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_tree as t
                            INNER JOIN tbl_member_tree_water as mtw ON mtw.Ref_TreeID = t.TreeID WHERE TreeID=$TreeID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>วันที่</th>
                                            <th>เวลา</th>
                                            <th>วันที่บันทึก</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                            </tr>
                                        </thead>
                                    ";
                                    $item = 0;
                                    while($row = mysqli_fetch_array($result2)) { 
                                        $item +=1;
                                        echo "<tr align='center'>";
                                        echo "<td>".$item.'.'. "</td>";
                                        echo "<td>" .$row["WaterDate"] . "</td> "; 
                                        echo "<td>" .$row["WaterTime"] . "</td> "; 
                                        echo "<td>" .$row["DateSave"] . "</td> "; 
                                        echo "<td>
                                        <button type='button' class='btn btn-primary editbtn1'>Edit</button>
                                        </td> ";
                                        echo "<td>
                                        <button type='button' class='btn btn-danger'>Delete</button>
                                        </td> ";
                                        
                                    }
                                echo "</table>";
                                echo "</div>";
                        ?>
                </div>
            </div>
        </div>
        <br>
      
       <!-- ======================================================= -->
       <div class="modal fade" id="editInfo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลใส่ปุ๋ย</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่</label>
                                <input type="date" name="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>เวลา</label>
                                <input type="number" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">แก้ไข</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addInfo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลใส่ปุ๋ย</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_tree_fertilize_db.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่</label>
                                <input type="date" name="FertilizeDate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>เวลา</label>
                                <input type="time" name="FertilizeTime" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                            <input type="hidden" name="Ref_TreeID" value="<?php echo $TreeID;?>">
                                <input type="hidden" name="Ref_OwnerID" value="<?php echo $OwnerID;?>">
                                <button type="submit" class="btn btn-success">บันทึก</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
            <div class="card-body">
            <h2>ตารางใส่ปุ๋ย</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo2">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_tree as t
                            INNER JOIN tbl_member_tree_fertilize as mtf ON mtf.Ref_TreeID = t.TreeID WHERE TreeID=$TreeID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable2' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>วันที่</th>
                                            <th>เวลา</th>
                                            <th>วันที่บันทึก</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                            </tr>
                                        </thead>
                                    ";
                                    $item = 0;
                                    while($row = mysqli_fetch_array($result2)) { 
                                        $item +=1;
                                        echo "<tr align='center'>";
                                        echo "<td>".$item.'.'. "</td>";
                                        echo "<td>" .$row["FertilizeDate"] . "</td> "; 
                                        echo "<td>" .$row["FertilizeTime"] . "</td> "; 
                                        echo "<td>" .$row["DateSave"] . "</td> "; 
                                        echo "<td>
                                        <button type='button' class='btn btn-primary editbtn1'>Edit</button>
                                        </td> ";
                                        echo "<td>
                                        <button type='button' class='btn btn-danger'>Delete</button>
                                        </td> ";
                                        
                                    }
                                echo "</table>";
                                echo "</div>";
                        ?>
                </div>
            </div>
        </div>
        <br>
<!-- ========================================================================= -->
        <div class="modal fade" id="editInfo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลหมายเหตุ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>หมายเหตุ</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">แก้ไข</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addInfo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลหมายเหตุ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_tree_note_db.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>หมายเหตุ</label>
                                <textarea name="Note" class="form-control" rows="1" placeholder="ป้อนข้อมูล..."></textarea>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <input type="hidden" name="Ref_TreeID" value="<?php echo $TreeID;?>">
                                <input type="hidden" name="Ref_OwnerID" value="<?php echo $OwnerID;?>">
                                <button type="submit" class="btn btn-success">บันทึก</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
            <div class="card-body">
            <h2>ตารางหมายเหตุ</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo3">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_tree as t
                            INNER JOIN tbl_member_tree_note as mtn ON mtn.Ref_TreeID = t.TreeID WHERE TreeID=$TreeID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable3' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>หมายเหตุ</th>
                                            <th>วันที่บันทึก</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                            </tr>
                                        </thead>
                                    ";
                                    $item = 0;
                                    while($row = mysqli_fetch_array($result2)) { 
                                        $item +=1;
                                        echo "<tr align='center'>";
                                        echo "<td>".$item.'.'. "</td>";
                                        echo "<td>" .$row["Note"] . "</td> "; 
                                        echo "<td>" .$row["DateSave"] . "</td> "; 
                                        echo "<td>
                                        <button type='button' class='btn btn-primary editbtn1'>Edit</button>
                                        </td> ";
                                        echo "<td>
                                        <button type='button' class='btn btn-danger'>Delete</button>
                                        </td> ";
                                    }
                                echo "</table>";
                                echo "</div>";
                        ?>
                </div>
            </div>
        </div>
      
       <!-- ======================================================= -->
    </main>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/jquery.daTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->

        <script>

            
$(document).ready( function () {
    $('#myTable').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
} );

            $(document).ready(function() {
                $('#example').Datable();
            });

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
