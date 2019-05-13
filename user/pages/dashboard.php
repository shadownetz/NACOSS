        <!-- Header -->
        <?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 nacoss-dash">
                        <h1 class="page-header text-center">Student's Portal</h1>
                        <a href="#">
                            <div class="col-md-3 col-sm-12 col-xs-12 box" >
                                <i class="fa fa-envelope fa-5x"></i>
                                <div class="noti-o"><?php if(!empty($total_unread_messages)){ echo $total_unread_messages; }else{ echo '0'; } ?></div>
                        </div>
                        </a>
                        <a href="#">
                            <div class="col-md-3 col-sm-12 col-xs-12 box">
                                <i class="fa fa-users fa-5x"></i>
                                <div class="noti-o"><?php if(isset($collect)){ echo count($collect); }else{ echo '0'; }  ?></div>
                            </div>
                        </a>
                        <a href="upload_document.php">
                            <div class="col-md-3 col-sm-12 col-xs-12 box">
                                <i class="fa fa-upload fa-5x"></i>
                                <!-- <div class="noti-o">5</div> -->
                            </div>
                        </a>
                        <a href="upload_result.php">
                            <div class="col-md-3 col-sm-12 col-xs-12 box" >
                                <i class="fa fa-file-word-o fa-5x"></i><i class="fa fa-arrow-up"></i>
                                <!-- <div class="noti-o">20</div> -->
                        </div>
                        </a>
                        <a href="cast_vote.php">
                            <div class="col-md-3 col-sm-12 col-xs-12 box">
                                <i class="fa fa-thumbs-o-up fa-5x"></i>
                                <!-- <div class="noti-o">5</div> -->
                            </div>
                        </a>
                        <a href="account_settings.php">
                            <div class="col-md-3 col-sm-12 col-xs-12 box">
                                <i class="fa fa-gear fa-5x"></i>
                                <!-- <div class="noti-o">5</div> -->
                            </div>
                        </a>
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