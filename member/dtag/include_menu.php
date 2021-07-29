<?php
session_start();

include('../../condb.php');

$OwnerID = $_SESSION['OwnerID'];
$Level = $_SESSION['Level'];

if ($Level != 'member') {
    Header("Location: ../../logout.php");
}


$sql = "
SELECT * 
FROM tbl_owner as o
WHERE o.OwnerID=$OwnerID";
$result = mysqli_query($condb, $sql) or die("Error in query: $sql " . mysqli_error());
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
        .flip-card1 {
            text-align: center;
            background-color: transparent;
            height: 500px;
            position: relative;
            perspective: 500px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .flip-card-inner1 {
            width: 100%;
		    height: 100%;
		    position: absolute;
		    transform-style: preserve-3d;
		    transform-origin: center;
		    transition: transform 1s;
        }

        .flip-card1:hover .flip-card-inner1,.flip-card1:focus .flip-card-inner1 {
            transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            z-index: 998;
        }

        .flip-card-front1,
        .flip-card-back1 {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 998;
        }

        /* .flip-card-front {
    background-color: #fff;
  } */

        .flip-card-back1 {
            /* background-color: #fff; */
            transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);

        }

        /* .data-template {
    position: absolute;
  }

  .data-text {
    position: absolute;
  } */

        .img-front1 {
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: -1;
        }

        .img-back1 {
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: -1;

        }

        .data-ft {
            position: absolute;
            /* top: 110px;
  left: 60px; */
            white-space: nowrap;
            bottom: 145px;
            left: 110px;
            font-size: 14px;
            line-height: 120%;
            /* transform: translate(-50%, -50%);  */
            z-index: -1;
        }

        .data-bk {
            position: absolute;
            /* transform: translate(-50%, -50%); */
            z-index: 999;
      
        }

        .data-bk1 {
        padding-left:25%;
        padding-top:105%;
        /* width:160px; 
        height:160px; */
        }

        .data-left {}

        .data-right {}

   
    </style>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>
                <pan class="las la-qrcode"></pan> <span>HobbyQr</span>
            </h2>
        </div>

        <div class="sidebar-menu">
            <ul>

                <li>
                    <a href="../index.php"><span class="las la-igloo"></span>
                        <span>หน้าหลัก</span></a>
                </li>
                <li>
                    <a class="active"><span class="las la-dog"></span>
                        <span>ดูข้อมูลสุนัขทั่วไป</span></a>
                </li>

                <li>
                    <a href="info_body.php"><span class="las la-bookmark"></span>
                        <span>กายวิภาคสุนัข</span></a>
                </li>
                <li>
                    <a href="info_ave_age.php"><span class="las la-bookmark"></span>
                        <span>อายุเฉลี่ยสุนัข</span></a>
                </li>
                <li>
                    <a href="info_supplies.php"><span class="las la-bookmark"></span>
                        <span>อุปกรณ์ในการเลี้ยงสุนัข</span></a>
                </li>
                <li>
                    <a href="info_communicate.php"><span class="las la-bookmark"></span>
                        <span>การสื่อสารเบื้องต้นของสุนัข</span></a>
                </li>
                <li>
                    <a href="info_treat.php"><span class="las la-bookmark"></span>
                        <span>การเลี้ยงดูสุนัขเบื้องต้น</span></a>
                </li>
                <li>
                    <a href="info_cleaning.php"><span class="las la-bookmark"></span>
                        <span>การทำความสะอาดสุนัข</span></a>
                </li>
                <li>
                    <a href="info_diseases.php"><span class="las la-bookmark"></span>
                        <span>โรคต่างๆของสุนัข</span></a>
                </li>
                <li>
                    <a href="info_questions.php"><span class="las la-bookmark"></span>
                        <span>คำถามที่พบบ่อย</span></a>
                </li>
                <li>
                    <a href="info_vaccine.php"><span class="las la-bookmark"></span>
                        <span>ตารางการให้วัดซีนของสุนัข</span></a>
                </li>
                <li>
                    <a href="info_sickness.php"><span class="las la-bookmark"></span>
                        <span>ข้อสังเกตสุนัขเมื่อป่วย</span></a>
                </li>
                <li>
                    <a href="info_choose_food.php"><span class="las la-bookmark"></span>
                        <span>เลือกอาหารสุนัขให้เหมาะกับวัย</span></a>
                </li>
                <li>
                    <a href="info_takecare.php"><span class="las la-bookmark"></span>
                        <span>ข้อควรระวังในการเลี้ยงสุนัข</span></a>
                </li>
                <li>
                    <a href="info_neuter.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการทำหมันสุนัข</span></a>
                </li>
                <li>
                    <a href="info_type_food.php"><span class="las la-bookmark"></span>
                        <span>ประเภทอาหารของสุนัข</span></a>
                </li>
                <li>
                    <a href="info_vaccine_program.php"><span class="las la-bookmark"></span>
                        <span>โปรแกรมวัคซีนในสุนัข</span></a>
                </li>
                <li>
                    <a href="../../logout.php"><span class="las la-home"></span>
                        <span>ออกจากระบบ</span></a>
                </li>
            </ul>
        </div>
    </div>