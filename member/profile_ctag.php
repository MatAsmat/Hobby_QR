<?php

include('../condb.php');
$qrID = $_GET['qrID'];
// echo 'qrID: ' . $qrID;

$checkTBLCat = "SELECT Ref_TemplateID, Ref_QrCodeID FROM tbl_cat WHERE Ref_QrCodeID ='$qrID'" or die("Error:" . mysqli_error());
$tblResultsCat =  mysqli_query($condb, $checkTBLCat);
$tblStatus = mysqli_fetch_row($tblResultsCat);

// $ID = $_GET['ID'];
// echo 'ID: ' . $ID;

$sql1 = "SELECT * FROM tbl_cat  as d 
INNER JOIN tbl_owner as o ON d.Ref_OwnerID = o.OwnerID
WHERE d.Ref_QrCodeID='$qrID';
";

$result = mysqli_query($condb, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

$sql2 = "SELECT * FROM tbl_cat WHERE Ref_QrCodeID='$qrID';";
$result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
$row2 = mysqli_fetch_array($result2);
// echo "    profile image:  " .$ownerPhoto;
// เก็บไว้ใช้ Check Table แมว ต้นไม้ 

// if (is_null($tblStatus)) {
// 	$checkTBLCat = "SELECT Ref_TemplateID, Ref_QrCodeID FROM tbl_cat WHERE Ref_QrCodeID ='$qrID'" or die("Error:" . mysqli_error());
// 	$tblResultsCat =  mysqli_query($condb, $checkTBLCat);
// 	$tblStatus = mysqli_fetch_row($tblResultsCat);
// 	echo '/n Cat Checker: ' . $tblStatus;
// } else if (is_null($tblStatus)) {
// 	$checkTBLTree = "SELECT Ref_TemplateID, Ref_QrCodeID FROM tbl_tree WHERE Ref_QrCodeID ='$qrID'" or die("Error:" . mysqli_error());
// 	$tblResultsTree =  mysqli_query($condb, $checkTBLTree);
// 	$tblStatus = mysqli_fetch_row($tblResultsTree);
// 	echo '/n Tree Checker: ' . $tblStatus;
// }

// echo ' row: ' . $row[0];

$checkImagePath = "SELECT TemplateID, TemplateFrontImage, TemplateBackImage FROM tbl_templates WHERE TemplateID ='$tblStatus[0]'" or die("Error:" . mysqli_error());
$imageResult =  mysqli_query($condb, $checkImagePath);
$imageStatus = mysqli_fetch_row($imageResult);

// echo 'imageStatus: ' . $imageStatus[1];
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http') . '://' .  $_SERVER['HTTP_HOST'];
$url = $base_url . $_SERVER["REQUEST_URI"];
// echo '   URL: ' .$url; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css/jquery.timepicker.css">
	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/style.css">
	<!-- ==================================== -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.share-icon {
		font-size: 20px;
	}

	.container-template {
		/* background-color: #333; */
		margin: auto;
		width: 350px;
		height: 561px;
		position: relative;
		perspective: 500px;
	}

	#card {
		width: 100%;
		height: 100%;
		position: absolute;
		transform-style: preserve-3d;
		transform-origin: center;
		transition: transform 1s;
	}

	#card figure {
		margin: 0;
		/* display: block; */
		position: absolute;
		width: 100%;
		height: 100%;
		color: white;
		/* text-align: center; */
		font-weight: bold;
		font-size: 50px;
		backface-visibility: hidden;
	}

	#card .front,
	#card .back {
		/* background-color: #333; */
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
	}

	#card .back {
		/* background-color: #000; */
		transform: rotateY(180deg);
		-ms-transform: rotateY(180deg);
		-webkit-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-o-transform: rotateY(180deg);
	}

	#card:hover {
		transform: rotateY(180deg);
	}

	img {
		width: 100%;
	}

	#info-data {
		position: absolute;
		bottom: 50px;
		left: 150px;
	}

	#info-top {
		margin-bottom : 35px;
	}

	#info-top > p {
		line-height : 60%;
	}

	#info-bottom > p {
		line-height : 60%;
	}

	#img-tag {
		position: absolute;
		top: 15%;
		left: 15%;
		width: 250px;
		height: 250px;
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
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="../index.php"><span class="fa fa-qrcode mr-2"></span>HobbyQR</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="../login.php" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
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

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Profile
					</span>

					<section class="container-template">
						<div id="card">
							<figure class="front">
								<div style="-webkit-backface-visibility: hidden; backface-visibility: hidden;">
									<img src="../admin/image/templates/<?php echo $imageStatus[1]; ?>" alt="">
									<div id="info-data">
										<div id="info-top" style="-webkit-backface-visibility: hidden; backface-visibility: hidden;" >
											<p><?php echo $FirstName; ?></p>
											<p><?php echo $Telephone; ?></p>
											<p><?php echo $Line; ?></p>
										</div>
										<div id="info-bottom"  style="-webkit-backface-visibility: hidden; backface-visibility: hidden;">
											<p><?php echo $CatName; ?></p>
											<p><?php echo $CatBlood; ?></p>
											<p><?php echo $CatBirthdate; ?></p>
										</div>
									</div>
								</div>
							</figure>
							<figure class="back">
								<div style="-webkit-backface-visibility: hidden; backface-visibility: hidden;">
									<div style="position: absolute;">
										<img src="../admin/image/templates/<?php echo $imageStatus[2]; ?>" alt="">
									</div>
									<div id="img-tag">
										<img src="./profileimg/ctag/<?php echo $row['CatPhoto']; ?>" alt="template">
									</div>
								</div>


							</figure>
						</div>
					</section>

					<!-- <div class="template">
						<div id="card">
							<div class="front">
								<img src="../images/template/Template Card-01.png" alt="">
								<div class="info-front">
									<h3>Asmat</h3>
									<p>062-335-5987</p>
									<p>Myname Mat</p>
									<p>@mymat</p>
								</div>
								<div class="back">
									<img src="../images/template/Template Card-04.png" alt="">
									<div class="info-back">
										<h3>Asmat</h3>
										<p>062-335-5987</p>
										<p>Myname Mat</p>
										<p>@mymat</p>
									</div>
								</div>
							</div>
						</div>
					</div> -->




					<div class="flex-col-c p-t-50 p-b-40">
						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
						<button class="btn" id='answer-example-share-button'>Share!</button>
						<div class="share-icon">
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-instagram"></a>
							<a href="#" class="fa fa-pinterest"></a>
						</div>
						<br>
						<p class="txt3">Go to Memeber Login Page</p>
						<div class="container-login100-form-btn">
							<a style="color: #fff;" class="login100-form-btn" href="member_login.php">Click Here!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/js/main.js"></script>
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
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
	<!-- <script src="../js/google-map.js"></script> -->
	<script src="../js/main.js"></script>
	<script>
		$('#answer-example-share-button').on('click', () => {
			if (navigator.share) {

				console.log('share work');
				console.log("<?php echo $url ?>")
				navigator.share({
						title: 'Share your Cat Tag right now !',
						text: 'Please contract me if there is any problem.',
						url: '<?php echo $url ?>',
					})
					.then(() => console.log('Successful share'))
					.catch((error) => console.log('Error sharing', error));
			} else {
				console.log('Share not supported on this browser, do it the old way.');
			}
		});
	</script>

</body>

</html>