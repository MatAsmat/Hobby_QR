<meta charset="utf-8">
<?php
include('../condb.php'); 

$CatBreedName = $_POST["CatBreedName"];
$CatBreedPersonality = $_POST["CatBreedPersonality"];
$CatBreedCharacter = $_POST["CatBreedCharacter"];
$CatBreedCare = $_POST["CatBreedCare"];
$CatBreedHerdsman = $_POST["CatBreedHerdsman"];
$CatBreedHealthIssues = $_POST["CatBreedHealthIssues"];
$CatBreedNutrients = $_POST["CatBreedNutrients"];

	$check = "
	SELECT  CatBreedName 
	FROM tbl_cat_breed
	WHERE CatBreedName = '$CatBreedName' 
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

	$sql = "INSERT INTO tbl_cat_breed
	(
	CatBreedName,
	CatBreedPersonality,
	CatBreedCharacter,
	CatBreedCare,
	CatBreedHerdsman,
	CatBreedHealthIssues,
	CatBreedNutrients
	)
	VALUES
	(
	'$CatBreedName',
	'$CatBreedPersonality',
	'$CatBreedCharacter',
	'$CatBreedCare',
	'$CatBreedHerdsman',
	'$CatBreedHealthIssues',
	'$CatBreedNutrients'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
}
	mysqli_close($condb);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'table_type_ctag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'table_type_ctag.php'; ";
	echo "</script>";
}
?>