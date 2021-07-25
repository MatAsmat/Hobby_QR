<!DOCTYPE html>
<html lang="en">

<head>
  <title>Member Login</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
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
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php"><span class="fa fa-qrcode mr-2"></span>HobbyQR</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
              <li class="nav-item"><a href="dtag.php" class="nav-link">DTag</a></li>
              <li class="nav-item"><a href="ctag.php" class="nav-link">CTag</a></li>
              <li class="nav-item"><a href="ttag.php" class="nav-link">TTag</a></li>
              <li class="nav-item"><a href="product.php" class="nav-link">Product</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
              <li class="nav-item"><a href="admin_login.php" class="nav-link">Admin</a></li>
            </ul>
          </div>
        </div>
      </nav>


    <script>
        
        setTimeout(function() {
            swal({
                title: "กรุณายิง QR Code",
                text: " บน Tag ของท่าน เพื่อทำการ Login หากยังไม่มีผลิตภัณฑ์ HobbyQR สามารถซื้อจากทางเราได้",
                type: "warning"
            }, function(){
                window.location = "product.php";
            })
        }, 1000);
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
</body>
</html>