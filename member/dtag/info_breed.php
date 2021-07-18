<?php  
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_dog as d
INNER JOIN tbl_dog_breed as db ON d.Ref_DogBreedID = db.DogBreedID
WHERE d.DogID=$ID";
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
                                    <img src="../profileimg/dtag/<?php echo $row['DogPhoto'];?>" width="250px" height="250px" alt="">
                                    </div>
                                    <div>
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedPersonality;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCharacter;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCare;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHerdsman;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHealthIssues;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedNutrients;?></p>

                                    </div>
                            </div>
                         </div>
                    </div>
        </main>
    </div>
    </body>
</html>
