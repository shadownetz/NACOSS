<!-- Header -->
        <?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>
<?php
if(isset($_GET['com'])){
    $com = $_GET['com'];
    $explode = explode("bash3x", $com);
        $user_id = $explode[1];
    $result_set = $result_set = User::find_by_sql("UPDATE private_discussions SET status='1' WHERE id='$user_id' ");
    if($result_set){
        echo "<script> alert('User Confirmed Successfully'); window.location='new_private_user.php'; </script>";
    }
}
if(isset($_GET['rem'])){
    $rem = $_GET['rem'];
    $explode = explode("bull3x", $rem);
    print_r($explode);
        $user_id = $explode[1];
    $result_set = $result_set = User::find_by_sql("UPDATE private_discussions SET status='10' WHERE id='$user_id' ");
    if($result_set){
        echo "<script> alert('User Removed Successfully'); window.location='new_private_user.php'; </script>";
    }
}
     
?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Group Members</h1>
                        <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-1">
                                <div class="document-panel panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">New Users</h3>
                                    </div>
                                    <div class="panel-body">
                                    <?php
                                        $session_student = $_SESSION['rnumber'];
                                        $discussion_id = $_SESSION['private_id'];

                                    $result_set = User::find_by_sql("SELECT * FROM private_discussions WHERE discussion_id='$discussion_id' AND status='0'");
                                        $rand = rand();
                                        $counter = 1;
                                        while ( $row = $database->fetch_array($result_set)) {
                                            $user_id = $row['id'];
                                            $user_uname = $row['uname'];
                                            $user_rnumber = $row['rnumber'];
                                    ?>

                                                    <div class="column">
                                                        <div class="col-sm-1" >
                                                            <h5 style="float:left;"><?php echo $counter;?></h5>
                                                        </div>
                                                        <div class="col-sm-4" >
                                                            <h5 style="float:left;"><?php echo $user_uname;?></h5>
                                                        </div>
                                                        <div class="col-sm-3" >
                                                            <h5 style="float:left;"><?php echo $user_rnumber;?></h5>
                                                        </div>
                                                        <div class="col-sm-2" >
                                                            <h5 style="float:left;"><a href="?com=bash3x<?php echo $user_id; ?>&bull=<?php echo $rand; ?>" style="color:green;">Confirm</a></h5>
                                                        </div>
                                                        <div class="col-sm-2" >
                                                            <h5 style="float:left;"><a href="?rem=bull3x<?php echo $user_id; ?>&bash=<?php echo $rand; ?>" style="color:red;">Decline</a></h5>
                                                        </div>
                                                    </div>
                                        <?php
                                            $rand = rand();
                                            $counter++;
                                    }
                                        ?>

                                    </div>
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