<meta charset="utf-8">
<?php
include('../../condb.php'); 

	$DrugDate = $_POST["DrugDate"];
	$DrugType = $_POST["DrugType"];
	$Howto = $_POST["Howto"];
	$Duration = $_POST["Duration"];
	$Ref_CatID = $_POST["Ref_CatID"];
	$Ref_OwnerID = $_POST["Ref_OwnerID"];
	
	$sql = "INSERT INTO tbl_member_cat_drug_details
	(
	DrugDate,
	DrugType,
	Howto,
	Duration,
	Ref_CatID,
	Ref_OwnerID
	)
	VALUES
	(
	'$DrugDate',
	'$DrugType',
	'$Howto',
	'$Duration',
	'$Ref_CatID',
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

