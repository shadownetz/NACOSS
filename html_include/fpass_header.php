
<?php require_once('includes/initialize.php'); ?>
<?php
if(isset($_POST['re_fpass'])){
  $type = $database->escape_value(htmlentities($_POST ['fpass']));
  $query_type = User::find_by_sql("SELECT id, rnumber, verification_email FROM all_students WHERE unique_id='{$type}' OR verification_email='{$type}' LIMIT 1");
  if($database->num_rows($query_type)>0){
    while($r=$database->fetch_array($query_type)){
      $_SESSION['identity'] = $r['id'];
      $_SESSION['user_rnumber'] = $r['rnumber'];
      $_SESSION['verification_email'] = $r['verification_email'];
      echo "<script> window.location='recover_fpass.php'; </script>";
    }
  }else{
    echo "<script> alert('Wrong Verification Email or Id'); window.location='fpass.php'; </script>";
  }
}
if(isset($_POST['update_pass'])){
  if(isset($_SESSION['unique_id']) && isset($_SESSION['identity'])){
    $pass = $database->escape_value(htmlentities($_POST ['pass']));
    $re_pass = $database->escape_value(htmlentities($_POST ['re_pass']));
    if(strlen($pass)<6){
      echo "<script> alert('Password too short, must be more than 6!'); window.location='recover_fpass.php'; </script>";
      die();
    }
    if($pass != $re_pass){
      echo "<script> alert('The two passwords mismatch!'); window.location='recover_fpass.php'; </script>";
      die();
    }
    $epassword = md5($pass);
    $user_unique_id = $_SESSION['unique_id'];
    $user_id = $_SESSION['identity'];
    $user_rnumber = $_SESSION['user_rnumber'];
    $verification_email = $_SESSION['verification_email'];
    $update = User::find_by_sql("UPDATE all_students SET verified = '1', pword='{$epassword}' WHERE unique_id = '$user_unique_id' AND id='{$user_id}' LIMIT 1");
        if($update){
            User::activated_account($user_rnumber, $user_unique_id, $verification_email, $pass);
            unset($_SESSION['unique_id']);
            unset($_SESSION['identify']);
            unset($_SESSION['user_rnumber']);
            unset($_SESSION['verification_email']);
            echo "<script> alert('Account Verified Successful, experience the best from our portal!'); window.location='account.php'; </script>";
          }
  }else{
    echo "<script> alert('Session timeout!'); window.location='index.php'; </script>";
  }
}


?>
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
                  <h1 class="nacoss-img-txt">NACOSS UNN</h1>
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
