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
<!DOCTYPE html>
<html lang="en">
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
                        echo "<a href='./update_dtag_profile.php?ID=" . $row['DogID'] . "'>" . " <button>แก้ไขข้อมูล <span class='las la-edit'></span></button>" . "</a>";
                        ?>
                        <!-- <button> แก้ไขข้อมูล <span class="las la-edit"></span></button> -->
                    </div>
                    <div class="card-body">
                        <div class="profile">
                            <div class="profile-info">
                                <img src="../profileimg/dtag/<?php echo $row['DogPhoto']; ?>" width="250px" height="250px" alt="">
                            </div>
                            <div>
                                <p><span class="las la-user-circle"></span> ชื่อ: <?php echo $DogName; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> ชื่อพันธุ์ : <?php echo $DogBreedName; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> อายุ : <?php echo $age; ?></p>
                                <!-- <p><span class="las la-chevron-circle-right"></span> น้ำหนัก : <?php echo $age; ?></p> -->
                                <p><span class="las la-chevron-circle-right"></span> เพศ : <?php echo $DogGender; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> กรุ๊ปเลือด : <?php echo $DogBlood; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> วันเกิด : <?php echo date('d/m/Y', strtotime($row["DogBirthdate"])); ?></p>
                                <!-- <div class="firstline"> -->
                                <p><span class="las la-chevron-circle-right"></span> ลักษณะภายนอก : <?php echo $DogCoatColor; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> นิสัย : <?php echo $DogPersonality; ?></p>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <?php
                        echo "<a href='./info_breed.php?ID=" . $row['DogID'] . "'>" . " <button>ดูข้อมูลเกี่ยวกับพันธุ์ <span class='lab la-readme'></span></button>" . "</a>";
                        echo "<a href='./create_info_dtag.php?ID=" . $row['DogID'] . "'>" . " <button>บันทึกข้อมูลสัตว์เลี้ยง <span class='lab la-save'></span></button>" . "</a>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="customers">
                <div class="template">
                    <div class="tem-header">
                        <h3>นามบัตรสัตว์เลี้ยง</h3>
                        <?php
                        echo "<a href='./update_dtag_template.php?ID=" . $row['DogID'] . "'>" . " <button>เปลี่ยนนามบัตร <span class='las la-exchange-alt'></span></button>" . "</a>";
                        ?>
                    </div>
                    <div class="flip-card1" ontouchstart="">
                        <div class="flip-card-inner1" ontouchstart="">
                            <figure class="flip-card-front1">
                                <img class="img-front1" src="./../../admin/image/templates/<?php echo $row['TemplateFrontImageSample']; ?>" width="250px" alt="">
                                <div style="text-align:left;" class="data-ft">
                                    <p><?php echo $FirstName; ?></p>
                                    <p><?php echo $Telephone; ?></p>
                                    <p><?php echo $Line; ?></p>
                                    <br>
                                    <br>
                                    <p><?php echo $DogName; ?></p>
                                    <p><?php echo $DogBlood; ?></p>
                                    <p><?php echo $DogBirthdate; ?></p>
                                </div>
                            </figure>
                            <figure class="flip-card-back1">
                                <img class="img-back1" src="./../../admin/image/templates/<?php echo $row['TemplateBackImageSample']; ?>" width="250px" alt="">
                                <div class="data-bk1" ontouchend="imgWindows()" onclick="imgWindows()">
                                    <img src="../profileimg/dtag/<?php echo $row['DogPhoto']; ?>" width="200px" height="250px" alt="" style="padding-right:20%;padding-top:40%;">
                                </div>
                            </figure>

                        </div>
                    </div>
                    <div style=" display: flex;align-items: center;justify-content: center; padding-bottom: 4%;">
                        <div id="toggle" onclick="imgWindows()" style="color: white;">พลิกนามบัตร</div>
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

<script>
    var tooltip = document.getElementById('flip-card-back');
    var toggle = document.getElementById('toggle');
    var tooltips2 = document.getElementById('flip-card');
    
    function imgWindows() {
            console.log('click work !');
            // tooltip.classList.add('hover');
            // tooltip2.classList.add('hover');
            var isHover = false;
            tooltip.classList.remove('hover');
            tooltip2.classList.remove('hover');

    };
</script>