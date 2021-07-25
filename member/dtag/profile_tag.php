<?php  
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * ,YEAR( FROM_DAYS( DATEDIFF( NOW( ) , DogBirthdate ) ) ) as age FROM tbl_dog as d
INNER JOIN tbl_dog_breed as db ON d.Ref_DogBreedID = db.DogBreedID
INNER JOIN tbl_templates as t ON d.Ref_TemplateID = t.TemplateID
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
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h2>ข้อมูลแท็ก</h2>
                            <?php 
                                echo "<a href='./update_dtag_profle.php?ID=".$row['DogID']."'>"." <button>แก้ไขข้อมูล <span class='las la-edit'></span></button>" ."</a>";
                         ?>
                            <!-- <button> แก้ไขข้อมูล <span class="las la-edit"></span></button> -->
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                    <div class="profile-info">
                                        <img src="../profileimg/dtag/<?php echo $row['DogPhoto'];?>" width="250px" height="250px" alt="">
                                    </div>
                                    <div>
                                        <p><span class="las la-user-circle"></span> ชื่อ: <?php echo $DogName;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> ชื่อพันธุ์ : <?php echo $DogBreedName;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> อายุ : <?php echo $age;?></p>
                                        <!-- <p><span class="las la-chevron-circle-right"></span> น้ำหนัก : <?php echo $age;?></p> -->
                                        <p><span class="las la-chevron-circle-right"></span> เพศ : <?php echo $DogGender;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> กรุ๊ปเลือด : <?php echo $DogBlood;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> วันเกิด : <?php echo date('d/m/Y', strtotime($row["DogBirthdate"]));?></p>
                                        <!-- <div class="firstline"> -->
                                        <p><span class="las la-chevron-circle-right"></span> ลักษณะภายนอก : <?php echo $DogCoatColor;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> นิสัย : <?php echo $DogPersonality;?></p>
                                        <!-- </div> -->
                                    </div>
                            </div>
                         </div>
                         <div class="card-header">
                         <?php 
                                echo "<a href='./info_breed.php?ID=".$row['DogID']."'>"." <button>ดูข้อมูลเกี่ยวกับพันธุ์ <span class='lab la-readme'></span></button>" ."</a>";
                                echo "<a href='./create_info_dtag.php?ID=".$row['DogID']."'>"." <button>บันทึกข้อมูลสัตว์เลี้ยง <span class='lab la-save'></span></button>" ."</a>";
                         ?>
                        </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="template">
                        <div class="tem-header">
                            <h3>นามบัตรสัตว์เลี้ยง</h3>
                            <button>เปลี่ยนนามบัตร <span class="las la-exchange-alt"></span></button>
                        </div>
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                        <img class="img-front" src="./../../admin/image/templates/<?php echo $row['TemplateFrontImageSample'];?>" width="250px"  alt="template">
                                        <div style="text-align:left;" class="data-ft">
                                                <p><?php  echo $FirstName;?></p>  
                                                <p><?php echo $Telephone;?></p>
                                                <p><?php echo $Line;?></p>
                                                <br>
                                                <br>
                                                <p><?php echo $DogName;?></p>
                                                <p><?php echo $DogBlood;?></p>
                                                <p><?php echo $DogBirthdate;?></p>  
                                        </div>
                                </div>
                                <div class="flip-card-back">
                                <img class="img-back" src="./../../admin/image/templates/<?php echo $row['TemplateBackImageSample'];?>" width="250px"  alt="template">
                                <div class="data-bk">
                                <img src="../profileimg/dtag/<?php echo $row['DogPhoto'];?>" width="200px"  alt="template">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
           include('../include_card_list.php');
            ?>
        </main>
    </div>
    </body>
</html>
