<?php include('includes/php/process_upload_result.php'); ?>
<?php
//$submit = array();
$old_course_tiltles_tf = array("COS 301 (Introduction to Digital Design)","COS 303 (Introduction to Microcomputer)","COS 311 (Numerical Methods)","COS 331 (Compiler Construction)","COS 333 (Operating System)","COS 341 (Computer Architecture)","COS 315 (Operation Research I)","COS 321 (Data Base Design & Management I)","COS 335 (Systems Analysis & Design)","COS 313 (Switching Algebra I)","COS 314 (Switching Algebra II)","COS 312 (Switching Algebra I)", "COS 352 (Data Structures)", "COS 332 (Operating System I)", "CED 341 (Introduction to Enterpreneurship I)", "ECE 311 (Circuit Theory I)", "ECE 321 (Physical Electronics)", "PHY 301 (Methods of Theoritical Physics I)", "PHY 321 (Relativity Physics)", "PHY 351 (Electronics)", "PHY 393 (Workshop Course I)", "PHY 334 (Thermal Physics)", "PHY 391 (Practical Physics)", "MTH 341 (Discrete Mathematics)", "MTH 311 (Abstract Algebra)", "MTH 322 (Elementary Diffrential Eqn.)", "MTH 332 (Optimization Theory)", "MTH 331 (Intro. to Mathematical Modeling", "MTH 321 (Metric Space Topology)", "MTH 334 (Analytical Dynamics)", "STA 311 (Probability V)", "STA 321 (Distribution Theory)", "STA 331 (Inference V)", "STA 341 (Sampling Theory & Survey Method I)");
$old_course_codes_tf = array("cos301", "cos303", "cos311", "cos331", "cos333", "cos341", "cos315", "cos321", "cos335", "cos313", "cos314", "cos312", "cos352", "cos332", "ced341", "ece311", "ece321", "phy301", "phy321", "phy351", "phy393", "phy334", "phy391", "mth341", "mth311", "mth322", "mth332", "mth331", "mth321", "mth334", "sta311", "sta321", "sta331", "sta341");

$new_course_codes_tf = array("cos311","cos331","cos333","cos335","cos337","cos351","cos341","ced341","phy301","phy321","phy351","phy393","phy331","mth327","mth331","mth321","mth337","mth339","sta311","sta321","sta331");
$new_course_tiltles_tf = array("COS 311 (Switching Algebra & Discrete Structures)","COS 331 (Operating Systems)","COS 333 (Software Engineering II)","COS 335 (Automata Theory and Formal Languages	)","COS 337 (Artificial Intelligence I)","COS 351 (Laboratory for Digital System Design)","COS 341 (Switching Algebra and Discrete Mathematics I)","CED 341 (Introduction to Entrepreneurship)","PHY 301 (Methods of Theoritical Physics I)","PHY 321 (Relativity Physics)","PHY 351 (Electronics)","PHY 393 (Workshop course I (Mechanical))","PHY 331 (Thermal Physics)","MTH 327 (Elementary Differential Equations II)","MTH 331 (Intro. to Mathematical Modeling)","MTH 321 (Metric Space Topology)","MTH 337 (Optimization Theory I)","MTH 339 (Analytical Dynamics)","STA 311 (Probability V)","STA 321 (Distribution Theory)","STA 331 (Inference IV)");

$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}
$_SESSION['type'] = $type.'_third_yr_first_semester_results';
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
                                            <h3 class="panel-title">Select All Your Third Year <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span> Courses</h3>
                                        </div>
                                        <form action="add_grades_<?php echo $type; ?>.php" method="POST" role="form" enctype="multipart/form-data">
                                            <fieldset>

<?php
                                    if($result_type <= 2017){   //OLD REG NOs
                                        $count = 0;
                                        while($count < count($old_course_codes_tf)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $old_course_tiltles_tf[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $old_course_codes_tf[$count]; ?>" type="checkbox" value="<?php echo $old_course_codes_tf[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }else{  //NEW REG NOs
                                        $count = 0;
                                        while($count < count($new_course_codes_tf)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $new_course_tiltles_tf[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $new_course_codes_tf[$count]; ?>" type="checkbox" value="<?php echo $new_course_codes_tf[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }
    ?>
                                                <div>
                                                    <button class="nacoss-btn" name="proceed_tf">Proceed</button>
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