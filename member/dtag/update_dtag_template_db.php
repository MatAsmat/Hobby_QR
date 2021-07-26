<meta charset="utf-8">
<?php
//condb
include('../../condb.php'); 

	$Ref_DogBreedID = $_POST["Ref_DogBreedID"];
	$Ref_TemplateID = $_POST["Ref_TemplateID"];
	$DogID  = $_POST["DogID"];

	$sql = "UPDATE tbl_dog SET 
	Ref_DogBreedID='$Ref_DogBreedID',
	Ref_TemplateID='$Ref_TemplateID'
	WHERE DogID=$DogID
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