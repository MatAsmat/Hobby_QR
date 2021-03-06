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
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedPersonality1;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedPersonality2;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedPersonality3;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedPersonality4;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedPersonality5;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedPersonality6;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCharacter1;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCharacter2;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCharacter3;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCharacter4;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCharacter5;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCharacter6;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCare1;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCare2;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCare3;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCare4;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCare5;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedCare6;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHerdsman1;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHerdsman2;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHerdsman3;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHerdsman4;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHerdsman5;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHerdsman6;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHealthIssues1;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHealthIssues2;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHealthIssues3;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHealthIssues4;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHealthIssues5;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedHealthIssues6;?></p>
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
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedNutrients1;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedNutrients2;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedNutrients3;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedNutrients4;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedNutrients5;?></p>
                                    <p><span class="las la-chevron-circle-right"></span> <?php echo $DogBreedNutrients6;?></p>

                                    </div>
                            </div>
                         </div>
                    </div>
        </main>
    </div>
    </body>
</html>
