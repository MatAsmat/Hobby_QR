<meta charset="utf-8">
<?php
include('../../condb.php'); 

	$Note = $_POST["Note"];
	$Ref_TreeID = $_POST["Ref_TreeID"];
	$Ref_OwnerID = $_POST["Ref_OwnerID"];
	
	$sql = "INSERT INTO tbl_member_tree_note
	(
	Note,
	Ref_TreeID,
	Ref_OwnerID
	)
	VALUES
	(
	'$Note',
	'$Ref_TreeID',
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

