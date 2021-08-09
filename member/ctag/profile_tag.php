<?php  
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * ,YEAR( FROM_DAYS( DATEDIFF( NOW( ) , CatBirthdate ) ) ) as age FROM tbl_cat as c
INNER JOIN tbl_cat_breed as cb ON c.Ref_CatBreedID = cb.CatBreedID
INNER JOIN tbl_templates as t ON c.Ref_TemplateID = t.TemplateID
WHERE c.CatID=$ID";
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
                        echo "<a href='./update_ctag_profile.php?ID=" . $row['CatID'] . "'>" . " <button>แก้ไขข้อมูล <span class='las la-edit'></span></button>" . "</a>";
                        ?>
                        <!-- <button> แก้ไขข้อมูล <span class="las la-edit"></span></button> -->
                    </div>
                    <div class="card-body">
                        <div class="profile">
                            <div class="profile-info">
                                <img src="../profileimg/ctag/<?php echo $row['CatPhoto']; ?>" width="250px" height="250px" alt="">
                            </div>
                            <div>
                                <p><span class="las la-user-circle"></span> ชื่อ: <?php echo $CatName; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> ชื่อพันธุ์ : <?php echo $CatBreedName; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> อายุ : <?php echo $age; ?></p>
                                <!-- <p><span class="las la-chevron-circle-right"></span> น้ำหนัก : <?php echo $age; ?></p> -->
                                <p><span class="las la-chevron-circle-right"></span> เพศ : <?php echo $CatGender; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> กรุ๊ปเลือด : <?php echo $CatBlood; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> วันเกิด : <?php echo date('d/m/',strtotime($row['CatBirthdate']));
                                     $y = date('Y',strtotime($row['CatBirthdate']));
                                     echo $y+543; ?></p>
                                <!-- <div class="firstline"> -->
                                <p><span class="las la-chevron-circle-right"></span> ลักษณะภายนอก : <?php echo $CatCoatColor; ?></p>
                                <p><span class="las la-chevron-circle-right"></span> นิสัย : <?php echo $CatPersonality; ?></p>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <?php
                        echo "<a href='./info_breed.php?ID=" . $row['CatID'] . "'>" . " <button>ดูข้อมูลเกี่ยวกับพันธุ์ <span class='lab la-readme'></span></button>" . "</a>";
                        echo "<a href='./create_info_ctag.php?ID=" . $row['CatID'] . "'>" . " <button>บันทึกข้อมูลสัตว์เลี้ยง <span class='lab la-save'></span></button>" . "</a>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="customers">
                <div class="template">
                    <div class="tem-header">
                        <h3>นามบัตรสัตว์เลี้ยง</h3>
                        <?php
                        echo "<a href='./update_ctag_template.php?ID=" . $row['CatID'] . "'>" . " <button>เปลี่ยนนามบัตร <span class='las la-exchange-alt'></span></button>" . "</a>";
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
                                    <p><?php echo $CatName; ?></p>
                                    <p><?php echo $CatBlood; ?></p>
                                    <p><?php echo date('d/m/',strtotime($row['CatBirthdate']));
                                     $y = date('Y',strtotime($row['CatBirthdate']));
                                     echo $y+543; ?></p>
                                </div>
                            </figure>
                            <figure class="flip-card-back1">
                                <img class="img-back1" src="./../../admin/image/templates/<?php echo $row['TemplateBackImageSample']; ?>" width="250px" alt="">
                                <div class="data-bk1" ontouchend="imgWindows()" onclick="imgWindows()">
                                    <img src="../profileimg/ctag/<?php echo $row['CatPhoto']; ?>"  width="160px" height="160px" alt="">
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