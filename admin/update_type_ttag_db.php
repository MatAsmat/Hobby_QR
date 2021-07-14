<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

	$TreeBreedName = $_POST["TreeBreedName"];
	$TreeBreedCare = $_POST["TreeBreedCare"];
	$TreeBreedID  = $_POST["TreeBreedID"];

	$sql = "UPDATE tbl_tree_breed SET 
	TreeBreedName='$TreeBreedName',
	TreeBreedCare='$TreeBreedCare'
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