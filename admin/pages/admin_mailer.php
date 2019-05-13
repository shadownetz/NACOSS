 
       <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php
require_once('includes/php/assign_variables.php');
if(isset($_GET["address"])){
    $_SESSION['address'] = $database->escape_value($_GET["address"]);
    echo "<script> window.location='admin_mailer.php'; </script>";
}
$deliver_mail = false;
if ($user_type == "admin" || $user_type == "super_admin" && isset($_POST['send_mail'])) {
    $address = $_SESSION['address'];
    $msg = $database->escape_value($_POST ['msg']);

    if(!empty($address) && !empty($msg)){
        $deliver_mail = User::admin_mailer($address,$msg);
        if($deliver_mail){
            echo "<script> alert('Mail sent successfully'); </script>";
            unset($_SESSION['address']);
        }
    }
}
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin Mailer Page</h1>
                        <div class="container nacoss-new-discuss">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-2">
                                    <div class="result-panel panel panel-default">
                                        <div class="panel-heading"></div>
                                        <div class="panel-body">
                                            <form class="nacoss-profile" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                                <fieldset class="form-content">
                                                    <div class="form-group">
                                                    <label for="msg">Write Message::</label>
                                                    <textarea class="form-control" rows=3 placeholder="Type Here" name="msg" required></textarea>
                                                    </div>
                                                    
                                                    <button class="nacoss-btn" name="send_mail" style="width:100%">Send Mail</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>