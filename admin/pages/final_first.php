<?php include('includes/php/process_upload_result.php'); ?>
<?php
//$submit = array();
$old_course_tiltles_final_f = array("COS 451 ( Algorithms )","COS 461 ( Org. of Programming Languages )","COS 471 ( Project )","COS 411 (Numerical Methods)","COS 415 (Systems Modelling & Simulation)","COS 413 (Queing Theory)","COS 431 (Software Engineering & Management)","COS 453 (Computer Process Control)","COS 455 (Data Communication & Networks I)","COS 457 (Computer Graphics)","COS 472 (Project)","MTH 451 (Project)","MTH 421 (Ordinary Diffrential Equation)","MTH 422 (Functional Analysis)","MTH 425 (Lebesgue Measure and Integration)","PHY 463 (Project)","PHY 401 (Computational Physics)","PHY 402 (General Physics)","PHY 421 (Analytical Mechanics)","PHY 451 (Electromagnetic Theory)","PHY 461 (Quantum Mechanics)","STA 491 (Project)","STA 412 (Stochastic Processes)","STA 421 (Design and Analysis of Experiment I)","STA 425 (Analysis of Variance II)","STA 432 (Non Parametric Methods I)","STA 433 (Multivariate Analysis I)","STA 441 (Sampling Theory and Survey Methods III)");
$old_course_codes_final_f = array("cos451","cos461","cos471","cos411","cos415","cos413","cos431","cos453","cos455","cos457","cos472","mth451","mth421","mth422","mth425","phy463","phy401","phy402","phy421","phy451","phy461","sta491","sta412","sta421","sta425","sta432","sta433","sta441");

$new_course_codes_final_f = array("cos417","cos419","cos421","cos431","cos435","cos441","cos463","cos411","cos413","cos415","cos437","cos439","cos461","cos471","sta411","sta413","sta415","sta421","sta423","sta433","sta435","sta441","mth421","mth425","mth427","mth429","phy401","phy403","phy421","phy451","phy461");
$new_course_tiltles_final_f = array("COS 417 (Computer System Performance Evaluation)","COS 419 (Operations Research)","COS 421 (Database Design and Management)","COS 431 (Algorithms)","COS 435 (Computer Graphics and Animation)","COS 441 (Advanced Computer Networks)","COS 463 (Structured Programming)","COS 411 (Numerical Methods)","COS 413 (Systems Modeling and Simulation)","COS 415 (Computer Process control)","COS 437 (Project Management)","COS 439 (Game Programming)","COS 461 (Organization of Programming Languages)","COS 471 (Web Application Development)","STA 411 (Probability VI)","STA 413 (Stochastic Processes I)","STA 415 (Time Series Analysis I)","STA 421 (Design and Analysis of Experiment I)","STA 423 (Regression Analysis)","STA 433 (Multivariate Analysis I)","STA 435 (Non Parametric Methods I)","STA 441 (Sampling Theory & Survey Methods II)","MTH 421 (Ordinary Differential Equations)","MTH 425 (Lebesgue Measure and Integration)","MTH 427 (Field Theory in Mathematical Physics)","MTH 429 (Functional Analysis)","PHY 401 (Computational Physics)","PHY 403 (General Physics)","PHY 421 (Analytical Mechanics)","PHY 451 (Electromagnetic Theory)","PHY 461 (Quantum Mechanics II)");

$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}
$_SESSION['type'] = $type.'_final_yr_first_semester_results';
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
                                            <h3 class="panel-title">Select All Your Final Year <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span> Courses</h3>
                                        </div>
                                        <form action="add_grades_<?php echo $type; ?>.php" method="POST" role="form" enctype="multipart/form-data">
                                            <fieldset>

<?php
                                    if($result_type <= 2017){   //OLD REG NOs
                                        $count = 0;
                                        while($count < count($old_course_codes_final_f)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $old_course_tiltles_final_f[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $old_course_codes_final_f[$count]; ?>" type="checkbox" value="<?php echo $old_course_codes_final_f[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }else{  //NEW REG NOs
                                        $count = 0;
                                        while($count < count($new_course_codes_final_f)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $new_course_tiltles_final_f[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $new_course_codes_final_f[$count]; ?>" type="checkbox" value="<?php echo $new_course_codes_final_f[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }
    ?>
                                                <div>
                                                    <button class="nacoss-btn" name="proceed_final_f">Proceed</button>
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