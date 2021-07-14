<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

	$CatBreedName = $_POST["CatBreedName"];
	$CatBreedPersonality = $_POST["CatBreedPersonality"];
	$CatBreedCharacter = $_POST["CatBreedCharacter"];
	$CatBreedCare = $_POST["CatBreedCare"];
	$CatBreedHerdsman = $_POST["CatBreedHerdsman"];
	$CatBreedHealthIssues = $_POST["CatBreedHealthIssues"];
	$CatBreedNutrients = $_POST["CatBreedNutrients"];
	$CatBreedID  = $_POST["CatBreedID"];

	$sql = "UPDATE tbl_cat_breed SET 
	CatBreedName='$CatBreedName',
	CatBreedPersonality='$CatBreedPersonality',
	CatBreedCharacter='$CatBreedCharacter',
	CatBreedCare='$CatBreedCare',
	CatBreedHerdsman='$CatBreedHerdsman',
	CatBreedHealthIssues='$CatBreedHealthIssues',
	CatBreedNutrients='$CatBreedNutrients'
	WHERE CatBreedID=$CatBreedID
	 ";


	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'table_type_ctag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'table_type_ctag.php'; ";
	echo "</script>";
}
?>