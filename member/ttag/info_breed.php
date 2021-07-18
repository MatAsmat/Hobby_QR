<?php  
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_tree as t
INNER JOIN tbl_tree_breed as tb ON t.Ref_TreeBreedID = tb.TreeBreedID
WHERE t.TreeID=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

?>
    <div class="main-content">
        <?php
           include('include_header.php');
        ?>
        <main>
                    <div class="card">
                        <div class="card-header">
                            <h2>การดูแลเบื้องต้น</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                    <div class="profile-info">
                                    <img src="../profileimg/ttag/<?php echo $row['TreePhoto'];?>" width="250px" height="250px" alt="">
                                    </div>
                                    <div>
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $TreeBreedCare;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>อาการผิดปกติ/โรค/ศัตรูพืช/และวิธีการรักษาเบื้องต้น</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $TreeBreedDisease;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>คำเตือนและคำแนะนำเพิ่มเติม</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $TreeBreedWarning;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>สัดส่วนการใช้เครื่องปลูกและปุ๋ย</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $TreeBreedFertilize;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>การขยายพันธุ์ / การเพาะปลูก</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $TreeBreedPropagation;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
        </main>
    </div>
    </body>
</html>
