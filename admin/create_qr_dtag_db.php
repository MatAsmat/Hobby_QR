<meta charset="utf-8">
<?php
include('../condb.php'); 

$QrCodeName = $_POST["QrCodeName"];
$QRStatus = $_POST["QRStatus"];
$Ref_ProductID = $_POST["Ref_ProductID"];

	$check = "
	SELECT  QrCodeName 
	FROM tbl_qrcode
	WHERE QrCodeName = '$QrCodeName' 
	";
    $result1 = mysqli_query($condb, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

	if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

	$sql = "INSERT INTO tbl_qrcode
	(
	QrCodeName,
	Ref_ProductID,
	QRStatus
	)
	VALUES
	(
	'$QrCodeName',
	'$Ref_ProductID',
	'$QRStatus'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
}
	mysqli_close($condb);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'table_qr_dtag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'table_qr_dtag.php'; ";
	echo "</script>";
}
?>