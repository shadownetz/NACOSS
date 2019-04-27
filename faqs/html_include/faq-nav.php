<?php require_once('../../includes/initialize.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NACOSSUNN-FAQ</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../images/nacoss-ico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../images/nacoss-ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../images/nacoss-ico/favicon-16x16.png">
<link rel="manifest" href="../../images/nacoss-ico/site.webmanifest">
<link rel="mask-icon" href="../../images/nacoss-ico/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="../css/responsive.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
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
                <a class="navbar-brand page-scroll sticky-logo" href="../../index.php">
                <div class="row">
                  <img class="nacoss-img" src="../img/default.png">
                  <h1 class="nacoss-img-txt">NACOSS UNN</h1>
                  </div>
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="../../index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php if(isset($_SESSION['id'])){ echo '../../'.$_SESSION['my_portal_location']; }else{ echo '../../account.php'; } ?>"><?php if(isset($_SESSION['id'])){ echo 'My Portal'; }else{ echo 'Login'; } ?></a>
                  </li>
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
  <div class="row">
        <div class="col-md-12" id="nacoss"><h1 class="animated fadeInUp">National Association of Computer Sciences</h1>
        <span style="float:right;padding-right:1em" class="animated fadeIn"><code><i>...networking the world</i></code></span></div>
  </div>
