<meta charset="utf-8">
<?php
//condb
include('../../condb.php'); 

	$CatName = $_POST["CatName"];
	$CatBirthdate = $_POST["CatBirthdate"];
	$CatGender = $_POST["CatGender"];
	$CatBlood = $_POST["CatBlood"];
	$CatCoatColor = $_POST["CatCoatColor"];
	$CatPersonality = $_POST["CatPersonality"];
	$Ref_CatBreedID = $_POST["Ref_CatBreedID"];
	$Ref_TemplateID = $_POST["Ref_TemplateID"];
	$CatPhoto2 = $_POST["CatPhoto2"];
	$CatID  = $_POST["CatID"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$CatPhoto = (isset($_POST['CatPhoto']) ? $_POST['CatPhoto'] : '');
	$upload=$_FILES['CatPhoto']['name'];
	if($upload !='') { 
		$path="../profileimg/ctag/";
		$type = strrchr($_FILES['CatPhoto']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../profileimg/ctag/".$newname;
		move_uploaded_file($_FILES['CatPhoto']['tmp_name'],$path_copy);  
	}else{
		$newname=$CatPhoto2;
	}

	//update data 
	$sql = "UPDATE tbl_cat SET 
	CatName='$CatName',
	CatBirthdate='$CatBirthdate',
	CatGender='$CatGender',
	CatBlood='$CatBlood',
	CatCoatColor='$CatCoatColor',
	CatPersonality='$CatPersonality',
	Ref_CatBreedID='$Ref_CatBreedID',
	Ref_TemplateID='$Ref_TemplateID',
	CatPhoto='$newname'
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