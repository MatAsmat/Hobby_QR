<!DOCTYPE html>
<html lang="en">

<head>
  <title>HobbyQR - ใส่ใจชีวิต เพื่อความสุขที่มากขึ้น ด้วย HobbyQR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">
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
<style>
  .container-template {
		/* background-color: #1a1a1a; */
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
		display: block;
		position: absolute;
		width: 100%;
		height: 100%;
		color: white;
		text-align: center;
		font-weight: bold;
		font-size: 50px;
		backface-visibility: hidden;
	}

	#card .front {
		/* background-color: #333; */
	}

	#card .back {
		/* background-color: #000; */
		transform: rotateY(180deg);
	}

	#card:hover {
		transform: rotateY(180deg);
	}
/* 
	img {
		width: 100%;
	} */
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
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i
                    class="sr-only">Facebook</i></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i
                    class="sr-only">Twitter</i></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i
                    class="sr-only">Instagram</i></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i
                    class="sr-only">Dribbble</i></span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light fixed-top" id="ftco-navbar">
    <div class="container">
    <!-- <span class="fa fa-qrcode mr-2"></span>HobbyQR -->
      <a class="navbar-brand" href="index.php"> <img src="./images/logo/icon-1_72.png" alt=""></a>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="dtag.php" class="nav-link">DTag</a></li>
          <li class="nav-item"><a href="ctag.php" class="nav-link">CTag</a></li>
          <li class="nav-item"><a href="ttag.php" class="nav-link">TTag</a></li>
          <li class="nav-item"><a href="product.php" class="nav-link">Product</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="admin_login.php" class="nav-link">Admin</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <div class="hero-wrap js-fullheight" style="background-image: url('./images/cover/cover.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
        data-scrollax-parent="true">
        <div class="col-md-11 ftco-animate text-center">
          <div>
            <a href="member/dtag_register.php">DTagRegister</a>/
            <a href="member/ctag_register.php">CTagRegister</a>/
            <a href="member/ttag_register.php">TTagRegister</a>/
            <a href="member/profile_ttag.php">Profile</a>/
            <a href="member/member_login.php">MemberLogin</a>/
            <a href="member/dtag/index.php">MemberDashboard</a>/
            <a href="admin/index.php">AdminDashboard</a>
          </div>
          <h1 class="mb-4"> ใส่ใจชีวิต เพื่อความสุขที่มากขึ้น ด้วย</h1>
          <h1 class="mb-4">"HobbyQR" </h1>
          <p><a href="product.php" class="btn btn-primary mr-md-4 py-3 px-4">Product <span
                class="ion-ios-arrow-forward"></span></a></p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section bg-light ftco-no-pt ftco-intro">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <!-- active -->
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <!-- <span class="flaticon-blind"></span> -->
              <img src="images/icon/dog.svg" alt="" width="50px">
            </div>
            <div class="media-body">
              <h3 class="heading">DTag</h3>
              <p>ผลิตภัณฑ์ที่จะช่วยให้คุณรู้จักน้องหมาของคุณมากขึ้น DTag จะช่วยเพิ่มความรักให้กับน้องหมาของคุณ</p>
              <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                  class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <!-- <span class="flaticon-dog-eating"></span> -->
              <img src="images/icon/cat.svg" alt="" width="50px">
            </div>
            <div class="media-body">
              <h3 class="heading">CTag</h3>
              <p>ผลิตภัณฑ์ที่จะช่วยให้คุณเป็นทาสแมวที่น่ารัก CTag จะช่วยทำให้น้องแมวรักคุณมากขึ้น</p>
              <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                  class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <!-- <span class="flaticon-grooming"></span> -->
              <img src="images/icon/plant.svg" alt="" width="50px">
            </div>
            <div class="media-body">
              <h3 class="heading">TTag</h3>
              <p>ผลิตภัณฑ์ที่จะทำให้คุณเป็นนักเลี้ยงต้นไม้ตัวยง แล้วคุณจะค้นพบว่า TTag
                จะช่วยเพิ่มความสุขให้กับสวนในบ้านของคุณ</p>
              <!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a> -->
              <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                  class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>Customer Template</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <section class="container-template">
                <div id="card">
                  <figure class="front">
                    <img src="images/template/Template Card-01.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                  <figure class="back">
                    <img src="images/template/Template Card-04.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                </div>
              </section>
            </div>
            <div class="item">
              <section class="container-template">
                <div id="card">
                  <figure class="front">
                    <img src="images/template/Template Card-02.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                  <figure class="back">
                    <img src="images/template/Template Card-05.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                </div>
              </section>
            </div>
            <div class="item">
              <section class="container-template">
                <div id="card">
                  <figure class="front">
                    <img src="images/template/Template Card-03.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                  <figure class="back">
                    <img src="images/template/Template Card-06.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                </div>
              </section>
            </div>
            <div class="item">
              <section class="container-template">
                <div id="card">
                  <figure class="front">
                    <img src="images/template/Template Card-01.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                  <figure class="back">
                    <img src="images/template/Template Card-04.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                </div>
              </section>
            </div>
            <div class="item">
              <section class="container-template">
                <div id="card">
                  <figure class="front">
                    <img src="images/template/Template Card-02.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                  <figure class="back">
                    <img src="images/template/Template Card-05.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                </div>
              </section>
            </div>
            <div class="item">
              <section class="container-template">
                <div id="card">
                  <figure class="front">
                    <img src="images/template/Template Card-03.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                  <figure class="back">
                    <img src="images/template/Template Card-06.png" alt="">
                    <!-- <div>
                      <h3>Asmat</h3>
                      <p>062-335-5987</p>
                      <p>Myname Mat</p>
                      <p>@mymat</p>
                    </div> -->
                  </figure>
                </div>
              </section>
            </div>
           
            <!-- <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <img src="images/template/Template Card-01.png" alt="">
                  <img src="images/template/Template Card-04.png" alt="">
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter" id="section-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="50">0</strong>
            </div>
            <div class="text">
              <span>Customer</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="8500">0</strong>
            </div>
            <div class="text">
              <span>Professionals</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="20">0</strong>
            </div>
            <div class="text">
              <span>Products</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="50">0</strong>
            </div>
            <div class="text">
              <span>Pets Hosted</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="ftco-section testimony-section" style="background-image: url('images/feedback/dog_bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>Happy Clients &amp; Feedbacks</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="fa fa-quote-left"></span></div>
                <div class="text">
                  <img src="images/dog/dog1.jpg" alt="">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="fa fa-quote-left"></span></div>
                <div class="text">
                  <img src="images/dog/dog2.jpg" alt="">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="fa fa-quote-left"></span></div>
                <div class="text">
                  <img src="images/dog/dog1.jpg" alt="">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="fa fa-quote-left"></span></div>
                <div class="text">
                  <img src="images/dog/dog1.jpg" alt="">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="fa fa-quote-left"></span></div>
                <div class="text">
                  <img src="images/dog/dog2.jpg" alt="">
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    <div class="pl-3">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter">
    <div class="container">
      <div class="row d-flex no-gutters">
        <div class="col-md-7 d-flex">
          <div
            class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0">
            <video autoplay loop src="images/vedioCover.mp4" width="650px"></video>
          </div>
        </div>
        <div class="col-md-5 d-flex">
          <div
            class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
            style="background-image: url('images/dog_cat/cat_dog2.jpg')">
          </div>
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
          <script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart"
            aria-hidden="true"></i> by <a href="alphageek.co.th" target="_blank">alphageek.com</a>
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
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>