<?php include('includes/php/process_upload_result.php'); ?>
<?php
//$submit = array();
$old_course_tiltles_ts = array("COS 352 (Data Structures)", "COS 372 (Laboratory for Digital Design)", "COS 374 (Student Industrial Work Experience)", "COS 314 (Switching Algebra and Discrete Struct. II)", "COS 316 (Automata Theory & Formal Languages)", "COS 322 (Data Base Design & Management II)", "COS 334 (Operating System II)", "COS 342 (Computer Architecture II)", "CED 342 (Introduction to Entrepreneurship II)", "ECE 312 (Circuit Theory II)", "ECE 332 (Applied Electronics)", "MTH 342 (Discrete Mathematics)", "MTH 312 (Abstract Algebra II)", "MTH 326 (Real Analysis II)", "MTH 333 (Optimization Theory)", "MTH 335 (Dynamics of Rigid Body)", "PHY 302 (Methods of Theoritical Physics)", "PHY 361 (Quantum Mechanics I)", "PHY 381 (Introduction to Astronomy)", "PHY 394 (Workshop Course II)", "PHY 395 (Measurement and Instrumentations)", "STA 312 (Probability VI)", "STA 323 (Analysis of Variance)", "STA 332 (Inference VI)", "STA 342 (Sampling Theory & Survey Methods II)", "STA 343 (Laboratory and Field Work for Sampling Theory and Survey Methods)");
$old_course_codes_ts = array("cos352","cos372","cos374","cos314","cos316","cos322","cos334","cos342","ced342","ece312","ece332","mth342","mth312","mth326","mth333","mth335","phy302","phy361","phy381","phy394","phy395","sta312","sta323","sta332","sta342","sta343");

$new_course_codes_ts = array("cos382","cos384","cos386");
$new_course_tiltles_ts = array("COS 382 (Students Industrial Work Experience Scheme)", "COS 384 (Technical SIWES Report)", "COS 386 (SIWES Seminar)");

$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}
$_SESSION['type'] = $type.'_third_yr_second_semester_results';
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
                                            <h3 class="panel-title">Select All Your Third Year <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span> Courses</h3>
                                        </div>
                                        <form action="add_grades_<?php echo $type; ?>.php" method="POST" role="form" enctype="multipart/form-data">
                                            <fieldset>

<?php
                                    if($result_type <= 2017){   //OLD REG NOs
                                        $count = 0;
                                        while($count < count($old_course_codes_ts)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $old_course_tiltles_ts[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $old_course_codes_ts[$count]; ?>" type="checkbox" value="<?php echo $old_course_codes_ts[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }else{  //NEW REG NOs
                                        $count = 0;
                                        while($count < count($new_course_codes_ts)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $new_course_tiltles_ts[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $new_course_codes_ts[$count]; ?>" type="checkbox" value="<?php echo $new_course_codes_ts[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }
    ?>
                                                <div>
                                                    <button class="nacoss-btn" name="proceed_ts">Proceed</button>
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