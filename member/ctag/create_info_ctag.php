<?php  
include('./include_menu.php'); 


$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_cat
WHERE CatID=$ID";
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
    <div class="modal fade" id="editInfo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลน้ำหนักสัตว์เลี้ยง</h5>
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
                                <label>น้ำหนัก</label>
                                <input type="number" step="0.01" name="" class="form-control" placeholder="ป้อนข้อมูล...">
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
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลน้ำหนักสัตว์เลี้ยง</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_cat_weight_db.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่</label>
                                <input type="date" name="CatWeightDate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>น้ำหนัก</label>
                                <input type="number" step="0.01" name="CatWeight" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="Ref_CatID" value="<?php echo $CatID;?>">
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
            <h2>ตารางข้อมูลน้ำหนักสัตว์เลี้ยง</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo1">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query = "SELECT * FROM tbl_cat as d
                            INNER JOIN tbl_member_cat_weight as mcw ON mcw.Ref_CatID = d.CatID WHERE CatID=$CatID
                            " or die("Error:" . mysqli_error());
                            $result = mysqli_query($condb, $query); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>วันที่</th>
                                            <th>kg</th>
                                            <th>วันที่บันทึก</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                            </tr>
                                        </thead>
                                    ";
                                    $item = 0;
                                    while($row = mysqli_fetch_array($result)) { 
                                        $item +=1;
                                        echo "<tr align='center'>";
                                        echo "<td>".$item.'.'. "</td>";
                                        echo "<td>" .$row["CatWeightDate"] . "</td> "; 
                                        echo "<td>" .$row["CatWeight"] . "</td> "; 
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
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลประวัติการฉีดวัคซีน</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                        <div class="form-group">
                                <label>ชนิดป้องกัน</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>ชื่อเลขผลิต</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>วันที่ฉีด</label>
                                <input type="date" name="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>วันนัดถัดไป</label>
                                <input type="date" name="" class="form-control">
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
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลประวัติการฉีดวัคซีน</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_cat_vaccine_db.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>ชนิดป้องกัน</label>
                                <input type="text" name="ProtectType" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>ชื่อเลขผลิต</label>
                                <input type="text" name="ProductCode" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>วันที่ฉีด</label>
                                <input type="date" name="InjectDate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>วันนัดถัดไป</label>
                                <input type="date" name="NextDate" class="form-control">
                            </div>
                            </div>
                            <div class="modal-footer">
                            <input type="hidden" name="Ref_CatID" value="<?php echo $CatID;?>">
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
            <h2>ตารางข้อมูลประวัติการฉีดวัคซีน</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo2">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_cat as d
                            INNER JOIN tbl_member_cat_vaccine as mcv ON mcv.Ref_CatID = d.CatID WHERE CatID=$CatID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable2' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>ชนิดป้องกัน</th>
                                            <th>ชื่อเลขผลิต</th>
                                            <th>วันที่ฉีด</th>
                                            <th>วันนัดถัดไป</th>
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
                                        echo "<td>" .$row["ProtectType"] . "</td> "; 
                                        echo "<td>" .$row["ProductCode"] . "</td> "; 
                                        echo "<td>" .$row["InjectDate"] . "</td> "; 
                                        echo "<td>" .$row["NextDate"] . "</td> "; 
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
       <div class="modal fade" id="editInfo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลประวัติกำจัดเห็บหมัด</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่กำจัด</label>
                                <input type="date" name="AntiFleaDate" class="form-control">
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
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลประวัติกำจัดเห็บหมัด</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_cat_anti_flea_db.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่กำจัด</label>
                                <input type="date" name="AntiFleaDate" class="form-control">
                            </div>
                            </div>
                            <div class="modal-footer">
                            <input type="hidden" name="Ref_CatID" value="<?php echo $CatID;?>">
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
            <h2>ตารางข้อมูลประวัติกำจัดเห็บหมัด</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo3">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_cat as d
                            INNER JOIN tbl_member_cat_anti_flea as mdf ON mdf.Ref_CatID = d.CatID WHERE CatID=$CatID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable3' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>วันที่กำจัด</th>
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
                                        echo "<td>" .$row["AntiFleaDate"] . "</td> "; 
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
       <div class="modal fade" id="editInfo4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลป้องกันพยาธิหนอนหัวใจ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่ป้องกัน</label>
                                <input type="date" name="" class="form-control">
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
        <div class="modal fade" id="addInfo4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลป้องกันพยาธิหนอนหัวใจ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_cat_dirofilaria_db.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่ป้องกัน</label>
                                <input type="date" name="ProtectDate" class="form-control">
                            </div>
                            </div>
                            <div class="modal-footer">
                            <input type="hidden" name="Ref_CatID" value="<?php echo $CatID;?>">
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
            <h2>ตารางข้อมูลป้องกันพยาธิหนอนหัวใจ</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo4">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_cat as d
                            INNER JOIN tbl_member_cat_dirofilaria as mdd ON mdd.Ref_CatID = d.CatID WHERE CatID=$CatID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable4' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>วันที่ป้องกัน</th>
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
                                        echo "<td>" .$row["ProtectDate"] . "</td> "; 
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
       <div class="modal fade" id="editInfo5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลรายละเอียดยา</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่</label>
                                <input type="date" name="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ชนิดยา</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>วิธีใช้</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>ระยะเวลา</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                            <input type="hidden" name="Ref_CatID" value="<?php echo $CatID;?>">
                                <input type="hidden" name="Ref_OwnerID" value="<?php echo $OwnerID;?>">
                                <button type="submit" class="btn btn-primary">แก้ไข</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addInfo5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลรายละเอียดยา</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_cat_drug_details.php" method="post">
                        <div class="modal-body">
                        <div class="form-group">
                                <label>วันที่</label>
                                <input type="date" name="DrugDate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ชนิดยา</label>
                                <input type="text" name="DrugType" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>วิธีใช้</label>
                                <input type="text" name="Howto" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>ระยะเวลา</label>
                                <input type="text" name="Duration" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="Ref_CatID" value="<?php echo $CatID;?>">
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
            <h2>ตารางข้อมูลรายละเอียดยา</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo5">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_cat as d
                            INNER JOIN tbl_member_cat_drug_details as mddd ON mddd.Ref_CatID = d.CatID WHERE CatID=$CatID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable5' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>วันที่</th>
                                            <th>ชนิดยา</th>
                                            <th>วิธีใช้</th>
                                            <th>ระยะเวลา</th>
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
                                        echo "<td>" .$row["DrugDate"] . "</td> "; 
                                        echo "<td>" .$row["DrugType"] . "</td> "; 
                                        echo "<td>" .$row["Howto"] . "</td> "; 
                                        echo "<td>" .$row["Duration"] . "</td> "; 
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
       <div class="modal fade" id="editInfo6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลพบคุณหมอ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>ชื่อโรงพยาบาล</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>อาการป่วย</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>รายละเอียดการรักษา</label>
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
        <div class="modal fade" id="addInfo6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลพบคุณหมอ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_cat_doctor_visit_db.php" method="post"> 
                        <div class="modal-body">
                            <div class="form-group">
                                <label>ชื่อโรงพยาบาล</label>
                                <input type="text" name="HospitalName" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>อาการป่วย</label>
                                <input type="text" name="IllNess" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            <div class="form-group">
                                <label>รายละเอียดการรักษา</label>
                                <input type="text" name="TreatDetails" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="Ref_CatID" value="<?php echo $CatID;?>">
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
            <h2>ตารางข้อมูลพบคุณหมอ</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo6">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_cat as d
                            INNER JOIN tbl_member_cat_doctor_visit as mdv ON mdv.Ref_CatID = d.CatID WHERE CatID=$CatID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable6' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>ชื่อโรงพยาบาล</th>
                                            <th>อาการป่วย</th>
                                            <th>รายละเอียดการรักษา</th>
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
                                        echo "<td>" .$row["HospitalName"] . "</td> "; 
                                        echo "<td>" .$row["IllNess"] . "</td> "; 
                                        echo "<td>" .$row["TreatDetails"] . "</td> "; 
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
       <div class="modal fade" id="editInfo7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลสุขภาพทั่วไป</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>ปัญหาสุขภาพประจำตัว</label>
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
        <div class="modal fade" id="addInfo7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลสุขภาพทั่วไป</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="create_member_cat_health_db.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>ปัญหาสุขภาพประจำตัว</label>
                                <input type="text" name="HealthIssues" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="Ref_CatID" value="<?php echo $CatID;?>">
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
            <h2>ตารางข้อมูลสุขภาพทั่วไป</h2>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addInfo7">เพิ่มข้อมูล</button>
            </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php
                            $query2 = "SELECT * FROM tbl_cat as d
                            INNER JOIN tbl_member_cat_health as mdh ON mdh.Ref_CatID = d.CatID WHERE CatID=$CatID
                            " or die("Error:" . mysqli_error());
                            $result2 = mysqli_query($condb, $query2); 
                            echo "<div class='table-responsive'>";
                            echo "<table  id='myTable7' class='table thead-light'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>#</th>
                                            <th>ปัญหาสุขภาพประจำตัว</th>
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
                                        echo "<td>" .$row["HealthIssues"] . "</td> "; 
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
                            mysqli_close($condb);
                        ?>
                </div>
            </div>
        </div>
        <br>
       <!-- ======================================================= -->
       
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
