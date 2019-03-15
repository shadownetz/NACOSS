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
                        <h1 class="page-header center-text">Manage News</h1>
                         <?php // require_once('includes/php/user_discussions.php'); ?>

                         <div class="nacoss-all-discuss nacoss-my-discuss">
                            <div class="panel document-panel">
                                    <!-- <div class="panel-heading"></div> -->
                                    <!-- <div class="panel-body"> -->
                                    <table class="table table-responsive" id="dataTables-example">
                                        <thead class="panel-heading">
                                            <tr>
                                                <td class="no-border">News Title</td>
                                                <td class="no-border">News Content</td>
                                                <td class="no-border">News Image</td>
                                                <td class="no-border">Control</td>
                                                <td class="no-border">Control</td>
                                            </tr>
                                        </thead>
                                        <tbody class="panel-body">
                                            <!-- List of all news -->
                                            <tr>
                                                <td>Title</td>
                                                <td>Content</td>
                                                <td>
                                                    <div style="background-color:rgb(200,200,200);text-align:center;border-radius:10px">
                                                        <img src="../../images/default_news.png" width="50px">
                                                        </div>
                                                    </td>
                                                <td><a href="#"><button class="nacoss-btn">Update&nbsp;<i class="fa fa-clone"></i></button></a></td>
                                                <td><a href="#"><button class="nacoss-btn border-danger">Delete&nbsp;<i class="fa fa-close"></i></button></a></td>
                                            </tr>

                                            <!-- List of all news -->
                                            <tr>
                                                <td>Title</td>
                                                <td>Content</td>
                                                <td>
                                                    <div style="background-color:rgb(200,200,200);text-align:center;border-radius:10px">
                                                        <img src="../../images/default_news.png" width="50px">
                                                        </div>
                                                    </td>
                                                <td><a href="#"><button class="nacoss-btn">Update&nbsp;<i class="fa fa-clone"></i></button></a></td>
                                                <td><a href="#"><button class="nacoss-btn border-danger">Delete&nbsp;<i class="fa fa-close"></i></button></a></td>
                                            </tr>
                                        </tbody>
                                        </table>
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