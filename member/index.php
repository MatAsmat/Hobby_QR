<?php
include('include_menu.php');
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
                            <h2>ข้อมูลเจ้าของ</h2>
                            <!-- <button> แก้ไขข้อมูล<span class="las la-arrow-right"></span></button> -->
                            <?php 
                                echo "<a href='update_owner_profle.php'>"." <button>แก้ไขข้อมูล<span class='las la-arrow-right'></span></button>" ."</a>";
                            ?>
                            <!-- <a href="update_owner_profle.php">แก้ไขข้อมูล <span class="las la-arrow-right"></span></a> -->
                        </div>
                        <div class="card-body">
                        <div class="profile">
                                <div class="profile-info">
                                    <img src="./profileimg/owner/<?php echo $row['OwnerPhoto'];?>" width="250px" height="250px" alt="">
                                </div>
                                <div>
                                <h3> <span class="las la-user-circle"></span> <?php echo $Username;?></h3>
                                    <h3> <span class="las la-address-book"> <?php echo $FirstName.'  '.$LastName;?></h3>
                                    <p> <span class="las la-inbox"></span> <?php echo $Email;?></p>
                                    <p> <span class="las la-mobile"></span> <?php echo $Telephone;?></p>
                                    <p> <span class="lab la-line"></span> <?php echo $Line;?></p>
                                    <p> <span class="lab la-facebook-square"></span> <?php echo $Facebook;?></p>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="tags">
                    <div class="card">
                        <div class="card-header">
                            <h3>แท็กทั้งหมด</h3>
                            </span></button>
                        </div>
                        <div class="card-body">
                        <div style="text-align:center">
                            <img src="../images/icon/dog.png" alt="" width="49px">
                            <img src="../images/icon/cat.png" alt="" width="49px">
                            <img src="../images/icon/plant.png" alt="" width="49px">
                            <img src="../images/icon/bird.png" alt="" width="49px">
                            <img src="../images/icon/fish.png" alt="" width="49px">
                            <img src="../images/icon/heart.png" alt="" width="49px">
                        </div>
                        <?php 
                            $query = " SELECT * FROM tbl_owner as o
                            INNER JOIN tbl_dog as d ON d.Ref_OwnerID = o.OwnerID
                            INNER JOIN tbl_dog_breed as db ON d.Ref_DogBreedId = db.DogBreedID 
                            WHERE o.OwnerID=$OwnerID " or die("Error:" . mysqli_error());
                            $result = mysqli_query($condb, $query); 
                            // while($row = mysqli_fetch_array($result)) {
                            //     echo print_r($row);       // Print the entire row data
                            // }
                            while($row = mysqli_fetch_array($result)) { 
                                // echo print_r($row['DogID']);
                                // echo " / ";
                                // echo print_r($row['OwnerID']);
                                echo "<div class='customer'>";
                                    echo "<div class='info'>";
                                        echo "<a href='../member/dtag/profile_tag.php?ID=".$row['DogID']."'>"."<img  width='80px' height='80px' alt='imagetag' src='./profileimg/dtag/".$row['DogPhoto']."'>" ."</a>";
                                        echo "<div>
                                                <h4>".$row['DogName']."</h4>
                                                <small>".$row['DogBreedName']."</small>
                                            </div>
                                        ";
                                    echo "</div>";
                                    echo "<div class='contact'>
                                    <span class='las la-bell'></span>
                                    </div> ";
                                    echo "</div>";
                            }
            
                         ?>
                         <?php 
                            $query = " SELECT * FROM tbl_owner as o
                            INNER JOIN tbl_cat as d ON d.Ref_OwnerID = o.OwnerID
                            INNER JOIN tbl_cat_breed as db ON d.Ref_CatBreedId = db.CatBreedID 
                            WHERE o.OwnerID=$OwnerID " or die("Error:" . mysqli_error());
                            $result = mysqli_query($condb, $query); 
                            // while($row = mysqli_fetch_array($result)) {
                            //     echo print_r($row);       // Print the entire row data
                            // }
                            while($row = mysqli_fetch_array($result)) { 
                                // echo print_r($row['CatID']);
                                // echo " / ";
                                // echo print_r($row['OwnerID']);
                                echo "<div class='customer'>";
                                    echo "<div class='info'>";
                                        echo "<a href='../member/ctag/profile_tag.php?ID=".$row['CatID']."'>"."<img  width='80px' height='80px' alt='imagetag' src='./profileimg/ctag/".$row['CatPhoto']."'>" ."</a>";
                                        echo "<div>
                                                <h4>".$row['CatName']."</h4>
                                                <small>".$row['CatBreedName']."</small>
                                            </div>
                                        ";
                                    echo "</div>";
                                    echo "<div class='contact'>
                                    <span class='las la-bell'></span>
                                    </div> ";
                                    echo "</div>";
                            }
            
                         ?>

                           <?php 
                              $query = " SELECT * FROM tbl_owner as o
                              INNER JOIN tbl_tree as d ON d.Ref_OwnerID = o.OwnerID
                              INNER JOIN tbl_tree_breed as db ON d.Ref_TreeBreedId = db.TreeBreedID 
                              WHERE o.OwnerID=$OwnerID " or die("Error:" . mysqli_error());
                              $result = mysqli_query($condb, $query); 
                            // while($row = mysqli_fetch_array($result)) {
                            //     echo print_r($row);       // Print the entire row data
                            // }
                            while($row = mysqli_fetch_array($result)) { 
                                // echo print_r($row['TreeID']);
                                // echo " / ";
                                // echo print_r($row['OwnerID']);
                                echo "<div class='customer'>";
                                    echo "<div class='info'>";
                                        echo "<a href='../member/ttag/profile_tag.php?ID=".$row['TreeID']."'>"."<img  width='80px' height='80px' alt='imagetag' src='./profileimg/ttag/".$row['TreePhoto']."'>" ."</a>";
                                        echo "<div>
                                                <h4>".$row['TreeName']."</h4>
                                                <small>".$row['TreeBreedName']."</small>
                                            </div>
                                        ";
                                    echo "</div>";
                                    echo "<div class='contact'>
                                    <span class='las la-bell'></span>
                                    </div> ";
                                    echo "</div>";
                            }
                            
                            mysqli_close($condb);
                         ?>
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
