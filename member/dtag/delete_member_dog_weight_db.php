<meta charset="utf-8">
<?php
include('../../condb.php');

if(isset($_POST['deletedata'])) {
    
    $DogWeightID = $_POST['delete_id'];

    $query = "DELETE FROM  tbl_member_dog_weight WHERE DogWeightID ='$DogWeightID'";
    $result = mysqli_query($condb, $query);

    if($result){
		echo "<script type='text/javascript'>";
		echo "alert('ลบข้อมูลสำเร็จ');";
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