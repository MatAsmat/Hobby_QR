<meta charset="utf-8">
<?php
//condb
include('../../condb.php'); 

	// $Ref_TreeBreedID = $_POST["Ref_TreeBreedID"];
	$Ref_TemplateID = $_POST["Ref_TemplateID"];
	$TreeID  = $_POST["TreeID"];

	$sql = "UPDATE tbl_tree SET 
	-- Ref_TreeBreedID='$Ref_TreeBreedID',
	Ref_TemplateID='$Ref_TemplateID'
	WHERE TreeID=$TreeID
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