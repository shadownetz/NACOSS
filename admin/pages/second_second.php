<?php include('includes/php/process_upload_result.php'); ?>
<?php
//$submit = array();
$old_course_tiltles_ss = array("COS 202 ( Computer Programming II )","COS 222 ( File Processing )","STA 206 (Statistics for Physical Sc. & Engr.)","STA 212 (Probability IV)","STA 272 (Statistical Computing II)","GSP 202 (Issues in Peace & Conflict Resolution)","GSP 208 ( Humanities II )","MTH 216 (Linear Algebra II)","MTH 222 ( Elementary Differential Equation I )","MTH 242 ( Mathematical Methods I )","MTH 206 (Andvaanced Mathematics VI)", "MTH 223 (Introduction to Numerical Analysis)", "PHY 262 (Intro. to Atomic and Nuclear Physics)");
$old_course_codes_ss = array("cos202","cos222","sta206","sta212","sta272","gsp202","gsp208","mth216","mth222","mth242","mth206","mth223","phy262");

$new_course_codes_ss = array("cos202","cos204","cos232","cos242","sta206","sta212","sta272","gsp202","gsp208","mth216","mth222","mth242","mth206","phy242","phy262");
$new_course_tiltles_ss = array("COS 202 ( Software Engineering I )","COS 204 (Introduction to Digital System Design)","COS 232 ( Data Structures )","COS 242 ( Data and Computer Communication )","STA 206 (Statistics for Physical Sc. & Engr.)","STA 212 (Probability IV)","STA 272 (Statistical Computing II)","GSP 202 (Issues in Peace & Conflict Resolution)","GSP 208 ( Humanities II )","MTH 216 (Linear Algebra II)","MTH 222 ( Elementary Differential Equation I )","MTH 242 ( Mathematical Methods I )","MTH 206 (Andvaanced Mathematics VI)","PHY 242 ( Waves )","PHY 262 (Intro. to Atomic and Nuclear Physics)");

$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}
$_SESSION['type'] = $type.'_second_yr_second_semester_results';
?>
<!-- Header -->
<?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form nacoss-new-discuss nacoss-upload">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Upload your result</h1>
                               
                        <div class="container" class="nacoss-new-discuss">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="result-panel panel panel-default">
                                        <div class="column">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Select All Your Second  <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span> Courses</h3>
                                        </div>
                                        <form action="add_grades_<?php echo $type; ?>.php" method="POST" role="form" enctype="multipart/form-data">
                                            <fieldset>

<?php
                                    if($result_type <= 2017){   //OLD REG NOs
                                        $count = 0;
                                        while($count < count($old_course_codes_ss)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $old_course_tiltles_ss[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $old_course_codes_ss[$count]; ?>" type="checkbox" value="<?php echo $old_course_codes_ss[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }else{  //NEW REG NOs
                                        $count = 0;
                                        while($count < count($new_course_codes_ss)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $new_course_tiltles_ss[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $new_course_codes_ss[$count]; ?>" type="checkbox" value="<?php echo $new_course_codes_ss[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }
    ?>
                                                <div>
                                                    <button class="nacoss-btn" name="proceed_ss">Proceed</button>
                                                </div>
                                            </fieldset>
                                            </form>
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