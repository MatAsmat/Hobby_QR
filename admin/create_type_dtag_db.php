<meta charset="utf-8">
<?php
include('../condb.php'); 

$DogBreedName = $_POST["DogBreedName"];
$DogBreedPersonality1 = $_POST["DogBreedPersonality1"];
$DogBreedPersonality2 = $_POST["DogBreedPersonality2"];
$DogBreedPersonality3 = $_POST["DogBreedPersonality3"];
$DogBreedPersonality4 = $_POST["DogBreedPersonality4"];
$DogBreedPersonality5 = $_POST["DogBreedPersonality5"];
$DogBreedPersonality6 = $_POST["DogBreedPersonality6"];
$DogBreedCharacter1 = $_POST["DogBreedCharacter1"];
$DogBreedCharacter2 = $_POST["DogBreedCharacter2"];
$DogBreedCharacter3 = $_POST["DogBreedCharacter3"];
$DogBreedCharacter4 = $_POST["DogBreedCharacter4"];
$DogBreedCharacter5 = $_POST["DogBreedCharacter5"];
$DogBreedCharacter6 = $_POST["DogBreedCharacter6"];
$DogBreedCare1 = $_POST["DogBreedCare1"];
$DogBreedCare2 = $_POST["DogBreedCare2"];
$DogBreedCare3 = $_POST["DogBreedCare3"];
$DogBreedCare4 = $_POST["DogBreedCare4"];
$DogBreedCare5 = $_POST["DogBreedCare5"];
$DogBreedCare6 = $_POST["DogBreedCare6"];
$DogBreedHerdsman1 = $_POST["DogBreedHerdsman1"];
$DogBreedHerdsman2 = $_POST["DogBreedHerdsman2"];
$DogBreedHerdsman3 = $_POST["DogBreedHerdsman3"];
$DogBreedHerdsman4 = $_POST["DogBreedHerdsman4"];
$DogBreedHerdsman5 = $_POST["DogBreedHerdsman5"];
$DogBreedHerdsman6 = $_POST["DogBreedHerdsman6"];
$DogBreedHealthIssues1 = $_POST["DogBreedHealthIssues1"];
$DogBreedHealthIssues2 = $_POST["DogBreedHealthIssues2"];
$DogBreedHealthIssues3 = $_POST["DogBreedHealthIssues3"];
$DogBreedHealthIssues4 = $_POST["DogBreedHealthIssues4"];
$DogBreedHealthIssues5 = $_POST["DogBreedHealthIssues5"];
$DogBreedHealthIssues6 = $_POST["DogBreedHealthIssues6"];
$DogBreedNutrients1 = $_POST["DogBreedNutrients1"];
$DogBreedNutrients2 = $_POST["DogBreedNutrients2"];
$DogBreedNutrients3 = $_POST["DogBreedNutrients3"];
$DogBreedNutrients4 = $_POST["DogBreedNutrients4"];
$DogBreedNutrients5 = $_POST["DogBreedNutrients5"];
$DogBreedNutrients6 = $_POST["DogBreedNutrients6"];

	$check = "
	SELECT  DogBreedName 
	FROM tbl_dog_breed
	WHERE DogBreedName = '$DogBreedName' 
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

	$sql = "INSERT INTO tbl_dog_breed
	(
	DogBreedName,
	DogBreedPersonality1,
	DogBreedPersonality2,
	DogBreedPersonality3,
	DogBreedPersonality4,
	DogBreedPersonality5,
	DogBreedPersonality6,
	DogBreedCharacter1,
	DogBreedCharacter2,
	DogBreedCharacter3,
	DogBreedCharacter4,
	DogBreedCharacter5,
	DogBreedCharacter6,
	DogBreedCare1,
	DogBreedCare2,
	DogBreedCare3,
	DogBreedCare4,
	DogBreedCare5,
	DogBreedCare6,
	DogBreedHerdsman1,
	DogBreedHerdsman2,
	DogBreedHerdsman3,
	DogBreedHerdsman4,
	DogBreedHerdsman5,
	DogBreedHerdsman6,
	DogBreedHealthIssues1,
	DogBreedHealthIssues2,
	DogBreedHealthIssues3,
	DogBreedHealthIssues4,
	DogBreedHealthIssues5,
	DogBreedHealthIssues6,
	DogBreedNutrients1,
	DogBreedNutrients2,
	DogBreedNutrients3,
	DogBreedNutrients4,
	DogBreedNutrients5,
	DogBreedNutrients6
	)
	VALUES
	(
	'$DogBreedName',
	'$DogBreedPersonality1',
	'$DogBreedPersonality2',
	'$DogBreedPersonality3',
	'$DogBreedPersonality4',
	'$DogBreedPersonality5',
	'$DogBreedPersonality6',
	'$DogBreedCharacter1',
	'$DogBreedCharacter2',
	'$DogBreedCharacter3',
	'$DogBreedCharacter4',
	'$DogBreedCharacter5',
	'$DogBreedCharacter6',
	'$DogBreedCare1',
	'$DogBreedCare2',
	'$DogBreedCare3',
	'$DogBreedCare4',
	'$DogBreedCare5',
	'$DogBreedCare6',
	'$DogBreedHerdsman1',
	'$DogBreedHerdsman2',
	'$DogBreedHerdsman3',
	'$DogBreedHerdsman4',
	'$DogBreedHerdsman5',
	'$DogBreedHerdsman6',
	'$DogBreedHealthIssues1',
	'$DogBreedHealthIssues2',
	'$DogBreedHealthIssues3',
	'$DogBreedHealthIssues4',
	'$DogBreedHealthIssues5',
	'$DogBreedHealthIssues6',
	'$DogBreedNutrients1',
	'$DogBreedNutrients2',
	'$DogBreedNutrients3',
	'$DogBreedNutrients4',
	'$DogBreedNutrients5',
	'$DogBreedNutrients6'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
}
	mysqli_close($condb);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'table_type_dtag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'table_type_dtag.php'; ";
	echo "</script>";
}
?>