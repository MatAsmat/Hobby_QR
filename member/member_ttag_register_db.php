<meta charset="utf-8">
<?php
include('../condb.php'); 
	
	$TreeName = $_POST["TreeName"];
	$TreeBirthdate = $_POST["TreeBirthdate"];
	$Ref_TreeBreedID = $_POST["Ref_TreeBreedID"];
	$Ref_TemplateID = $_POST["Ref_TemplateID"];
	$Ref_QrCodeID = $_POST["Ref_QrCodeID"];
	$Ref_OwnerID = $_POST["Ref_OwnerID"];
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$TreePhoto = (isset($_POST['TreePhoto']) ? $_POST['TreePhoto'] : '');
	$upload=$_FILES['TreePhoto']['name'];
	if($upload !='') { 
		$path="./profileimg/ttag/";
		$type = strrchr($_FILES['TreePhoto']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="./profileimg/ttag/".$newname;
		move_uploaded_file($_FILES['TreePhoto']['tmp_name'],$path_copy);  
	}

    $sql2 = "INSERT INTO tbl_tree
	(
	TreeName,
	TreeBirthdate,
	Ref_TreeBreedID,
	Ref_TemplateID,
	Ref_QrCodeID,
	Ref_OwnerID,
    TreePhoto
	)
	VALUES
	(
	'$TreeName',
	'$TreeBirthdate',
	'$Ref_TreeBreedID',
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
		echo "window.location = 'profile_ttag.php?qrID=$Ref_QrCodeID'; ";
		echo "</script>";
		}else{
		echo "<script type='text/javascript'>";
		//echo "alert('Error!!');";
		echo "window.location = 'profile_ttag.php?qrID=$Ref_QrCodeID'; ";
		echo "</script>";
	   }
?>