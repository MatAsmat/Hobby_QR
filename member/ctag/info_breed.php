<?php  
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_cat as d
INNER JOIN tbl_cat_breed as db ON d.Ref_CatBreedID = db.CatBreedID
WHERE d.CatID=$ID";
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
                            <h2>ข้อมูลทั่วไปและลักษณะนิสัย</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                    <div class="profile-info">
                                    <img src="../profileimg/ctag/<?php echo $row['CatPhoto'];?>" width="250px" height="250px" alt="">
                                    </div>
                                    <div>
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $CatBreedPersonality;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>ข้อมูลบุคลิก</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $CatBreedCharacter;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>ข้อมูลการดูแล</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $CatBreedCare;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>ข้อมูลผู้เลี้ยงที่เหมาะสม</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $CatBreedHerdsman;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>ข้อมูลภาวะปัญหาสุขภาพ</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $CatBreedHealthIssues;?></p>
                                    </div>
                            </div>
                         </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>ข้อมูลความต้องการด้านสารอาหาร</h2>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                   
                                    <div>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $CatBreedNutrients;?></p>

                                    </div>
                            </div>
                         </div>
                    </div>
        </main>
    </div>
    </body>
</html>
