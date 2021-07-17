<?php  
include('./include_menu.php'); 

$ID = $_GET['ID'];
$sql = "
SELECT * FROM tbl_dog as d
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
                            <button> แก้ไขข้อมูล <span class="las la-edit"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                    <div class="profile-info">
                                        <img src="../assets/img/profile/prodog1.jpg" width="250px" height="250px" alt="">
                                    </div>
                                    <div>
                                        <h3><span class="las la-user-circle"></span> ชื่อสัตว์เลี้ยง: <?php echo $DogName;?></h3>
                                        <p><span class="las la-chevron-circle-right"></span> ชื่อพันธุ์ : <?php echo $DogBreedName;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> ลักษณะภายนอก : <?php echo $DogBreedCharacter;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> นิสัย : <?php echo $DogBreedPersonality;?></p>
                                        <p><span class="las la-chevron-circle-right"></span> ข้อควรระวัง : <?php echo $DogBreedNutrients;?></p>
                                    </div>
                            </div>
                         </div>
                         <div class="card-header">
                             <a href="info_breed.php">
                            <button>ดูข้อมูลเกี่ยวกับพันธุ์ <span class="lab la-readme"></span></button>
                            </a>
                            <a href="create_info_dtag.php">
                            <button>บันทึกข้อมูลสัตว์เลี้ยง <span class="las la-save"></span></button>
                            </a>
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
                                <img src="../assets/img/template/d1.png" width="250px" alt="">
                                </div>
                                <div class="flip-card-back">
                                <img src="../assets/img/template/d2.png" width="250px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
           include('include_card_list.php');
            ?>
        </main>
    </div>
    </body>
</html>
