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
                            <button> แก้ไขข้อมูล<span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="profile">
                                <div class="profile-info">
                                <a href="profile_tag.php">
                                    <img src="../profileimg/dtag/<?php echo $row['DogPhoto'];?>" width="250px" height="250px" alt="">
                                    </a>
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
                        <?php 
                            $query = " SELECT * FROM tbl_owner as o
                            INNER JOIN tbl_dog as d ON d.Ref_OwnerID = o.OwnerID 
                            INNER JOIN tbl_dog_breed as b ON d.Ref_DogBreedId = b.DogBreedID  " or die("Error:" . mysqli_error());
                            $result = mysqli_query($condb, $query); 
                            // while($row = mysqli_fetch_array($result)) {
                            //     echo print_r($row);       // Print the entire row data
                            // }
                            while($row = mysqli_fetch_array($result)) { 
                                echo print_r($row['DogID']);
                                echo "<div class='customer'>";
                                    echo "<div class='info'>";
                                        echo "<a href='../dtag/profile_tag.php?ID=".$row['DogID']."'>"."<img  width='80px' height='80px' alt='imagetag' src='../profileimg/dtag/".$row['DogPhoto']."'>" ."</a>";
                                        echo "<div>
                                                <h4>".$row['DogName']."</h4>
                                                <small>".$row['DogBreedName']."</small>
                                            </div>
                                        ";
                                    echo "</div>";
                                    echo "<div class='contact'>
                                    <span class='las la-eye'></span>
                                    </div> ";
                                    echo "</div>";
                            }
            
                         ?>
                           <?php 
                            $query = " SELECT * FROM tbl_owner as o
                            INNER JOIN tbl_cat as c ON c.Ref_OwnerID = o.OwnerID 
                            INNER JOIN tbl_cat_breed as y ON c.Ref_CatBreedId = y.CatBreedID  " or die("Error:" . mysqli_error());
                            $result = mysqli_query($condb, $query); 
                            // while($row = mysqli_fetch_array($result)) {
                            //     echo print_r($row);       // Print the entire row data
                            // }
                            while($row = mysqli_fetch_array($result)) { 
                                echo print_r($row['CatID']);
                                echo "<div class='customer'>";
                                    echo "<div class='info'>";
                                        echo "<a href='../ctag/profile_tag.php?ID=".$row['CatID']."'>"."<img  width='80px' height='80px' alt='imagetag' src='../profileimg/ctag/".$row['CatPhoto']."'>" ."</a>";
                                        echo "<div>
                                                <h4>".$row['CatName']."</h4>
                                                <small>".$row['CatBreedName']."</small>
                                            </div>
                                        ";
                                    echo "</div>";
                                    echo "<div class='contact'>
                                    <span class='las la-eye'></span>
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
