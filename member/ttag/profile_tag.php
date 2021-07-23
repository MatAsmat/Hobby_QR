<?php  
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_tree as t
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
                            <button> แก้ไขข้อมูล <span class="las la-edit"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                    <div class="profile-info">
                                        <img src="../profileimg/ttag/<?php echo $row['TreePhoto'];?>" width="250px" height="250px" alt="">
                                    </div>
                                    <div>
                                        <h3><span class="las la-user-circle"></span> ชื่อต้นไม้: <?php echo $TreeName;?></h3>
                                        <p><span class="las la-chevron-circle-right"></span> ชื่อพันธุ์ : <?php echo $TreeBreedName;?></p>
                                        <div class="firstline">
                                        <p><span class="las la-chevron-circle-right"></span> การดูแลเบื้องต้น : <?php echo $TreeBreedCare;?></p>
                                        </div>
                                    </div>
                            </div>
                         </div>
                         <div class="card-header">
                         <?php 
                                echo "<a href='./info_breed.php?ID=".$row['TreeID']."'>"." <button>ดูข้อมูลเกี่ยวกับพันธุ์ <span class='lab la-readme'></span></button>" ."</a>";
                                echo "<a href='./create_info_ttag.php?ID=".$row['TreeID']."'>"." <button>บันทึกข้อมูลสัตว์เลี้ยง <span class='lab la-save'></span></button>" ."</a>";
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
                                        <div class="data-ft">
                                                <p><?php  echo $TreeName;?></p>  
                                                <p><?php echo $TreeBreedName;?></p>
                                                <p><?php echo $TreeBreedName;?></p>
                                        </div>
                                </div>
                                <div class="flip-card-back">
                                <img class="img-back" src="./../../admin/image/templates/<?php echo $row['TemplateBackImageSample'];?>" width="250px"  alt="template">
                                <div class="data-bk">
                                <img src="../profileimg/ttag/<?php echo $row['TreePhoto'];?>" width="100px"  alt="template">
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
