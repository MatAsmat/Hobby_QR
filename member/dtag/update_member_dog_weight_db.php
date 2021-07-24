<meta charset="utf-8">
<?php
//condb
include('../../condb.php'); 

	if(isset($_POST['updatedata'])) {

	$DogWeightDate = $_POST["DogWeightDate"];
	$DogWeight = $_POST["DogWeight"];
	$DogWeightID  = $_POST["DogWeightID"];

	$sql = "UPDATE tbl_member_dog_weight SET 
	DogWeightDate='$DogWeightDate',
	DogWeight='$DogWeight'
	WHERE DogWeightID=$DogWeightID
	 ";


	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($condb);
	
	if($result){
		echo "<script type='text/javascript'>";
		echo "alert('เพิ่มข้อมูลสำเร็จ');";
		echo "window.history.back();";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "alert('Error!!');";
		echo "window.history.back();";
		echo "</script>";
	}
}
?>