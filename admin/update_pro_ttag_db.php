<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

	$ProductName = $_POST["ProductName"];
	$ProductPrice = $_POST["ProductPrice"];
	$ProductCategory = $_POST["ProductCategory"];
	$ProductImage2 = $_POST["ProductImage2"];
	$ProductID  = $_POST["ProductID"];

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$ProductImage = (isset($_POST['ProductImage']) ? $_POST['ProductImage'] : '');
	$upload=$_FILES['ProductImage']['name'];
	if($upload !='') { 
		$path="./image/products/";
		$type = strrchr($_FILES['ProductImage']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="./image/products/".$newname;
		move_uploaded_file($_FILES['ProductImage']['tmp_name'],$path_copy);  
	}else{
		$newname=$ProductImage2;
	}

	$sql = "UPDATE tbl_products SET 
	ProductName='$ProductName',
	ProductPrice='$ProductPrice',
	ProductCategory='$ProductCategory',
	ProductImage='$newname'
	WHERE ProductID=$ProductID
	 ";


	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'table_pro_ttag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'table_pro_ttag.php'; ";
	echo "</script>";
}
?>