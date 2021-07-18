<?php
include('include_menu.php');
?>
        <div class="main-content">
            <?php
            include('include_header.php');
            ?>
            <main>
            <div class="card-head">
                <h1>นามบัตรต้นไม้</h1>
                <?php
                    include('include_card_menu.php');
                 ?>
            </div>
                <div class="cards">

                           <?php 
                              $query = " SELECT * FROM tbl_templates WHERE TemplateCategory='Ttag' " or die("Error:" . mysqli_error());
                              $result = mysqli_query($condb, $query); 
                          
                            while($row = mysqli_fetch_array($result)) { 
                                // echo print_r($row['TemplateID']);
                                    echo "<div class='template'>";
                                         echo "<div class='flip-card'>";
                                              echo "<div class='flip-card-inner'>";
                                                 echo "<div class='flip-card-front'>
                                                        <img  width='250px' alt='imagetag' src='./../../admin/image/templates/".$row['TemplateFrontImageSample']."'>
                                                       </div>";
                                                 echo "<div class='flip-card-back'>
                                                    <img  width='250px' alt='imagetag' src='./../../admin/image/templates/".$row['TemplateBackImageSample']."'>
                                                    </div>";
                                              echo "  </div>";
                                           echo " </div>";
                                             echo "   <div class='price'> ";
                                                    echo "<span>".$row['TemplateName']."</span>";
                                                   echo "<h1>".$row['TemplatePrice'].""."<span class='las la-shopping-bag'>"."</span> "."</h1>";
                                               echo " </div> ";
                                     echo " </div>";

                            }
                            
                            mysqli_close($condb);
                         ?>
                   <!-- <div class='template'>
                     <div class='flip-card'>"
                            <div class='flip-card-inner'>
                                <div class='flip-card-front'>
                                <img  width='80px' height='80px' alt='imagetag' src='./profileimg/ttag/".$row['TreePhoto']."'>
                                <img src="../assets/img/template/d5.png" width="250px" alt="">
                                </div>
                                <div class="flip-card-back">
                                <img src="../assets/img/template/d6.png" width="250px" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="price">
                            <span>ชื่อนามบัตร</span>
                            <h1>199  <span class="las la-shopping-bag"></span></h1>
                        </div>
                    </div> -->
                </div>
            </main>
        </div>
    </body>
</html>
