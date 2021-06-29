<?php 
include('../condb.php'); 
$qrID=$_GET['qrID'];
echo 'qrID: '.$qrID;

$checkQR = "SELECT QrCodeName, QRStatus FROM tbl_qrcode WHERE QrCodeName ='$qrID'" or die("Error:" . mysqli_error());
$qrResults =  mysqli_query($condb, $checkQR);
$qrStatus = mysqli_fetch_row($qrResults);
echo ' qrStatus: '.$qrStatus[1];

if(isset($_POST['Ref_QrCodeID'])) $qrID=$_POST['Ref_QrCodeID'];
if($qrStatus[1] == 'Yes')
{   
    echo "<script>";
    // ในอนาคตน่าจะต้องใช้แบบนี้ echo "window.location = 'profile.php?qrID=emHWnhwYqs'";
    echo "window.location = 'profile.php'";
    echo "</script>";
}




$query = "SELECT * FROM tbl_dog_breed" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);

$query2 = "SELECT * FROM tbl_templates" or die("Error:" . mysqli_error());
$result2 = mysqli_query($condb, $query2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Member Register DTag Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- ==================================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style>
    .box
    {
     width:800px;
     margin:0 auto;
    }
    .active_tab1
    {
     background-color:#fff;
     color:#333;
     font-weight: 600;
    }
    .inactive_tab1
    {
     background-color: #f5f5f5;
     color: #333;
     cursor: not-allowed;
    }
    .has-error
    {
     border-color:#cc0000;
     background-color:#ffff99;
    }
    </style>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                        <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 099-325-9536</a>
                        <a href="#"><span class="fa fa-paper-plane mr-1"></span> alphageek.company@gmail.com</a>
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><span class="fa fa-qrcode mr-2"></span>HobbyQR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="../dtag.php" class="nav-link">DTag</a></li>
                    <li class="nav-item"><a href="../ctag.php" class="nav-link">CTag</a></li>
                    <li class="nav-item"><a href="../ttag.php" class="nav-link">TTag</a></li>
                    <li class="nav-item"><a href="../product.php" class="nav-link">Product</a></li>
                    <li class="nav-item"><a href="../about.php" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="../admin_login.php" class="nav-link">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
        style="background-image: url(../images/dog/dog1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
                    <!-- <h2 class="mb-4">กรอกข้อมูลสมัครสมาชิก</h2> -->
                    <!-- <form method="post" id="register_form">
                        <ul class="nav nav-tabs">
                         <li class="nav-item">
                          <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">ข้อมูลเจ้าของ</a>
                         </li>
                         <li class="nav-item">
                          <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">ข้อมูลสุนัข</a>
                         </li>
                         <li class="nav-item">
                          <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">นามบัตร</a>
                         </li>
                        </ul>
                        <div class="tab-content" style="margin-top:16px;">
                         <div class="tab-pane active" id="login_details">
                          <div class="panel panel-default">
                           <div class="panel-heading">ข้อมูลเจ้าของ</div>
                           <div class="panel-body">
                            <div class="form-group">
                             <label>Enter Email Address</label>
                             <input type="text" name="email" id="email" class="form-control" />
                             <span id="error_email" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                             <label>Enter Password</label>
                             <input type="password" name="password" id="password" class="form-control" />
                             <span id="error_password" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                             <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                           </div>
                          </div>
                         </div>
                         <div class="tab-pane fade" id="personal_details">
                          <div class="panel panel-default">
                           <div class="panel-heading">ข้อมูลสุนัข</div>
                           <div class="panel-body">
                            <div class="form-group">
                             <label>Enter First Name</label>
                             <input type="text" name="first_name" id="first_name" class="form-control" />
                             <span id="error_first_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                             <label>Enter Last Name</label>
                             <input type="text" name="last_name" id="last_name" class="form-control" />
                             <span id="error_last_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                             <label>Gender</label>
                             <label class="radio-inline">
                              <input type="radio" name="gender" value="male" checked> Male
                             </label>
                             <label class="radio-inline">
                              <input type="radio" name="gender" value="female"> Female
                             </label>
                            </div>
                            <br />
                            <div align="center">
                             <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                             <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                            <br />
                           </div>
                          </div>
                         </div>
                         <div class="tab-pane fade" id="contact_details">
                          <div class="panel panel-default">
                           <div class="panel-heading">นามบัตร</div>
                           <div class="panel-body">
                            <div class="form-group">
                             <label>Enter Address</label>
                             <textarea name="address" id="address" class="form-control"></textarea>
                             <span id="error_address" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                             <label>Enter Mobile No.</label>
                             <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
                             <span id="error_mobile_no" class="text-danger"></span>
                            </div>
                            <br />
                            <div align="center">
                             <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                             <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
                            </div>
                            <br />
                           </div>
                          </div>
                         </div>
                        </div>
                       </form> -->
                       <h2 class="mb-4">กรอกข้อมูลสมัครสมาชิก</h2>
                    <form role="form" action="dtag_register_db.php" method="post" name="form1" class="appointment" enctype="multipart/form-data">
                    <h4 style="color:#fff">* ข้อมูลเจ้าของ</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Username" class="form-control" placeholder="ชื่อผู้ใช้ (Username)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Password" class="form-control" placeholder="รหัสผ่าน (Password)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="FirstName" class="form-control" placeholder="ชื่อจริง (First Name)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="LastName" class="form-control" placeholder="นามสกุลจริง (Last Name)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Email" class="form-control" placeholder="อีเมล (Email)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Telephone" class="form-control" placeholder="เบอร์โทรศัพท์ (Telephone)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Line" class="form-control" placeholder="ไลน์ (Line)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Facebook" class="form-control" placeholder="เฟซบุ๊ก (Facebook)">
                                </div>
                            </div>
                        </div>
                        <h4 style="color:#fff">* ข้อมูลสุนัข</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="DogName" class="form-control" placeholder="ชื่อสุนัข (Name)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" name="DogPhoto" class="form-control" placeholder="รูป (Photo)" eccept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="date" name="DogBirthdate" class="form-control appointment_date" placeholder="วันเกิด (ฺBirthdate)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="DogGender" id="" class="form-control">
                                                <option value="">เลือกเพศ (Gender)</option>
                                                <option value="ผู้">ผู้</option>
                                                <option value="เมีย">เมีย</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="DogBlood" id="" class="form-control">
                                                <option value="">เลือกกรุ๊ปเลือด (Blood)</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="DogCoatColor" class="form-control" placeholder="สี (Coat Color)">
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-clock-o"></span></div>
                                        <input type="text" class="form-control appointment_time" placeholder="Time">
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="DogPersonality" id="" class="form-control">
                                                <option value="">เลือกลักษณะนิสัย (Personality)</option>
                                                <option value="ใจดี (Friendly)">ใจดี (Friendly)</option>
                                                <option value="ขี้อ้อนชอบคนตามใจ (Eager to Please)">ขี้อ้อนชอบคนตามใจ (Eager to Please)</option>
                                                <option value="ขี้เล่น (Playful)">ขี้เล่น (Playful)</option>
                                                <option value="ตื่นเต้น/กระวนกระวาย (Nervous/Anxious)">ตื่นเต้น/กระวนกระวาย (Nervous/Anxious)</option>
                                                <option value="หวงของ หวงเจ้าของ (Bossy)">หวงของ หวงเจ้าของ (Bossy)</option>
                                                <option value="ดื้อ (Stubborn)">ดื้อ (Stubborn)</option>
                                                <option value="ดุก้าวร้าว ไม่สุงสิงกับใคร (Aggressive)">ดุก้าวร้าว ไม่สุงสิงกับใคร (Aggressive)</option>
                                                <option value="ขี้อาย/เรียบร้อย (Shy/Timid)">ขี้อาย/เรียบร้อย (Shy/Timid)</option>
                                                <option value="เอาแน่เอานอนไม่ได้ แล้วแต่อารมณ์ (Unpredictable)">เอาแน่เอานอนไม่ได้ แล้วแต่อารมณ์ (Unpredictable)</option>
                                                <option value="คึกคัก ร่าเริง (Alert)">คึกคัก ร่าเริง (Alert)</option>
                                                <option value="ตกใจง่ายขี้กลัว (Easily Frightened)">ตกใจง่ายขี้กลัว (Easily Frightened)</option>
                                                <option value="เข้าได้ง่ายกับทุกคน (Good with Everyone)">เข้าได้ง่ายกับทุกคน (Good with Everyone)</option>
                                                <option value="ชอบกินมากที่สุด (Food Lover)">ชอบกินมากที่สุด (Food Lover)</option>
                                                <option value="ขี้เซาที่สุด (Sleepyhead)">ขี้เซาที่สุด (Sleepyhead)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="Ref_DogBreedID" id="" class="form-control">
                                            <option value="">เลือกพันธุ์สุนัข</option>
                                            <?php foreach($result as $results){ ?>
                                        <option value="<?php echo $results["DogBreedID"];?>">
                                            <?php echo $results["DogBreedName"];?>
                                        </option>
                                        <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                            </div>  <h4 style="color:#fff">* นามบัตรสุนัข</h4>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="Ref_TemplateID" id="" class="form-control">
                                            <option value="Ref_TemplateID">เลือกนามบัตรสุนัข</option>
                                            <?php foreach($result2 as $results2){ ?>
                                        <option value="<?php echo $results2["TemplateID"];?>">
                                            <?php echo $results2["TemplateName"];?>
                                        </option>
                                        <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                        </div>
                            
                            <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control"
                                        placeholder="Message"></textarea>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                <input type="hidden" name="TagType" value="Dtag">
                                <!-- <input type="hidden" name="Ref_QrCodeID" value=".$qrID"> -->
                                <input type='hidden' name='Ref_QrCodeID' value='<?php echo "$qrID";?>'/> 
                                <input type="hidden" name="Ref_OwnerID" value="3">
                                <!-- <input type="hidden" name="Ref_OwnerID" value="  <?php echo $row['OwnerID'];?>"> -->
                              
                                    <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   


    <footer class="footer">
        <div class="container">
            <div class="col-md-12 text-center">
                <p class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | <i
                        class="fa fa-heart" aria-hidden="true"></i> by <a href="alphageek.co.th"
                        target="_blank">alphageek.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/jquery.timepicker.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/scrollax.min.js"></script>
    <script
        src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>
    <!-- ================================================ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>

<script>
    $(document).ready(function(){
     
     $('#btn_login_details').click(function(){
      
      var error_email = '';
      var error_password = '';
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      
      if($.trim($('#email').val()).length == 0)
      {
       error_email = 'Email is required';
       $('#error_email').text(error_email);
       $('#email').addClass('has-error');
      }
      else
      {
       if (!filter.test($('#email').val()))
       {
        error_email = 'Invalid Email';
        $('#error_email').text(error_email);
        $('#email').addClass('has-error');
       }
       else
       {
        error_email = '';
        $('#error_email').text(error_email);
        $('#email').removeClass('has-error');
       }
      }
      
      if($.trim($('#password').val()).length == 0)
      {
       error_password = 'Password is required';
       $('#error_password').text(error_password);
       $('#password').addClass('has-error');
      }
      else
      {
       error_password = '';
       $('#error_password').text(error_password);
       $('#password').removeClass('has-error');
      }
    
      if(error_email != '' || error_password != '')
      {
       return false;
      }
      else
      {
       $('#list_login_details').removeClass('active active_tab1');
       $('#list_login_details').removeAttr('href data-toggle');
       $('#login_details').removeClass('active');
       $('#list_login_details').addClass('inactive_tab1');
       $('#list_personal_details').removeClass('inactive_tab1');
       $('#list_personal_details').addClass('active_tab1 active');
       $('#list_personal_details').attr('href', '#personal_details');
       $('#list_personal_details').attr('data-toggle', 'tab');
       $('#personal_details').addClass('active in');
      }
     });
     
     $('#previous_btn_personal_details').click(function(){
      $('#list_personal_details').removeClass('active active_tab1');
      $('#list_personal_details').removeAttr('href data-toggle');
      $('#personal_details').removeClass('active in');
      $('#list_personal_details').addClass('inactive_tab1');
      $('#list_login_details').removeClass('inactive_tab1');
      $('#list_login_details').addClass('active_tab1 active');
      $('#list_login_details').attr('href', '#login_details');
      $('#list_login_details').attr('data-toggle', 'tab');
      $('#login_details').addClass('active in');
     });
     
     $('#btn_personal_details').click(function(){
      var error_first_name = '';
      var error_last_name = '';
      
      if($.trim($('#first_name').val()).length == 0)
      {
       error_first_name = 'First Name is required';
       $('#error_first_name').text(error_first_name);
       $('#first_name').addClass('has-error');
      }
      else
      {
       error_first_name = '';
       $('#error_first_name').text(error_first_name);
       $('#first_name').removeClass('has-error');
      }
      
      if($.trim($('#last_name').val()).length == 0)
      {
       error_last_name = 'Last Name is required';
       $('#error_last_name').text(error_last_name);
       $('#last_name').addClass('has-error');
      }
      else
      {
       error_last_name = '';
       $('#error_last_name').text(error_last_name);
       $('#last_name').removeClass('has-error');
      }
    
      if(error_first_name != '' || error_last_name != '')
      {
       return false;
      }
      else
      {
       $('#list_personal_details').removeClass('active active_tab1');
       $('#list_personal_details').removeAttr('href data-toggle');
       $('#personal_details').removeClass('active');
       $('#list_personal_details').addClass('inactive_tab1');
       $('#list_contact_details').removeClass('inactive_tab1');
       $('#list_contact_details').addClass('active_tab1 active');
       $('#list_contact_details').attr('href', '#contact_details');
       $('#list_contact_details').attr('data-toggle', 'tab');
       $('#contact_details').addClass('active in');
      }
     });
     
     $('#previous_btn_contact_details').click(function(){
      $('#list_contact_details').removeClass('active active_tab1');
      $('#list_contact_details').removeAttr('href data-toggle');
      $('#contact_details').removeClass('active in');
      $('#list_contact_details').addClass('inactive_tab1');
      $('#list_personal_details').removeClass('inactive_tab1');
      $('#list_personal_details').addClass('active_tab1 active');
      $('#list_personal_details').attr('href', '#personal_details');
      $('#list_personal_details').attr('data-toggle', 'tab');
      $('#personal_details').addClass('active in');
     });
     
     $('#btn_contact_details').click(function(){
      var error_address = '';
      var error_mobile_no = '';
      var mobile_validation = /^\d{10}$/;
      if($.trim($('#address').val()).length == 0)
      {
       error_address = 'Address is required';
       $('#error_address').text(error_address);
       $('#address').addClass('has-error');
      }
      else
      {
       error_address = '';
       $('#error_address').text(error_address);
       $('#address').removeClass('has-error');
      }
      
      if($.trim($('#mobile_no').val()).length == 0)
      {
       error_mobile_no = 'Mobile Number is required';
       $('#error_mobile_no').text(error_mobile_no);
       $('#mobile_no').addClass('has-error');
      }
      else
      {
       if (!mobile_validation.test($('#mobile_no').val()))
       {
        error_mobile_no = 'Invalid Mobile Number';
        $('#error_mobile_no').text(error_mobile_no);
        $('#mobile_no').addClass('has-error');
       }
       else
       {
        error_mobile_no = '';
        $('#error_mobile_no').text(error_mobile_no);
        $('#mobile_no').removeClass('has-error');
       }
      }
      if(error_address != '' || error_mobile_no != '')
      {
       return false;
      }
      else
      {
       $('#btn_contact_details').attr("disabled", "disabled");
       $(document).css('cursor', 'prgress');
       $("#register_form").submit();
      }
      
     });
     
    });
    </script>