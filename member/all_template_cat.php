<?php
include('./include_menu.php'); 
$query = "
SELECT COUNT(suppurude_id) FROM tbl_suppurude WHERE status_quo = 'ยังอยู่'" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);  

?>
<?php
include('include_menu.php');
?>
        <div class="main-content">
            <?php
            include('include_header.php');
            ?>
            <main>
            <div class="card-head">
                <h1>นามบัตรแมว</h1>
                <?php
                    include('include_card_menu.php');
                ?>
            </div>
                <div class="cards">
                  
                <?php 
                              $query = " SELECT * FROM tbl_templates WHERE TemplateCategory='Ctag' " or die("Error:" . mysqli_error());
                              $result = mysqli_query($condb, $query); 
                          
                            while($row = mysqli_fetch_array($result)) { 
                                // echo print_r($row['TemplateID']);
                                    echo "<div class='template'>";
                                         echo "<div class='flip-card'>";
                                              echo "<div class='flip-card-inner'>";
                                                 echo "<div class='flip-card-front'>
                                                        <img  width='250px' alt='imagetag' src='./../admin/image/templates/".$row['TemplateFrontImageSample']."'>
                                                       </div>";
                                                 echo "<div class='flip-card-back'>
                                                    <img  width='250px' alt='imagetag' src='./../admin/image/templates/".$row['TemplateBackImageSample']."'>
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
                </div>
            </main>
        </div>
    </body>
</html>
