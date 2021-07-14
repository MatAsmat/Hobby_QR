<?php
    include './include_menu.php'
?>

<br><br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ตารางข้อมูลพันธุ์ต้นไม้</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">ตารางข้อมูลพันธุ์ต้นไม้</li>
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
                        <a class="float-right btn btn-success btn-sm" href="./create_type_ttag.php">
                        <i class="fas fa-plus-circle"></i>
                            </i>
                            เพิ่มข้อมูล
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php
                            $query = "SELECT * FROM tbl_tree_breed ORDER BY TreeBreedID asc" or die("Error:" . mysqli_error());
                            $result = mysqli_query($condb, $query); 
                                echo "<table  id='example1' class='table table-bordered table-striped'>";
                                    echo "
                                        <thead>
                                        <tr align='center'>
                                        <th width='5%'>ลำดับ</th>
                                        <th width='10%'>รหัส</th>
                                        <th width='15%'>ชื่อพันธุ์</th>
                                        <th width='60%'>วิธีดูแล</th>
                                        <th width='10%'>แก้ไข</th>
                                        </tr>
                                        </thead>
                                    ";
                                    $item = 0;
                                        while($row = mysqli_fetch_array($result)) { 
                                            $item +=1;
                                            echo "<tr>";
                                            echo "<td align='center'>".$item.'.'. "</td>";
                                            echo "<td align='center'>" .'TY_DT'.$row["TreeBreedID"] . "</td> "; 
                                            echo "<td>" .$row["TreeBreedName"] .  "</td> "; 
                                            echo "<td>" .$row["TreeBreedCare"] .  "</td> "; 
                                            //แก้ไขข้อมูล
                                            echo "<td class='project-actions text-center'>
                                            <a href='update_type_ttag.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                            </i> แก้ไข</a></td> ";
                                            
                                            //ลบข้อมูล
                                            // echo "<td class='project-actions text-center'>
                                            // <a href='delete_position_db.php?ID=$row[0]' onclick=\"return confirm('ยืนยันการลบ?')\" class='btn btn-danger btn-sm'> <i class='fas fa-trash'>
                                            // </i> ลบ</a></td> ";
                                            // echo "</tr>";
                                        }
                                    echo "
                                        <tfoot>
                                        <tr align='center'>
                                        <th width='5%'>ลำดับ</th>
                                        <th width='10%'>รหัส</th>
                                        <th width='15%'>ชื่อพันธุ์</th>
                                        <th width='60%'>วิธีดูแล</th>
                                        <th width='10%'>แก้ไข</th>
                                        </tr>
                                        </tfoot>
                                    ";
                                echo "</table>";
                            //5. close condb
                            mysqli_close($condb);
                        ?>
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
</div>
<!-- /.content-wrapper -->
<!-- page script -->
<script>
$(document).ready(function() {
    $('a[href^="./table_type_ttag.php"]').addClass('nav-item has-treeview menu-open nav-link active ');
});
</script>