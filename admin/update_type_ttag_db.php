<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

	$TreeBreedName = $_POST["TreeBreedName"];
	$TreeBreedCare = $_POST["TreeBreedCare"];
	$TreeBreedDisease = $_POST["TreeBreedDisease"];
	$TreeBreedWarning = $_POST["TreeBreedWarning"];
	$TreeBreedFertilize = $_POST["TreeBreedFertilize"];
	$TreeBreedPropagation = $_POST["TreeBreedPropagation"];
	$TreeWaterImg2 = $_POST["TreeWaterImg2"];
	$TreeSunLightImg2 = $_POST["TreeSunLightImg2"];
	$TreeBreedID  = $_POST["TreeBreedID"];
	$date = date("Ymd_His");
	$numrand = (mt_rand());
	$TreeWaterImg = (isset($_POST['TreeWaterImg']) ? $_POST['TreeWaterImg'] : '');
	$upload=$_FILES['TreeWaterImg']['name'];
	if($upload !='') { 
		$path="./image/water_sunlight/";
		$type = strrchr($_FILES['TreeWaterImg']['name'],".");
		$newname =$numrand.$date.$type;
		$path_copy=$path.$newname;
		$path_link="./image/water_sunlight/".$newname;
		move_uploaded_file($_FILES['TreeWaterImg']['tmp_name'],$path_copy);  
	}
	$date2 = date("Ymd_His");
	$numrand2 = (mt_rand());
	$TreeSunLightImg = (isset($_POST['TreeSunLightImg']) ? $_POST['TreeSunLightImg'] : '');
	$upload2=$_FILES['TreeSunLightImg']['name'];
	if($upload2 !='') { 
		$path2="./image/water_sunlight/";
		$type2 = strrchr($_FILES['TreeSunLightImg']['name'],".");
		$newname2 =$numrand2.$date2.$type;
		$path_copy2=$path2.$newname2;
		$path_link2="./image/water_sunlight/".$newname2;
		move_uploaded_file($_FILES['TreeSunLightImg']['tmp_name'],$path_copy2);  
}else{
	$newname=$TreeWaterImg2;
	$newname2=$TreeSunLightImg2;
}


	$sql = "UPDATE tbl_tree_breed SET 
	TreeBreedName='$TreeBreedName',
	TreeBreedCare='$TreeBreedCare',
	TreeBreedDisease='$TreeBreedDisease',
	TreeBreedWarning='$TreeBreedWarning',
	TreeBreedFertilize='$TreeBreedFertilize',
	TreeBreedPropagation='$TreeBreedPropagation',
	TreeWaterImg='$newname',
	TreeSunLightImg='$newname2'
	WHERE TreeBreedID=$TreeBreedID
	 ";


	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'table_type_ttag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'table_type_ttag.php'; ";
	echo "</script>";
}
?>