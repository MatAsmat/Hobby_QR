<?php  
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * ,YEAR( FROM_DAYS( DATEDIFF( NOW( ) , TreeBirthdate ) ) ) as age FROM tbl_tree as t
INNER JOIN tbl_tree_breed as cb ON t.Ref_TreeBreedID = cb.TreeBreedID
INNER JOIN tbl_templates as tp ON t.Ref_TemplateID = tp.TemplateID
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
            <div class="recent-grid">
            <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h2>ข้อมูลแท็ก</h2>
                            <?php 
                                echo "<a href='./update_ttag_profile.php?ID=".$row['TreeID']."'>"." <button>แก้ไขข้อมูล <span class='las la-edit'></span></button>" ."</a>";
                         ?>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                    <div class="profile-info">
                                        <img src="../profileimg/ttag/<?php echo $row['TreePhoto'];?>" width="250px" height="250px" alt="">
                                    </div>
                                    <div>
                                        <p><span class="las la-user-circle"></span> ชื่อต้นไม้: <?php echo $TreeName;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> ชื่อพันธุ์ : <?php echo $TreeBreedName;?></p>
                                        <!-- <div class="firstline"> -->
                                        <p><span class="las la-chevron-circle-right"></span> การดูแลเบื้องต้น : <?php echo $TreeBreedCare;?></p>
                                        <!-- </div> -->
                                    </div>
                            </div>
                         </div>
                         <div class="card-header">
                         <?php 
                                echo "<a href='./info_breed.php?ID=".$row['TreeID']."'>"." <button>ดูข้อมูลเกี่ยวกับพันธุ์ <span class='lab la-readme'></span></button>" ."</a>";
                                echo "<a href='./create_info_ttag.php?ID=".$row['TreeID']."'>"." <button>บันทึกข้อมูลต้นไม้ <span class='lab la-save'></span></button>" ."</a>";
                         ?>
                        </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="template">
                        <div class="tem-header">
                            <h3>นามบัตรต้นไม้</h3>
                            <?php 
                                echo "<a href='./update_ttag_template.php?ID=".$row['TreeID']."'>"." <button>เปลี่ยนนามบัตร <span class='las la-exchange-alt'></span></button>" ."</a>";
                         ?>
                        </div>
                        <div class="flip-card1" ontouchstart="">
                        <div class="flip-card-inner1" ontouchstart="">
                            <figure class="flip-card-front1">
                                <img class="img-front1" src="./../../admin/image/templates/<?php echo $row['TemplateFrontImageSample']; ?>" width="250px" alt="">
                                <div style="text-align:left;" class="data-ft">
                                     <div class="data-ft">
                                            <p><?php  echo $TreeName .'/'. $TreeBreedName;?></p> <br>
                                            <img src="./../../admin/image/water_sunlight/<?php echo $row['TreeWaterImg'];?>" width="100px"> <br>
                                            <img src="./../../admin/image/water_sunlight/<?php echo $row['TreeSunLightImg'];?>" width="100px">
                                            <br>
                                            <p style="margin-top:18px;"><?php echo $age;?></p>
                                            <p><?php echo $TreeBirthdate;?></p>
                                        </div>
                                </div>
                            </figure>
                            <figure class="flip-card-back1">
                                <img class="img-back1" src="./../../admin/image/templates/<?php echo $row['TemplateBackImageSample']; ?>" width="250px" alt="">
                                <div class="data-bk1" ontouchend="imgWindows()" onclick="imgWindows()">
                                    <img src="../profileimg/ttag/<?php echo $row['TreePhoto']; ?>"  width="160px" height="160px" alt="">
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