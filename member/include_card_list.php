<?php
include('./include_menu.php'); 
$query = "
SELECT COUNT(TemplateID) FROM tbl_templates WHERE TemplateCategory = 'DTag'" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);  

$query2 = "
SELECT COUNT(TemplateID) FROM tbl_templates WHERE TemplateCategory = 'CTag'" 
or die("Error:" . mysqli_error());
$result2 = mysqli_query($condb, $query2);  

$query3 = "
SELECT COUNT(TemplateID) FROM tbl_templates WHERE TemplateCategory = 'TTag'" 
or die("Error:" . mysqli_error());
$result3 = mysqli_query($condb, $query3);  

$query4 = "
SELECT COUNT(TemplateID) FROM tbl_templates" 
or die("Error:" . mysqli_error());
$result4 = mysqli_query($condb, $query4);  

?>
<div class="cards">
    <div class="card-single">
        <?php while($row = mysqli_fetch_array($result)) { ?>
        <div>
            <h1><?php echo $row['COUNT(TemplateID)'];?></h1>
            <span>นามบัตรสุนัข</span>
        </div>
        <?php } ?>
        <a href="all_template_dog.php">
        <div>
            <span class="las la-dog"></span>
        </div>
        </a>
    </div>
    <div class="card-single">
    <?php while($row = mysqli_fetch_array($result2)) { ?>
        <div>
            <h1><?php echo $row['COUNT(TemplateID)'];?></h1>
            <span>นามบัตรแมว</span>
        </div>
        <?php } ?>
        <a href="all_template_cat.php">
        <div>
                <span class="las la-cat"></span>
        </div>
        </a>
    </div>
    <div class="card-single">
    <?php while($row = mysqli_fetch_array($result3)) { ?>
        <div>
            <h1><?php echo $row['COUNT(TemplateID)'];?></h1>
            <span>นามบัตรต้นไม้</span>
        </div>
        <?php } ?>
        <a href="all_template_tree.php">
        <div>
                <span class="las la-seedling"></span>
        </div>
        </a>
    </div>
    <div class="card-single">
    <?php while($row = mysqli_fetch_array($result4)) { ?>
        <div>
            <h1><?php echo $row['COUNT(TemplateID)'];?></h1>
            <span>Limited Excusive</span>
        </div>
        <?php } ?>
        <a href="all_template_limited.php">
        <div>
            <span class="las la-id-card"></span>
        </div>
        </a>
    </div>
</div>