<meta charset="utf-8">
<?php
include('../../condb.php'); 

	$ProtectType = $_POST["ProtectType"];
	$ProductCode = $_POST["ProductCode"];
	$InjectDate = $_POST["InjectDate"];
	$NextDate = $_POST["NextDate"];
	$Ref_CatID = $_POST["Ref_CatID"];
	$Ref_OwnerID = $_POST["Ref_OwnerID"];
	
	$sql = "INSERT INTO tbl_member_cat_vaccine
	(
	ProtectType,
	ProductCode,
	InjectDate,
	NextDate,
	Ref_CatID,
	Ref_OwnerID
	)
	VALUES
	(
	'$ProtectType',
	'$ProductCode',
	'$InjectDate',
	'$NextDate',
	'$Ref_CatID',
	'$Ref_OwnerID'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = '../index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = '../index.php'; ";
	echo "</script>";
}
?>

