<?php
    include './include_menu.php'
?>

<br><br>
<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ตารางข้อมูลพบคุณหมอ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">ตารางข้อมูลพบคุณหมอ</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <!-- <a class="btn btn-secondary btn-sm" href="../file/code_board.php" title="PDF [new window]" target="_blank"><i class="fas fa-print"> พิมพ์รายงาน</i></a> -->
                        <a class="float-right btn btn-success btn-sm" href="./create_board.php">
                        <i class="fas fa-plus-circle"></i>
                            </i>
                            เพิ่มข้อมูล
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table  id='example1' class='table table-bordered table-striped projects'>
                                        <thead>
                                            <tr align='center'>
                                            <th>ลำดับ</th>
                                            <th>ชื่อโรงพยาบาล</th>
                                            <th>อาการป่วย</th>
                                            <th>รายละเอียดการรักษา</th>
                                            <th>จัดการ</th>
                                            </tr>
                                        </thead>
                                   <tr>
                                            <td>1</td>
                                            <td>aaa</td>
                                            <td>aaa</td>
                                            <td>aaa</td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            <a href='update_board.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                            </i></a>
                                            <a href='delete_board_db.php?ID=$row[0]' onclick=\"return confirm('ยืนยันการลบ?')\" class='btn btn-danger btn-sm'> <i class='fas fa-trash'>
                                            </i></a></td>
                                    </tr>
                                    <tr>
                                            <td>2</td>
                                            <td>aaa</td>
                                            <td>aaa</td>
                                            <td>aaa</td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            <a href='update_board.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                            </i></a>
                                            <a href='delete_board_db.php?ID=$row[0]' onclick=\"return confirm('ยืนยันการลบ?')\" class='btn btn-danger btn-sm'> <i class='fas fa-trash'>
                                            </i></a></td>
                                    </tr>
                                    <tr>
                                            <td>3</td>
                                            <td>aaa</td>
                                            <td>aaa</td>
                                            <td>aaa</td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            <a href='update_board.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                            </i></a>
                                            <a href='delete_board_db.php?ID=$row[0]' onclick=\"return confirm('ยืนยันการลบ?')\" class='btn btn-danger btn-sm'> <i class='fas fa-trash'>
                                            </i></a></td>
                                    </tr>
                               </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <br><br>
<!-- </div> -->
<!-- /.content-wrapper -->
<!-- page script -->
<script>
$(document).ready(function() {
    $('a[href^="./table_visit.php"]').addClass('nav-item has-treeview menu-open nav-link active ');
});
</script>