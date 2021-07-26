<?php 
    include('../condb.php');
    if(isset($_POST['templateID'])){
        $param = $_POST['templateID'];
        $getTemplate = "SELECT TemplateID, 	TemplateFrontImageSample, TemplateBackImageSample FROM tbl_templates WHERE TemplateID = $param "  or die("Error:" . mysqli_error());
        $templateResults =  mysqli_query($condb, $getTemplate);
        $templateStatus = mysqli_fetch_row($templateResults);
        echo "$templateStatus[1]";
 }

 ?>