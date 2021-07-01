<?php
 session_start();
//  echo $_SESSION['status'];
?>
<?php
include('./condb.php'); 
$query = "
SELECT * 
FROM tbl_products
WHERE ProductCategory = 'DTag'"
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);  

$query2 = "
SELECT * 
FROM tbl_products
WHERE ProductCategory = 'CTag'"
or die("Error:" . mysqli_error());
$result2 = mysqli_query($condb, $query2);  

$query3 = "
SELECT * 
FROM tbl_products
WHERE ProductCategory = 'TTag'"
or die("Error:" . mysqli_error());
$result3 = mysqli_query($condb, $query3);  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HobbyQR - ใส่ใจชีวิต เพื่อความสุขที่มากขึ้น ด้วย HobbyQR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
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
	    	<a class="navbar-brand" href="index.php"><span class="fa fa-qrcode mr-2"></span>HobbyQR</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
	        	<li class="nav-item"><a href="dtag.php" class="nav-link">DTag</a></li>
	        	<li class="nav-item"><a href="ctag.php" class="nav-link">CTag</a></li>
	          <li class="nav-item"><a href="ttag.php" class="nav-link">TTag</a></li>
	          <li class="nav-item active"><a href="product.php" class="nav-link">Product</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="admin_login.php" class="nav-link">Admin</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/feedback/product_bg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Product <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Product</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services active text-center">
              <a href="#dtag"> 
              <div class="media-body">
                <h3 class="heading">DTag</h3>
                  <img src="images/dog/dog3.jpg" alt="" width="200px">
              </div>
              </a>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <a href="#ctag"> 
              <div class="media-body">
                <h3 class="heading">CTag</h3>
                  <img src="images/cat/cat3.jpg" alt="" width="200px">
              </div>
              </a>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <a href="#ttag"> 
              <div class="media-body">
                <h3 class="heading">TTag</h3>
                <img src="images/feedback/plant1.jpg" alt="" width="200px">
              </div>
          </a>    
            </div>  
          </div>
        </div>
    	</div>
    </section>
    <section class="ftco-counter" id="dtag">
    	<div class="container">
				<div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="block-18 text-center">
              <!-- <div class="text">
                <strong  class="number" data-number="50">0</strong>
              </div> -->
              <div class="text">
              	<span class="number" >Dtag Product</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
    <section class="ftco-section">
			<div class="container">
				<div class="row">
          <?php while($row = mysqli_fetch_array($result)) { ?>
             <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(admin/image/products/<?php echo $row['ProductImage'];?>);">
            	<a href="admin/image/products/<?php echo $row['ProductImage'];?>" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span><?php echo $row['ProductName'];?></span>
	              	<h2><?php echo $row['ProductPrice'];?></h2>
	              </div>
              </div>
            </div>
          </div>
            <?php } ?>
         
        </div>
        <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
			</div>
		</section>
    <section class="ftco-counter" id="ctag">
    	<div class="container">
				<div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="block-18 text-center">
              <!-- <div class="text">
                <strong  class="number" data-number="50">0</strong>
              </div> -->
              <div class="text">
              	<span class="number" >Ctag Product</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
    <section class="ftco-section">
    <div class="container">
				<div class="row">
          <?php while($row = mysqli_fetch_array($result2)) { ?>
             <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(admin/image/products/<?php echo $row['ProductImage'];?>);">
            	<a href="admin/image/products/<?php echo $row['ProductImage'];?>" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span><?php echo $row['ProductName'];?></span>
	              	<h2><?php echo $row['ProductPrice'];?></h2>
	              </div>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
			</div>
		</section>
    <section class="ftco-counter" id="ttag">
    	<div class="container">
				<div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="block-18 text-center">
              <!-- <div class="text">
                <strong  class="number" data-number="50">0</strong>
              </div> -->
              <div class="text">
              	<span class="number" >Ttag Product</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>
    <section class="ftco-section">
    <div class="container">
				<div class="row">
          <?php while($row = mysqli_fetch_array($result3)) { ?>
             <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(admin/image/products/<?php echo $row['ProductImage'];?>);">
            	<a href="admin/image/products/<?php echo $row['ProductImage'];?>" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span><?php echo $row['ProductName'];?></span>
	              	<h2><?php echo $row['ProductPrice'];?></h2>
	              </div>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
			</div>
		</section>


    <footer class="footer">
      <div class="container">
      <div class="col-md-12 text-center">
      <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="alphageek.co.th" target="_blank">alphageek.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
      </div>
    </footer>   
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>