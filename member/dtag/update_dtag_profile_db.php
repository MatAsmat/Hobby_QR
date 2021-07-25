<meta charset="utf-8">
<?php
//condb
include('../../condb.php'); 

	$DogName = $_POST["DogName"];
	$DogBirthdate = $_POST["DogBirthdate"];
	$DogGender = $_POST["DogGender"];
	$DogBlood = $_POST["DogBlood"];
	$DogCoatColor = $_POST["DogCoatColor"];
	$DogPersonality = $_POST["DogPersonality"];
	$Ref_DogBreedID = $_POST["Ref_DogBreedID"];
	$Ref_TemplateID = $_POST["Ref_TemplateID"];
	$Ref_QrCodeID = $_POST["Ref_QrCodeID"];
	$Ref_OwnerID = $_POST["Ref_OwnerID"];
	$DogPhoto2 = $_POST["DogPhoto2"];
	$DogID  = $_POST["DogID"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$DogPhoto = (isset($_POST['DogPhoto']) ? $_POST['DogPhoto'] : '');
	$upload=$_FILES['DogPhoto']['name'];
	if($upload !='') { 
		$path="../profileimg/dtag/";
		$type = strrchr($_FILES['DogPhoto']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../profileimg/dtag/".$newname;
		move_uploaded_file($_FILES['DogPhoto']['tmp_name'],$path_copy);  
	}else{
		$newname=$DogPhoto2;
	}

	//update data 
	$sql = "UPDATE tbl_dog SET 
	DogName='$DogName',
	DogBirthdate='$DogBirthdate',
	DogGender='$DogGender',
	DogBlood='$DogBlood',
	DogCoatColor='$DogCoatColor',
	DogPersonality='$DogPersonality',
	Ref_DogBreedID='$Ref_DogBreedID',
	Ref_TemplateID='$Ref_TemplateID',
	Ref_QrCodeID='$Ref_QrCodeID',
	Ref_OwnerID='$Ref_OwnerID',
	DogPhoto='$newname'
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