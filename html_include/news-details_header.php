<?php require_once('includes/initialize.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NACOSS News</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="images/nacoss-ico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/nacoss-ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/nacoss-ico/favicon-16x16.png">
<link rel="manifest" href="images/nacoss-ico/site.webmanifest">
<link rel="mask-icon" href="images/nacoss-ico/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <div class="row">
                  <img class="nacoss-img" src="./photos/default.png">
                  <h1 class="nacoss-img-txt">NACOSS News</h1>
                  </div>
                <!-- <img class="nacoss-img" src="./photos/default.png">
                  <h1>NACOSS UNN</h1> -->
                  </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="account.php">Account</a>
                  </li>
                <?php if(isset($_SESSION['id'])){ ?>
                    <li>
                    <a class="page-scroll" href="<?php echo $_SESSION['my_portal_location']; ?>">MyPortal</a>
                  </li>
                <?php } ?>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
<br>
 <!-- Start Bottom Header -->
 <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container" style="padding-top:7%">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">News Details</h1>
              </div>
              <!-- <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Profesional Blog Page</h2>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">