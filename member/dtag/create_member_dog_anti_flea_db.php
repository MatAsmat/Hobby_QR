<meta charset="utf-8">
<?php
include('../../condb.php'); 

	$AntiFleaDate = $_POST["AntiFleaDate"];
	$Ref_DogID = $_POST["Ref_DogID"];
	$Ref_OwnerID = $_POST["Ref_OwnerID"];
	
	$sql = "INSERT INTO tbl_member_dog_anti_flea
	(
	AntiFleaDate,
	Ref_DogID,
	Ref_OwnerID
	)
	VALUES
	(
	'$AntiFleaDate',
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

