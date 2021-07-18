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
                    <a href="index.php" ><span class="las la-igloo"></span>
                        <span>หน้าหลัก</span></a>
                </li>
                <li>
                <a class="active"><span class="las la-cat"></span>
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
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลน้ำหนักสัตว์เลี้ยง</h5>
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
                                <input type="number" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">บันทึก</button>
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
                <div class="table-responsive">
                    <table id="example" class="table thead-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">วันที่</th>
                            <th scope="col">kg</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn1">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td><button type="button" class="btn btn-primary editbtn1">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td><button type="button" class="btn btn-primary editbtn1">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                                <button type="button" class="btn btn-success">บันทึก</button>
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
                <div class="table-responsive">
                    <table id="example" class="table thead-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">ชนิดป้องกัน</th>
                            <th scope="col">ชื่อเลขผลิต</th>
                            <th scope="col">วันที่ฉีด</th>
                            <th scope="col">วันนัดถัดไป</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn2">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn2">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn2">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
        <div class="modal fade" id="addInfo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">บันทึกข้อมูลประวัติกำจัดเห็บหมัด</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่กำจัด</label>
                                <input type="date" name="" class="form-control">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">บันทึก</button>
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
                <div class="table-responsive">
                    <table id="example" class="table thead-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">วันที่กำจัด</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><button type="button" class="btn btn-primary editbtn3">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn3">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td><button type="button" class="btn btn-primary editbtn3">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>วันที่ป้องกัน</label>
                                <input type="date" name="" class="form-control">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">บันทึก</button>
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
                <div class="table-responsive">
                    <table id="example" class="table thead-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">วันที่ป้องกัน</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><button type="button" class="btn btn-primary editbtn4">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn4">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td><button type="button" class="btn btn-primary editbtn4">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                    <form>
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
                                <button type="button" class="btn btn-primary">แก้ไข</button>
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
                    <form>
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
                                <button type="button" class="btn btn-success">บันทึก</button>
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
                <div class="table-responsive">
                    <table id="example" class="table thead-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">วันที่</th>
                            <th scope="col">ชนิดยา</th>
                            <th scope="col">วิธีใช้</th>
                            <th scope="col">ระยะเวลา</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td><button type="button" class="btn btn-primary editbtn5">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn5">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Larry</td>
                            <td>Larry</td>
                            <td>Larry</td>
                            <td><button type="button" class="btn btn-primary editbtn5">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                                <button type="button" class="btn btn-success">บันทึก</button>
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
                <div class="table-responsive">
                    <table id="example" class="table thead-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">ชื่อโรงพยาบาล</th>
                            <th scope="col">อาการป่วย</th>
                            <th scope="col">รายละเอียดการรักษา</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td><button type="button" class="btn btn-primary editbtn6">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn6">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Larry</td>
                            <td>Larry</td>
                            <td><button type="button" class="btn btn-primary editbtn6">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>ปัญหาสุขภาพประจำตัว</label>
                                <input type="text" name="" class="form-control" placeholder="ป้อนข้อมูล...">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">บันทึก</button>
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
                <div class="table-responsive">
                    <table id="example" class="table thead-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">ปัญหาสุขภาพประจำตัว</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><button type="button" class="btn btn-primary editbtn7">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-primary editbtn7">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td><button type="button" class="btn btn-primary editbtn7">Edit</button></td>
                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
        <script src="https://cdn.datatables.net/1.10.18/js/jquery.daTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script>
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
