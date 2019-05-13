<?php
    echo "<script> alert('VOTING FORUM IS NOT YET OPEN!'); window.location='dashboard.php' </script>";
?>
<!-- Header -->
<?php include('includes/header.php'); ?>

<body>

    <div id="wrapper" style="overflow-x:hidden">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="page-header">VOTING SYSTEM</h3>
                        <?php include('includes/html/cast_vote.php'); ?>
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