<meta charset="utf-8">
<?php
include('../condb.php'); 

$TreeBreedName = $_POST["TreeBreedName"];
$TreeBreedCare = $_POST["TreeBreedCare"];
$TreeBreedDisease = $_POST["TreeBreedDisease"];
$TreeBreedWarning = $_POST["TreeBreedWarning"];
$TreeBreedFertilize = $_POST["TreeBreedFertilize"];
$TreeBreedPropagation = $_POST["TreeBreedPropagation"];
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
}

	$check = "
	SELECT  TreeBreedName 
	FROM tbl_tree_breed
	WHERE TreeBreedName = '$TreeBreedName' 
	";
    $result1 = mysqli_query($condb, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

	if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

	$sql = "INSERT INTO tbl_tree_breed
	(
	TreeBreedName,
	TreeBreedCare,
	TreeBreedDisease,
	TreeBreedWarning,
	TreeBreedFertilize,
	TreeBreedPropagation,
	TreeWaterImg,
	TreeSunLightImg
	)
	VALUES
	(
	'$TreeBreedName',
	'$TreeBreedCare',
	'$TreeBreedDisease',
	'$TreeBreedWarning',
	'$TreeBreedFertilize',
	'$TreeBreedPropagation',
	'$newname',
	'$newname2'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
}
	mysqli_close($condb);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'table_type_ttag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'table_type_ttag.php'; ";
	echo "</script>";
}
?>