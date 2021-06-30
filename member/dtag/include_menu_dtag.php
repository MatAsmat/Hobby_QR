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
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>HobbyQR</title>
 <!-- DataTables -->
 <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index.php" class="navbar-brand">
        <img src="../../images/logo/icon-1_72.png" alt="HobbyQr Logo"
             style="opacity: .8">
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link">หน้าแรก</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">ดูข้อมูล</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="info_supplies.php" class="dropdown-item">อุปกรณ์ในการเลี้ยงสุนัข</a></li>
                                <li><a href="info_vaccine.php" class="dropdown-item">ตารางการให้วัคซีนของสุนัข</a></li>
                                <li><a href="info_neuter.php" class="dropdown-item">ข้อมูลการทำหมันสุนัข</a></li>
                                <li><a href="info_communicate.php" class="dropdown-item">การสื่อสารกับสุนัข</a></li>
                                <li><a href="info_body.php" class="dropdown-item">กายวิภาคของสุนัข</a></li>
                                <li><a href="info_takecare.php" class="dropdown-item">ข้อควรระวังในการเลี้ยงสุนัข</a></li>
                                <li><a href="info_sickness.php" class="dropdown-item">ข้อสังเกตสุนัขเมื่อป่วย</a></li>
                                <li><a href="info_diseases.php" class="dropdown-item">โรคต่างๆของสุนัข</a></li>

                                <li class="dropdown-divider"></li>

                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-item dropdown-toggle">ข้อมูลสุนัขตามพันธุ์</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="info_breed_personality.php" class="dropdown-item">ข้อมูลทั่วไปและลักษณะนิสัย</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="info_breed_charater.php" class="dropdown-item">บุคลิก</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="info_breed_care.php" class="dropdown-item">ข้อมูลการดูแล</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="info_breed_herdsman.php" class="dropdown-item">ผู้เลี้ยงที่เหมาะ</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="info_breed_healthissues.php" class="dropdown-item">ภาวะปัญหาสุขภาพ</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="info_breed_nutrients.php" class="dropdown-item">ความต้องการด้านสารอาหาร</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">จัดการข้อมูล</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="table_body_weight.php" class="dropdown-item">ตารางน้ำหนักสัตว์เลี้ยง</a></li>
                                <li><a href="table_vaccine.php" class="dropdown-item">ตารางประวัติการฉีดวัคซีน</a></li>
                                <li><a href="table_flea_treatments.php" class="dropdown-item">ตารางประวัติกำจัดเห็บหมัด</a></li>
                                <li><a href="table_worming.php" class="dropdown-item">ตารางป้องกันพยาธิหนอนหัวใจ</a></li>
                                <li><a href="table_medicine.php" class="dropdown-item">ตารางยาอาหารเสริม</a></li>
                                <li><a href="table_visit.php" class="dropdown-item">ตารางพบคุณหมอ</a></li>
                                <li><a href="table_health_note.php" class="dropdown-item">ตารางสุขภาพทั่วไป</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-cog"></i> แก้ไขข้อมูลส่วนตัว <i class="fas fa-sort-down"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="./index.php" class="dropdown-item">
            <i class="fas fa-user-circle"></i> ข้อมูลส่วนตัว
            </a>
            <div class="dropdown-divider"></div>
            <a href="update_profile.php" class="dropdown-item">
            <i class="fas fa-user-edit"></i> แก้ไขข้อมูลส่วนตัว
            </a>
            <div class="dropdown-divider"></div>
            <a href="change_password.php" class="dropdown-item">
            <i class="fas fa-key"></i> แก้ไขรหัสผ่าน
            </a>
        </li>
     
                    </ul>
                     <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <a class="nav-link"  href="../../logout.php" role="button">
              <i class="fas fa-home"></i> ออกจากระบบ</a>
        </li>
      </ul>
                </div>
    </div>
  </nav>
  <!-- /.navbar -->

  
