<?php 
session_start();

include('../../condb.php');

$OwnerID = $_SESSION['OwnerID'];
$Level = $_SESSION['Level'];

if($Level!='member'){
	Header("Location: ../../logout.php");
}


$sql = "
SELECT * 
FROM tbl_owner as o
WHERE o.OwnerID=$OwnerID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HobbyQr Member</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
.flip-card {
    background-color: transparent;
    width: 100%;
    height: 420px;
    perspective: 1000px;
  }
  
  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    /* box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); */
  }
  
  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }
  
  .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }
  
  /* .flip-card-front {
    background-color: #fff;
  } */
  
  .flip-card-back {
    /* background-color: #fff; */
    transform: rotateY(180deg);
  }

  /* .data-template {
    position: absolute;
  }

  .data-text {
    position: absolute;
  } */

  .img-front {
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
  }

  .img-back {
    position: absolute;
    right: 0px;
    top: 0px;
    z-index: -1;
  }

  .data-ft {
  position: absolute;
  top: 110px;
  left: 60px;
  text-align: center;
  font-size: 14px;
  line-height: 270%;
  /* transform: translate(-50%, -50%);  */
  }

  .data-bk {
  position: absolute;
  top: 40%;
  left: 65%;
  text-align: center;
  transform: translate(-50%, -50%); 
  }

  .data-left {

  }

  .data-right {
  }
    </style>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><pan class="las la-qrcode"></pan> <span>HobbyQr</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                <a href="../index.php" ><span class="las la-igloo"></span>
                    <span>หน้าหลัก</span></a>
                </li>
                <li>
                <a class="active"><span class="las la-seedling"></span>
                        <span>ดูข้อมูลต้นไม้ทั่วไป</span></a>
                </li>
               
                <li>
                    <a href="info_structure.php"><span class="las la-bookmark"></span>
                        <span>โครงสร้างของพืช</span></a>
                </li>
                <li>
                    <a href="info_potted_plant.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการปลูกต้นไม้กระถาง</span></a>
                </li>
                <li>
                    <a href="info_pot_plant.php"><span class="las la-bookmark"></span>
                        <span>กระถางหรือภาชนะปลูก</span></a>
                </li>
                <li>
                    <a href="info_pot_shape.php"><span class="las la-bookmark"></span>
                        <span>รูปทรงกระถางต้นไม้</span></a>
                </li>
                <li>
                    <a href="info_how_to_plant.php"><span class="las la-bookmark"></span>
                        <span>วิธีการปลูก</span></a>
                </li>
                <li>
                    <a href="info_fertilizing.php"><span class="las la-bookmark"></span>
                        <span>การให้ปุ๋ย</span></a>
                </li>
                <li>
                    <a href="info_watering.php"><span class="las la-bookmark"></span>
                        <span>การให้น้ำ</span></a>
                </li>
                <li>
                    <a href="info_soil_planter.php"><span class="las la-bookmark"></span>
                        <span>ดินหรือเครื่องปลูก</span></a>
                </li>
                <li>
                    <a href="info_tree_care.php"><span class="las la-bookmark"></span>
                        <span>การดูแลรักษาโดยทั่วไป</span></a>
                </li>
                <li>
                    <a href="info_preventing.php"><span class="las la-bookmark"></span>
                        <span>การป้องกันและกำจัดศัตรูพืช</span></a>
                </li>
                <li>
                    <a href="info_benefits_plant.php"><span class="las la-bookmark"></span>
                        <span>ประโยชน์ของไม้กระถาง</span></a>
                </li>
                <li>
                    <a href="../../logout.php"><span class="las la-home"></span>
                        <span>ออกจากระบบ</span></a>
                </li>
            </ul>
        </div>
    </div>
    
