<?php require_once('includes/initialize.php'); ?>
<?php
  $validate_user_activation_period_query = User::find_by_sql("SELECT * FROM all_students WHERE verified='0'");
  while($row=mysqli_fetch_assoc($validate_user_activation_period_query)){
    $user_registered_date = $row["date"];
    $user_id = $row["id"];
    $current_year = date('Y'); $current_month = date('m'); $current_day = date('d');

    $reg_year = date('Y', strtotime($user_registered_date));
    $reg_month = date('m', strtotime($user_registered_date));
    $reg_day = date('d', strtotime($user_registered_date));

    if($current_year >= $reg_year){
      if($current_day - $reg_day > 7){
          //$delete_user = User::find_by_sql("DELETE FROM all_students WHERE id='$user_id'");
      }else{
        $convert_days = 30 - $reg_day + $current_day;
        if($convert_days > 7){
          //$delete_user = User::find_by_sql("DELETE FROM all_students WHERE id='$user_id'");
        }
      }
    }
  }
?>
<?php

if(isset($_GET['confirm']) && !empty($_GET['confirm'])){
    $confirm_id = $_GET['confirm'];
    
    $explode = explode('-', $confirm_id);
    if($explode && count($explode)==10){
        $user_unique_id = $explode[5].$explode[7].$explode[9];

        $confirm_query = User::find_by_sql("SELECT id, rnumber, verification_email FROM all_students WHERE unique_id = '$user_unique_id' LIMIT 1");
        if(mysqli_num_rows($confirm_query)==1){
          $_SESSION['unique_id'] = $user_unique_id;
            while($r=mysqli_fetch_assoc($confirm_query)){
                $_SESSION['identity'] = $r['id'];
                $_SESSION['user_rnumber'] = $r['rnumber'];
                $_SESSION['verification_email'] = $r['verification_email'];
                echo "<script> window.location='recover_fpass.php'; </script>";
            }
        }
    }else{
      echo "<script> window.location='index.php'; </script>";
    }
}

?>
<?php require_once('includes/initialize.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NACOSSUNN</title>
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
  <link href="lib/OwlCarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/OwlCarousel/owl.transitions.css" rel="stylesheet">
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
                  <h1 class="nacoss-img-txt">NACOSS UNN</h1>
                  </div>
                <!-- <img class="nacoss-img" src="./photos/default.png">
                  <h1>NACOSS UNN</h1> -->
                  </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="#services">Services</a>
                  </li> -->
                  <li>
                    <a class="page-scroll" href="#team">Team</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="staff.php">Staffs</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="faq.php">Faqs</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                <?php if(isset($_SESSION['id'])){ ?>
                    <li>
                    <a class="page-scroll" href="<?php echo $_SESSION['my_portal_location']; ?>">MyPortal</a>
                  </li>
                <?php }else{ ?>
                  <li>
                  <a class="page-scroll" href="account.php">Account</a>
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
  <div class="row">
        <div class="col-md-12" id="nacoss"><h1 class="animated fadeInUp">Nigeria Association of Computer Science Students</h1>
        <span style="float:right;padding-right:1em" class="animated fadeIn"><code><i>...networking the world</i></code></span></div>
  </div>
