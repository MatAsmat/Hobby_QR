<meta charset="utf-8">
<?php
include('../condb.php'); 

	$ProductName = $_POST["ProductName"];
	$ProductPrice = $_POST["ProductPrice"];
	$ProductCategory = $_POST["ProductCategory"];

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
	}
	
	$sql = "INSERT INTO tbl_products
	(
	ProductName,
	ProductPrice,
	ProductCategory,
	ProductImage
	)
	VALUES
	(
	'$ProductName',
	'$ProductPrice',
	'$ProductCategory',
	'$newname'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'table_pro_ctag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'table_pro_ctag.php'; ";
	echo "</script>";
}
?>

