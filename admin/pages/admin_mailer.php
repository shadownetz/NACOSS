 
       <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php
require_once('includes/php/assign_variables.php');
$deliver_mail = false;
if ($user_type == "admin" || $user_type == "super_admin" && isset($_POST['send_mail'])) {
    $address = $database->escape_value($_POST ['address']);
    $msg = $database->escape_value($_POST ['msg']);

    if(!empty($address) && !empty($msg)){
        $deliver_mail = User::admin_mailer($address,$msg);
    }
}
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin Mailer Page</h1>
<?php
// if($deliver_mail){
//     echo "<script>alert('Message Delivered');</script>";
// }
?>
                        <div class="container nacoss-new-discuss">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-3">
                                    <div class="result-panel panel panel-default">
                                        <div class="panel-body">
                                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                                <fieldset>
                                                    <div class="form-group">
                                                    <input type="hidden" value="<?php echo $_GET["address"]; ?>" name="address">
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="msg">Message Here:&#63;</label>
                                                    <textarea class="form-control form-text" rows=3 placeholder="Type Here" name="msg" required></textarea>
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