<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

	$FirstName = $_POST["FirstName"];
	$LastName = $_POST["LastName"];
	$Email = $_POST["Email"];
	$Telephone = $_POST["Telephone"];
	$Line = $_POST["Line"];
	$Facebook = $_POST["Facebook"];
	$Level = $_POST["Level"];
	$OwnerPhoto2 = $_POST["OwnerPhoto2"];
	$OwnerID  = $_POST["OwnerID"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$OwnerPhoto = (isset($_POST['OwnerPhoto']) ? $_POST['OwnerPhoto'] : '');
	$upload=$_FILES['OwnerPhoto']['name'];
	if($upload !='') { 
		$path="./profileimg/owner/";
		$type = strrchr($_FILES['OwnerPhoto']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="./profileimg/owner/".$newname;
		move_uploaded_file($_FILES['OwnerPhoto']['tmp_name'],$path_copy);  
	}else{
		$newname=$OwnerPhoto2;
	}

	//update data 
	$sql = "UPDATE tbl_owner SET 
	FirstName='$FirstName',
	LastName='$LastName',
	Email='$Email',
	Telephone='$Telephone',
	Line='$Line',
	Facebook='$Facebook',
	Level='$Level',
	OwnerPhoto='$newname'
	WHERE OwnerID=$OwnerID
	 ";


	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}
?>