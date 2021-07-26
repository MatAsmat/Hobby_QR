<meta charset="utf-8">
<?php
//condb
include('../../condb.php'); 

	$Ref_CatBreedID = $_POST["Ref_CatBreedID"];
	$Ref_TemplateID = $_POST["Ref_TemplateID"];
	$CatID  = $_POST["CatID"];

	$sql = "UPDATE tbl_cat SET 
	Ref_CatBreedID='$Ref_CatBreedID',
	Ref_TemplateID='$Ref_TemplateID'
	WHERE CatID=$CatID
	 ";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = '../index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = '../index.php'; ";
	echo "</script>";
}
?>