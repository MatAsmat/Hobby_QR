<meta charset="utf-8">
<?php
include('../condb.php'); 

	$TemplateName = $_POST["TemplateName"];
	$TemplatePrice = $_POST["TemplatePrice"];
	$TemplateCategory = $_POST["TemplateCategory"];
	$Ref_BreedID = $_POST["Ref_BreedID"];


    $date = date("Ymd_His");
	$numrand = (mt_rand());
	$TemplateFrontImage = (isset($_POST['TemplateFrontImage']) ? $_POST['TemplateFrontImage'] : '');
	$upload=$_FILES['TemplateFrontImage']['name'];
	if($upload !='') { 
		$path="./image/templates/";
		$type = strrchr($_FILES['TemplateFrontImage']['name'],".");
		$newname =$numrand.$date.$type;
		$path_copy=$path.$newname;
		$path_link="./image/templates/".$newname;
		move_uploaded_file($_FILES['TemplateFrontImage']['tmp_name'],$path_copy);  
	}
	$date2 = date("Ymd_His");
	$numrand2 = (mt_rand());
	$TemplateBackImage = (isset($_POST['TemplateBackImage']) ? $_POST['TemplateBackImage'] : '');
	$upload2=$_FILES['TemplateBackImage']['name'];
	if($upload2 !='') { 
		$path2="./image/templates/";
		$type2 = strrchr($_FILES['TemplateBackImage']['name'],".");
		$newname2 =$numrand2.$date2.$type;
		$path_copy2=$path2.$newname2;
		$path_link2="./image/templates/".$newname2;
		move_uploaded_file($_FILES['TemplateBackImage']['tmp_name'],$path_copy2);  
	}
	$date3 = date("Ymd_His");
	$numrand3 = (mt_rand());
	$TemplateFrontImageSample = (isset($_POST['TemplateFrontImageSample']) ? $_POST['TemplateFrontImageSample'] : '');
	$upload3=$_FILES['TemplateFrontImageSample']['name'];
	if($upload3 !='') { 
		$path3="./image/templates/";
		$type = strrchr($_FILES['TemplateFrontImageSample']['name'],".");
		$newname3 =$numrand3.$date3.$type;
		$path_copy3=$path3.$newname3;
		$path_link3="./image/templates/".$newname3;
		move_uploaded_file($_FILES['TemplateFrontImageSample']['tmp_name'],$path_copy3);  
	}
	$date4 = date("Ymd_His");
	$numrand4 = (mt_rand());
	$TemplateBackImageSample = (isset($_POST['TemplateBackImageSample']) ? $_POST['TemplateBackImageSample'] : '');
	$upload4=$_FILES['TemplateBackImageSample']['name'];
	if($upload4 !='') { 
		$path4="./image/templates/";
		$type = strrchr($_FILES['TemplateBackImageSample']['name'],".");
		$newname4 =$numrand4.$date4.$type;
		$path_copy4=$path4.$newname4;
		$path_link4="./image/templates/".$newname4;
		move_uploaded_file($_FILES['TemplateBackImageSample']['tmp_name'],$path_copy4);  
	}
	
	$sql = "INSERT INTO tbl_templates
	(
	TemplateName,
	TemplatePrice,
	TemplateCategory,
	TemplateFrontImage,
	TemplateBackImage,
	TemplateFrontImageSample,
	TemplateBackImageSample,
	Ref_BreedID
	)
	VALUES
	(
	'$TemplateName',
	'$TemplatePrice',
	'$TemplateCategory',
	'$newname',
	'$newname2',
	'$newname3',
	'$newname4',
	'$Ref_BreedID'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'table_tem_ttag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'table_tem_ttag.php'; ";
	echo "</script>";
}
?>

