<?php require_once("../../includes/initialize.php"); ?>
<?php
if(!isset($_SESSION['id'])){
    header('location: ../../account.php');
}
if($_SESSION['user_location'] != "super_admin"){
    header('location: ../../account.php');
}

?>
<?php 
$update = User::find_by_sql("UPDATE all_students SET logged = NOW() WHERE id='$session->user_id'");
if(!isset($_SESSION['my_status'])){
    $update = User::find_by_sql("UPDATE all_students SET my_status = 'online' WHERE id='$session->user_id'");
}
?>
<?php
if(isset($_GET['logout'])){
    $update = User::find_by_sql("UPDATE all_students SET my_status = 'offline' WHERE id='$session->user_id'");
    $_SESSION = array();
    session_destroy();
    header("Location: ../../account.php");
}
?>
<?php
$query = User::find_by_sql("SELECT id, logged FROM all_students");
$count = mysqli_num_rows($query);
if($count > 0){
    //for($x=1; $x>=$count; $x++){
        while($row=mysqli_fetch_assoc($query)){
            $u_id = $row['id'];
            $last_logged = $row['logged'];
            $explode1 = explode(" ", $last_logged); $explode2 = explode("-", $explode1[0]); $logged_year = $explode2[0];
            $logged_month = $explode2[1]; $logged_day = $explode2[2];
            $explode3 = explode(":", $explode1[1]); $logged_hour = $explode3[0]; $logged_min = $explode3[1]; $logged_sec = $explode3[2];
            $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); $current_sec = date('s');
                
        //     $convert_days = 30 - $logged_day + $current_day;
        // if($convert_days > 1){
        //   //$delete_user = User::find_by_sql("DELETE FROM all_students WHERE id='$user_id'");
        // }
            //echo $current_hour." ".$logged_hour;
                if($current_year > $logged_year ){
                    $update_query = User::find_by_sql("UPDATE all_students SET my_status = 'offline' WHERE id = '$u_id'");
                }else if($current_year == $logged_year && $current_month > $logged_month){
                    $update_query = User::find_by_sql("UPDATE all_students SET my_status = 'offline' WHERE id = '$u_id'");
                }else if($current_month == $logged_month && $current_day > $logged_day){
                    $update_query = User::find_by_sql("UPDATE all_students SET my_status = 'offline' WHERE id = '$u_id'");
                }else if($current_day == $logged_day && $current_hour > $logged_hour){
                    $update_query = User::find_by_sql("UPDATE all_students SET my_status = 'offline' WHERE id = '$u_id'");
                }else if($current_hour == $logged_hour){
                    $diff = $current_min - $logged_min;
                    if($diff > 5){
                        $update_query = User::find_by_sql("UPDATE all_students SET my_status = 'offline' WHERE id = '$u_id'");
                    }
                }
            
        //}
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student's Portal</title>

      <!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="../../images/nacoss-ico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../images/nacoss-ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../images/nacoss-ico/favicon-16x16.png">
<link rel="manifest" href="../../images/nacoss-ico/site.webmanifest">
<link rel="mask-icon" href="../../images/nacoss-ico/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Animate Css -->
    <link href="../vendor/Animate/animate.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
       function printContent(el){
           var restorepage = document.body.innerHTML;
           var printcontent = document.getElementById(el).innerHTML;
           document.body.innerHTML = printcontent;
           window.print();
           document.body.innerHTML = restorepage;
       }

       function displayImageOverlay(id){
           id.firstElementChild.style.display = 'block'
       }

       function hideImageOverlay(id){
        id.firstElementChild.style.display = 'none'
       }
   </script>

</head>