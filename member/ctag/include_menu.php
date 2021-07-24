<!-- <?php 
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

 ?> -->
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

  .data-front {
  position: absolute;
  top: 262px;
  left: 30px;
  font-size: 14px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  line-height: 280%;
  }

  .data-back {
  position: absolute;
  top: 55%;
  left: 65%;
  transform: translate(-50%, -50%); 
  }

  .data-left {
    
  }

  .data-right {
  }

  .customer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: .5rem .7rem;
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
    margin: 5px;
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
                <a class="active"><span class="las la-cat"></span>
                        <span>ดูข้อมูลแมวทั่วไป</span></a>
                </li>
               
                <li>
                    <a href="info_body.php"><span class="las la-bookmark"></span>
                        <span>กายวิภาคแมว</span></a>
                </li>
                <li>
                    <a href="info_ave_age.php"><span class="las la-bookmark"></span>
                        <span>อายุเฉลี่ยแมว</span></a>
                </li>
                <li>
                    <a href="info_supplies.php"><span class="las la-bookmark"></span>
                        <span>อุปกรณ์ในการเลี้ยงแมว</span></a>
                </li>
                <li>
                    <a href="info_communicate.php"><span class="las la-bookmark"></span>
                        <span>การสื่อสารเบื้องต้นของแมว</span></a>
                </li>
                <li>
                    <a href="info_treat.php"><span class="las la-bookmark"></span>
                        <span>การเลี้ยงดูแมวเบื้องต้น</span></a>
                </li>
                <li>
                    <a href="info_cleaning.php"><span class="las la-bookmark"></span>
                        <span>การทำความสะอาดแมว</span></a>
                </li>
                <li>
                    <a href="info_diseases.php"><span class="las la-bookmark"></span>
                        <span>โรคต่างๆของแมว</span></a>
                </li>
                <li>
                    <a href="info_questions.php"><span class="las la-bookmark"></span>
                        <span>คำถามที่พบบ่อย</span></a>
                </li>
                <li>
                    <a href="info_vaccine.php"><span class="las la-bookmark"></span>
                        <span>ตารางการให้วัดซีนของแมว</span></a>
                </li>
                <li>
                    <a href="info_sickness.php"><span class="las la-bookmark"></span>
                        <span>ข้อสังเกตแมวเมื่อป่วย</span></a>
                </li>
                <li>
                    <a href="info_choose_food.php"><span class="las la-bookmark"></span>
                        <span>เลือกอาหารแมวให้เหมาะกับวัย</span></a>
                </li>
                <li>
                    <a href="info_takecare.php"><span class="las la-bookmark"></span>
                        <span>ข้อควรระวังในการเลี้ยงแมว</span></a>
                </li>
                <li>
                    <a href="info_neuter.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการทำหมันแมว</span></a>
                </li>
                <li>
                    <a href="info_type_food.php"><span class="las la-bookmark"></span>
                        <span>ประเภทอาหารของแมว</span></a>
                </li>
                <li>
                    <a href="info_healthy.php"><span class="las la-bookmark"></span>
                        <span>แมวที่มีสุขภาพดี</span></a>
                </li>
                <li>
                    <a href="info_fur_style.php"><span class="las la-bookmark"></span>
                        <span>ลักษณะขนของแมว</span></a>
                </li>
                <li>
                    <a href="info_intro.php"><span class="las la-bookmark"></span>
                        <span>แนะนำแมวเข้าสู่บ้านใหม่</span></a>
                </li>
                <li>
                    <a href="info_pamper.php"><span class="las la-bookmark"></span>
                        <span>วิธีเอาใจแมว</span></a>
                </li>
                <li>
                    <a href="info_raise.php"><span class="las la-bookmark"></span>
                        <span>เลี้ยงแมวให้มีความสุข</span></a>
                </li>
                <li>
                    <a href="info_hangout.php"><span class="las la-bookmark"></span>
                        <span>ห้างพาแมวเที่ยวเล่น</span></a>
                </li>
                <li>
                    <a href="../../logout.php"><span class="las la-home"></span>
                        <span>ออกจากระบบ</span></a>
                </li>
            </ul>
        </div>
    </div>
    
