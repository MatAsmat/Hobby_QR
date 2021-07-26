<meta charset="utf-8">
<?php
//condb
include('../../condb.php'); 

	$TreeName = $_POST["TreeName"];
	$TreeBirthdate = $_POST["TreeBirthdate"];
	$Ref_TreeBreedID = $_POST["Ref_TreeBreedID"];
	$Ref_TemplateID = $_POST["Ref_TemplateID"];
	$TreePhoto2 = $_POST["TreePhoto2"];
	$TreeID  = $_POST["TreeID"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$TreePhoto = (isset($_POST['TreePhoto']) ? $_POST['TreePhoto'] : '');
	$upload=$_FILES['TreePhoto']['name'];
	if($upload !='') { 
		$path="../profileimg/ttag/";
		$type = strrchr($_FILES['TreePhoto']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../profileimg/ttag/".$newname;
		move_uploaded_file($_FILES['TreePhoto']['tmp_name'],$path_copy);  
	}else{
		$newname=$TreePhoto2;
	}

	//update data 
	$sql = "UPDATE tbl_tree SET 
	TreeName='$TreeName',
	TreeBirthdate='$TreeBirthdate',
	Ref_TreeBreedID='$Ref_TreeBreedID',
	Ref_TemplateID='$Ref_TemplateID',
	TreePhoto='$newname'
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