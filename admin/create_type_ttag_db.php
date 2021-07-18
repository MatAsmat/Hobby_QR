<meta charset="utf-8">
<?php
include('../condb.php'); 

$TreeBreedName = $_POST["TreeBreedName"];
$TreeBreedCare = $_POST["TreeBreedCare"];
$TreeBreedDisease = $_POST["TreeBreedDisease"];
$TreeBreedWarning = $_POST["TreeBreedWarning"];
$TreeBreedFertilize = $_POST["TreeBreedFertilize"];
$TreeBreedPropagation = $_POST["TreeBreedPropagation"];

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
	TreeBreedPropagation
	)
	VALUES
	(
	'$TreeBreedName',
	'$TreeBreedCare',
	'$TreeBreedDisease',
	'$TreeBreedWarning',
	'$TreeBreedFertilize',
	'$TreeBreedPropagation'
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