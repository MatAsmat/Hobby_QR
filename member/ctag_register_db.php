<meta charset="utf-8">
<?php
include('../condb.php'); 
	
	$Username = $_POST["Username"];
	$Password = md5($_POST["Password"]);
	$FirstName = $_POST["FirstName"];
	$LastName = $_POST["LastName"];
	$Email = $_POST["Email"];
	$Telephone = $_POST["Telephone"];
	$Line = $_POST["Line"];
	$Facebook = $_POST["Facebook"];
	$TagType = $_POST["TagType"];
    // ===========================

	$CatName = $_POST["CatName"];
	$CatBirthdate = $_POST["CatBirthdate"];
	$CatGender = $_POST["CatGender"];
	$CatBlood = $_POST["CatBlood"];
	$CatCoatColor = $_POST["CatCoatColor"];
	$CatPersonality = $_POST["CatPersonality"];
	$Ref_CatBreedID = $_POST["Ref_CatBreedID"];
	$Ref_TemplateID = $_POST["Ref_TemplateID"];
	$Ref_QrCodeID = $_POST["Ref_QrCodeID"];
	$Ref_OwnerID = $_POST["Ref_OwnerID"];
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$CatPhoto = (isset($_POST['CatPhoto']) ? $_POST['CatPhoto'] : '');
	$upload=$_FILES['CatPhoto']['name'];
	if($upload !='') { 
		$path="./profileimg/ctag/";
		$type = strrchr($_FILES['CatPhoto']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="./profileimg/ctag/".$newname;
		move_uploaded_file($_FILES['CatPhoto']['tmp_name'],$path_copy);  
	}

    $check = "
	SELECT Username 
	FROM tbl_owner  
	WHERE Username = '$Username' 
	";
    $results = mysqli_query($condb, $check) or die(mysqli_error());
    $num=mysqli_num_rows($results);

    if($num > 0)
    {
	    echo "<script>";
	    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
	    echo "window.history.back();";
	    echo "</script>";
    }else{

	$sql = "INSERT INTO tbl_owner
	(
	Username,
	Password,
	FirstName,
	LastName,
	Email,
	Telephone,
	Line,
	Facebook,
	TagType

	)
	VALUES
	(
	'$Username',
	'$Password',
	'$FirstName',
	'$LastName',
	'$Email',
	'$Telephone',
	'$Line',
	'$Facebook',
	'$TagType'
	)";
    $result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

    $sql2 = "INSERT INTO tbl_cat
	(
	CatName,
	CatBirthdate,
	CatGender,
	CatBlood,
	CatCoatColor,
	CatPersonality,
	Ref_CatBreedID,
	Ref_TemplateID,
	Ref_QrCodeID,
	Ref_OwnerID,
    CatPhoto
	)
	VALUES
	(
	'$CatName',
	'$CatBirthdate',
	'$CatGender',
	'$CatBlood',
	'$CatCoatColor',
	'$CatPersonality',
	'$Ref_CatBreedID',
	'$Ref_TemplateID',
	'$Ref_QrCodeID',
	'$Ref_OwnerID',
    '$newname'
	)";
    $result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

	$sql3 = "UPDATE tbl_qrcode SET QRStatus='Yes' WHERE QrCodeName='$Ref_QrCodeID'";
	$result3 = mysqli_query($condb, $sql3) or die ("Error in query: $sql3 " . mysqli_error());
	}//close chk duplicat Username

    mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'profile_ctag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'profile_ctag.php'; ";
	echo "</script>";
}
?>