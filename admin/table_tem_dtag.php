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
                    <h1 class="m-0 text-dark">ตารางข้อมูลนามบัตรสุนัข</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">ตารางข้อมูลนามบัตรสุนัข</li>
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
                        <a class="float-right btn btn-success btn-sm" href="./create_tem_dtag.php">
                        <i class="fas fa-plus-circle"></i>
                            </i>
                            เพิ่มข้อมูล
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php
                            $query = "SELECT * FROM tbl_templates WHERE TemplateCategory = 'DTag' ORDER BY TemplateID DESC " or die("Error:" . mysqli_error());
                            $result = mysqli_query($condb, $query); 
                                echo "<table  id='example1' class='table table-bordered table-striped'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>ลำดับ</th>
                                            <th>รหัส</th>
                                            <th>รูปนามบัตรด้านหน้า</th>
                                            <th>รูปนามบัตรด้านหลัง</th>
                                            <th>ชื่อนามบัตร</th>
                                            <th>วันที่ลงนามบัตร</th>
                                            <th>จัดการ</th>
                                            </tr>
                                        </thead>
                                    ";
                                    $item = 0;
                                    while($row = mysqli_fetch_array($result)) { 
                                        $item +=1;
                                        echo "<tr>";
                                        echo "<td align='center'>".$item.'.'. "</td>";
                                        echo "<td align='center'>" .'TP_DT'.$row["TemplateID"] . "</td> "; 
                                        echo "<td align='center'>"."<img class='table-avatar' width='300px' alt='image' src='./image/templates/".$row['TemplateFrontImageSample']."'>"."</td>";
                                        echo "<td align='center'>"."<img class='table-avatar' width='300px' alt='image' src='./image/templates/".$row['TemplateBackImageSample']."'>"."</td>";
                                        echo "<td>" .$row["TemplateName"] . "</td> "; 
                                        echo "<td align='center'>" .$row["TemplateCreateDate"] . "</td> "; 
                                        echo "<td class='project-actions text-center'>
                                        <a href='update_tem_dtag.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                        </i></a>
                                      </td> ";
                                    }
                                    echo "
                                        <tfoot>
                                        <tr align='center'>
                                            <th>ลำดับ</th>
                                            <th>รหัส</th>
                                            <th>รูปนามบัตรด้านหน้า</th>
                                            <th>รูปนามบัตรด้านหลัง</th>
                                            <th>ชื่อนามบัตร</th>
                                            <th>วันที่ลงนามบัตร</th>
                                            <th>จัดการ</th>
                                            </tr>
                                        </tfoot>
                                    ";
                                echo "</table>";
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
    $('a[href^="./table_tem_dtag.php"]').addClass('nav-item has-treeview menu-open nav-link active ');
});
</script>