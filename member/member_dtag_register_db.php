<meta charset="utf-8">
<?php
include('../condb.php'); 
    // ===========================

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
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$DogPhoto = (isset($_POST['DogPhoto']) ? $_POST['DogPhoto'] : '');
	$upload=$_FILES['DogPhoto']['name'];
	if($upload !='') { 
		$path="./profileimg/dtag/";
		$type = strrchr($_FILES['DogPhoto']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="./profileimg/dtag/".$newname;
		move_uploaded_file($_FILES['DogPhoto']['tmp_name'],$path_copy);  
	}

    $sql2 = "INSERT INTO tbl_dog
	(
	DogName,
	DogBirthdate,
	DogGender,
	DogBlood,
	DogCoatColor,
	DogPersonality,
	Ref_DogBreedID,
	Ref_TemplateID,
	Ref_QrCodeID,
	Ref_OwnerID,
    DogPhoto
	)
	VALUES
	(
	'$DogName',
	'$DogBirthdate',
	'$DogGender',
	'$DogBlood',
	'$DogCoatColor',
	'$DogPersonality',
	'$Ref_DogBreedID',
	'$Ref_TemplateID',
	'$Ref_QrCodeID',
	'$Ref_OwnerID',
    '$newname'
	)";
    $result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

	$sql3 = "UPDATE tbl_qrcode SET QRStatus='Yes' WHERE QrCodeName='$Ref_QrCodeID'";
	$result3 = mysqli_query($condb, $sql3) or die ("Error in query: $sql3 " . mysqli_error());
	//close chk duplicat Username

    mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'profile.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'profile.php'; ";
	echo "</script>";
}
?>