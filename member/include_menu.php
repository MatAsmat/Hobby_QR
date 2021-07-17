<?php 
session_start();

include('../../condb.php');

$OwnerID = $_SESSION['OwnerID'];
$TagType = $_SESSION['TagType'];

if($TagType!='Dtag'){
	Header("Location: ../../logout.php");
}


$sql = "
SELECT * 
FROM tbl_dog as d 
INNER JOIN tbl_owner as o ON d.Ref_OwnerID=o.OwnerID 
INNER JOIN tbl_dog_breed as b ON d.Ref_DogBreedID=b.DogBreedID 
INNER JOIN tbl_templates as t ON d.Ref_TemplateID=t.TemplateID 
WHERE OwnerID=$OwnerID";
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
    <link rel="stylesheet" href="./assets/css/style.css">
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
                    <a href="index.php" ><span class="las la-igloo"></span>
                        <span>หน้าหลัก</span></a>
                </li>
                <li>
                <a class="active"><span class="las la-dog"></span>
                        <span>ดูข้อมูลสุนัขทั่วไป</span></a>
                </li>
               
                <li>
                    <a href="dtag/info_body.php"><span class="las la-bookmark"></span>
                        <span>กายวิภาคสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_ave_age.php"><span class="las la-bookmark"></span>
                        <span>อายุเฉลี่ยสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_supplies.php"><span class="las la-bookmark"></span>
                        <span>อุปกรณ์ในการเลี้ยงสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_communicate.php"><span class="las la-bookmark"></span>
                        <span>การสื่อสารเบื้องต้นของสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_treat.php"><span class="las la-bookmark"></span>
                        <span>การเลี้ยงดูสุนัขเบื้องต้น</span></a>
                </li>
                <li>
                    <a href="dtag/info_cleaning.php"><span class="las la-bookmark"></span>
                        <span>การทำความสะอาดสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_diseases.php"><span class="las la-bookmark"></span>
                        <span>โรคต่างๆของสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_questions.php"><span class="las la-bookmark"></span>
                        <span>คำถามที่พบบ่อย</span></a>
                </li>
                <li>
                    <a href="dtag/info_vaccine.php"><span class="las la-bookmark"></span>
                        <span>ตารางการให้วัดซีนของสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_sickness.php"><span class="las la-bookmark"></span>
                        <span>ข้อสังเกตสุนัขเมื่อป่วย</span></a>
                </li>
                <li>
                    <a href="dtag/info_choose_food.php"><span class="las la-bookmark"></span>
                        <span>เลือกอาหารสุนัขให้เหมาะกับวัย</span></a>
                </li>
                <li>
                    <a href="dtag/info_takecare.php"><span class="las la-bookmark"></span>
                        <span>ข้อควรระวังในการเลี้ยงสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_neuter.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการทำหมันสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_type_food.php"><span class="las la-bookmark"></span>
                        <span>ประเภทอาหารของสุนัข</span></a>
                </li>
                <li>
                    <a href="dtag/info_vaccine_program.php"><span class="las la-bookmark"></span>
                        <span>โปรแกรมวัคซีนในสุนัข</span></a>
                </li>
                <li>
                <a class="active"><span class="las la-cat"></span>
                        <span>ดูข้อมูลแมวทั่วไป</span></a>
                </li>
               
                <li>
                    <a href="ctag/info_body.php"><span class="las la-bookmark"></span>
                        <span>กายวิภาคแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_ave_age.php"><span class="las la-bookmark"></span>
                        <span>อายุเฉลี่ยแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_supplies.php"><span class="las la-bookmark"></span>
                        <span>อุปกรณ์ในการเลี้ยงแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_communicate.php"><span class="las la-bookmark"></span>
                        <span>การสื่อสารเบื้องต้นของแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_treat.php"><span class="las la-bookmark"></span>
                        <span>การเลี้ยงดูแมวเบื้องต้น</span></a>
                </li>
                <li>
                    <a href="ctag/info_cleaning.php"><span class="las la-bookmark"></span>
                        <span>การทำความสะอาดแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_diseases.php"><span class="las la-bookmark"></span>
                        <span>โรคต่างๆของแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_questions.php"><span class="las la-bookmark"></span>
                        <span>คำถามที่พบบ่อย</span></a>
                </li>
                <li>
                    <a href="ctag/info_vaccine.php"><span class="las la-bookmark"></span>
                        <span>ตารางการให้วัดซีนของแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_sickness.php"><span class="las la-bookmark"></span>
                        <span>ข้อสังเกตแมวเมื่อป่วย</span></a>
                </li>
                <li>
                    <a href="ctag/info_choose_food.php"><span class="las la-bookmark"></span>
                        <span>เลือกอาหารแมวให้เหมาะกับวัย</span></a>
                </li>
                <li>
                    <a href="ctag/info_takecare.php"><span class="las la-bookmark"></span>
                        <span>ข้อควรระวังในการเลี้ยงแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_neuter.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการทำหมันแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_type_food.php"><span class="las la-bookmark"></span>
                        <span>ประเภทอาหารของแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_healthy.php"><span class="las la-bookmark"></span>
                        <span>แมวที่มีสุขภาพดี</span></a>
                </li>
                <li>
                    <a href="ctag/info_fur_style.php"><span class="las la-bookmark"></span>
                        <span>ลักษณะขนของแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_intro.php"><span class="las la-bookmark"></span>
                        <span>แนะนำแมวเข้าสู่บ้านใหม่</span></a>
                </li>
                <li>
                    <a href="ctag/info_pamper.php"><span class="las la-bookmark"></span>
                        <span>วิธีเอาใจแมว</span></a>
                </li>
                <li>
                    <a href="ctag/info_raise.php"><span class="las la-bookmark"></span>
                        <span>เลี้ยงแมวให้มีความสุข</span></a>
                </li>
                <li>
                    <a href="ctag/info_hangout.php"><span class="las la-bookmark"></span>
                        <span>ห้างพาแมวเที่ยวเล่น</span></a>
                </li>
                <li>
                <a class="active"><span class="las la-seedling"></span>
                        <span>ดูข้อมูลต้นไม้ทั่วไป</span></a>
                </li>
               
                <li>
                    <a href="ttag/info_structure.php"><span class="las la-bookmark"></span>
                        <span>โครงสร้างของพืช</span></a>
                </li>
                <li>
                    <a href="ttag/info_potted_plant.php"><span class="las la-bookmark"></span>
                        <span>ข้อมูลการปลูกต้นไม้กระถาง</span></a>
                </li>
                <li>
                    <a href="../logout.php"><span class="las la-home"></span>
                        <span>ออกจากระบบ</span></a>
                </li>
            </ul>
        </div>
    </div>
    
