<!-- Header -->
<?php include('includes/header.php'); ?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header center-text">Add News</h1>
                         <?php // require_once('includes/php/user_discussions.php'); ?>

                         <div class="nacoss-all-discuss nacoss-my-discuss news">
                            <div class="panel document-panel">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">
                                        <form class="nacoss-profile" method="POST" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
                                        <div class="row form-content">
                                            <div class="col-md-12 blk" style='background-image:url("../../images/default_news.png")' onmouseover="displayImageOverlay(this)" onmouseout="hideImageOverlay(this)">
                                            <div class="img-overlay animated fadeIn" >
                                                        <label class="inner-n-vsble">
                                                        Change Image<br><i class="fa fa-camera"></i>
                                                            <input class="profile-img form-control " name="file1" type="file">
                                                        </label>
                                                    </div>
                                            
                                            </div>
                                            <div class="col-md-12 txt">
                                                <label>News Title:</label>
                                                <input type="text" class="form-control" placeholder="Enter title here">
                                            </div>
                                            <div class="col-md-12 txt">
                                                <textarea class="form-control" placeholder="Enter news content"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-md-offset-4">
                                            <button type="submit" class="nacoss-btn">Add&nbsp;<i class="fa fa-plus"></i></button>
                                        </div>
                                        </form>

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