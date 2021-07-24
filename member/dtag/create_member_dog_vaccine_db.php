<meta charset="utf-8">
<?php
include('../../condb.php'); 

	$ProtectType = $_POST["ProtectType"];
	$ProductCode = $_POST["ProductCode"];
	$InjectDate = $_POST["InjectDate"];
	$NextDate = $_POST["NextDate"];
	$Ref_DogID = $_POST["Ref_DogID"];
	$Ref_OwnerID = $_POST["Ref_OwnerID"];
	
	$sql = "INSERT INTO tbl_member_dog_vaccine
	(
	ProtectType,
	ProductCode,
	InjectDate,
	NextDate,
	Ref_DogID,
	Ref_OwnerID
	)
	VALUES
	(
	'$ProtectType',
	'$ProductCode',
	'$InjectDate',
	'$NextDate',
	'$Ref_DogID',
	'$Ref_OwnerID'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($condb);
	
	if($result){
		echo "<script type='text/javascript'>";
		echo "alert('เพิ่มข้อมูลสำเร็จ');";
		echo "window.history.back();";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('Error!!');";
		echo "window.history.back();";
		echo "</script>";
	}
?>

