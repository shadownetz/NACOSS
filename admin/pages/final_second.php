<?php include('includes/php/process_upload_result.php'); ?>
<?php
//$submit = array();
$old_course_tiltles_final_s = array("COS 452 ( Computer Centre Management )","COS 462 ( Structured Programming )","COS 432 (Compiler Construction)","COS 454 (Artificial Intelligence)","COS 414 (Operation Research II)","COS 412 (Computer Performance Evaluation)","COS 458 (Expert Systems)","COS 464 (Concurrent Programming)","COS 472 (Advanced Digital Laboratory)","COS 456 (Data Comm. & Networking II.)","STA 414 (Stochastic Processes II)","STA 422 Design and Analysis of Experiments II)","STA 436 (Non Parametric Methods II)","STA 434 (Multivariable Analysis II)","STA 442 (Sampling Theory and Survey Methods IV","MTH 423 (Partial Diffrential Equations)","MTH 411 (Abstract Algebra II)","MTH 424 (General Topology)","MTH 426 (Measure Theory)","PHY 411 (Solid State Physics II)","PHY 431 (Statistical Physics)","PHY 462(Nuclear Physics)","PHY 492 (Practical Physics)");
$old_course_codes_final_s = array("cos452","cos462","cos432","cos454","cos414","cos412","cos458","cos464","cos472","cos456","sta414","sta422","sta436","sta434","sta442","mth423","mth411","mth424","mth426","phy411","phy431","phy462","phy492");

$new_course_codes_final_s = array("cos438","cos490","cos452","ced342","cos434","cos436","cos442","cos444","cos464","sta492","sta416","sta422","sta434","sta452","sta414","mth452","mth428","mth326","mth312","phy412","phy494","phy438","phy462","phy492");
$new_course_tiltles_final_s = array("COS 438 (Artificial Intelligence II)","COS 490 (Project)","COS 452 (Advanced Digital Laboratory)","COS 342 (Business Development & Management)","COS 434 (Compiler Construction)","COS 436 (Expert Systems)","COS 442 (Mobile Communications)","COS 444 (Computer Network Security)","COS 464 (Concurrent Programming)","STA 492 (Project)","STA 416 (Time Series Analysis II)","STA 422 (Design and Analysis of Experiment II)","STA 434 (Multivariate Analysis II)","STA 452 (Medical Statistics)","STA 414 (Stochastic Process II)","MTH 452 (Project)","MTH 428 (Partial Differential Equations)","MTH 326 (Real Analysis II)","MTH 312 (Abstract Algebra II)","PHY 412 (Solid State Physics)","PHY 494 (Project)","PHY 438 (Statistical Physics)","PHY 462 (Nuclear Physics)","PHY 492 (Practical Physics)");

$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}
$_SESSION['type'] = $type.'_final_yr_second_semester_results';
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
                                            <h3 class="panel-title">Select All Your Final Year <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span> Courses</h3>
                                        </div>
                                        <form action="add_grades_<?php echo $type; ?>.php" method="POST" role="form" enctype="multipart/form-data">
                                            <fieldset>

<?php
                                    if($result_type <= 2017){   //OLD REG NOs
                                        $count = 0;
                                        while($count < count($old_course_codes_final_s)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $old_course_tiltles_final_s[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $old_course_codes_final_s[$count]; ?>" type="checkbox" value="<?php echo $old_course_codes_final_s[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }else{  //NEW REG NOs
                                        $count = 0;
                                        while($count < count($new_course_codes_final_s)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $new_course_tiltles_final_s[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $new_course_codes_final_s[$count]; ?>" type="checkbox" value="<?php echo $new_course_codes_final_s[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }
    ?>
                                                <div>
                                                    <button class="nacoss-btn" name="proceed_final_s">Proceed</button>
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

<?php include('includes/php/process_upload_result.php'); ?>
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
                                        <div class="panel-heading">
                                        <h3 class="panel-title">Upload Final Year Result <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span></h3>
                                        </div> 
                                        <div class="panel-body">
                                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                                <fieldset>
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-6" >
                                                            <label>LIST OF COURSES</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>GRADE</label>
                                                        </div>
                                                    </div>
                                                    <br><hr>
                                                    
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label>COS 452 ( Computer Centre Management )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="cos452" class="form-control" required>
                                                                  <option value="">Select Grade</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="C">C</option>
                                                                  <option value="D">D</option>
                                                                  <option value="F">F</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label>COS 462 ( Structured Programming )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="cos462" class="form-control" required>
                                                                  <option value="">Select Grade</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="C">C</option>
                                                                  <option value="D">D</option>
                                                                  <option value="F">F</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <select name="elective1" class="form-control" required>
                                                                <option value="">Select Elective Course 1 </option>
                                                                <option value="cos432">COS 432 (Compiler Construction)</option>
                                                                <option value="cos454">COS 454 (Artificial Intelligence)</option>
                                                                <option value="cos414">COS 414 (Operation Research II)</option>
                                                                <option value="cos412">COS 412 (Computer Performance Evaluation)</option>
                                                                <option value="cos458">COS 458 (Expert Systems)</option>
                                                                <option value="cos464">COS 464 (Concurrent Programming)</option>
                                                                <option value="cos472">COS 472 (Advanced Digital Laboratory)</option>
                                                                <option value="cos456">COS 456 (Data Comm. & Networking II.)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective1_ans" class="form-control" required>
                                                                  <option value="">Select Grade</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="C">C</option>
                                                                  <option value="D">D</option>
                                                                  <option value="F">F</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <select name="elective2" class="form-control" required>
                                                                <option value="">Select Elective Course 2 </option>
                                                                <option value="cos432">COS 432 (Compiler Construction)</option>
                                                                <option value="cos454">COS 454 (Artificial Intelligence)</option>
                                                                <option value="cos414">COS 414 (Operation Research II)</option>
                                                                <option value="cos412">COS 412 (Computer Performance Evaluation)</option>
                                                                <option value="cos458">COS 458 (Expert Systems)</option>
                                                                <option value="cos464">COS 464 (Concurrent Programming)</option>
                                                                <option value="cos472">COS 472 (Advanced Digital Laboratory)</option>
                                                                <option value="cos456">COS 456 (Data Comm. & Networking II.)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective2_ans" class="form-control" required>
                                                                  <option value="">Select Grade</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="C">C</option>
                                                                  <option value="D">D</option>
                                                                  <option value="F">F</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <select name="elective3" class="form-control" required>
                                                                <option value="">Select Elective Course 3 </option>
                                                                <option value="cos432">COS 432 (Compiler Construction)</option>
                                                                <option value="cos454">COS 454 (Artificial Intelligence)</option>
                                                                <option value="cos414">COS 414 (Operation Research II)</option>
                                                                <option value="cos412">COS 412 (Computer Performance Evaluation)</option>
                                                                <option value="cos458">COS 458 (Expert Systems)</option>
                                                                <option value="cos464">COS 464 (Concurrent Programming)</option>
                                                                <option value="cos472">COS 472 (Advanced Digital Laboratory)</option>
                                                                <option value="cos456">COS 456 (Data Comm. & Networking II.)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective3_ans" class="form-control" required>
                                                                  <option value="">Select Grade</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="C">C</option>
                                                                  <option value="D">D</option>
                                                                  <option value="F">F</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <select name="elective4" class="form-control" required>
                                                                <option value="">Select Elective Course 4 </option>
                                                                <option value="cos432">COS 432 (Compiler Construction)</option>
                                                                <option value="cos454">COS 454 (Artificial Intelligence)</option>
                                                                <option value="cos414">COS 414 (Operation Research II)</option>
                                                                <option value="cos412">COS 412 (Computer Performance Evaluation)</option>
                                                                <option value="cos458">COS 458 (Expert Systems)</option>
                                                                <option value="cos464">COS 464 (Concurrent Programming)</option>
                                                                <option value="cos472">COS 472 (Advanced Digital Laboratory)</option>
                                                                <option value="cos456">COS 456 (Data Comm. & Networking II.)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective4_ans" class="form-control" required>
                                                                  <option value="">Select Grade</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="C">C</option>
                                                                  <option value="D">D</option>
                                                                  <option value="F">F</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <select name="elective5" class="form-control" required>
                                                                <option value="">Select Elective Course 5 </option>
                                                                <option value="cos432">COS 432 (Compiler Construction)</option>
                                                                <option value="cos454">COS 454 (Artificial Intelligence)</option>
                                                                <option value="cos414">COS 414 (Operation Research II)</option>
                                                                <option value="cos412">COS 412 (Computer Performance Evaluation)</option>
                                                                <option value="cos458">COS 458 (Expert Systems)</option>
                                                                <option value="cos464">COS 464 (Concurrent Programming)</option>
                                                                <option value="cos472">COS 472 (Advanced Digital Laboratory)</option>
                                                                <option value="cos456">COS 456 (Data Comm. & Networking II.)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective5_ans" class="form-control" required>
                                                                  <option value="">Select Grade</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="C">C</option>
                                                                  <option value="D">D</option>
                                                                  <option value="F">F</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <select name="elective6" class="form-control" required>
                                                                <option value="">Select Elective Course 5 </option>
                                                                <option value="cos432">COS 432 (Compiler Construction)</option>
                                                                <option value="cos454">COS 454 (Artificial Intelligence)</option>
                                                                <option value="cos414">COS 414 (Operation Research II)</option>
                                                                <option value="cos412">COS 412 (Computer Performance Evaluation)</option>
                                                                <option value="cos458">COS 458 (Expert Systems)</option>
                                                                <option value="cos464">COS 464 (Concurrent Programming)</option>
                                                                <option value="cos472">COS 472 (Advanced Digital Laboratory)</option>
                                                                <option value="cos456">COS 456 (Data Comm. & Networking II.)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective6_ans" class="form-control" required>
                                                                  <option value="">Select Grade</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="C">C</option>
                                                                  <option value="D">D</option>
                                                                  <option value="F">F</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <button class="nacoss-btn" name="upload_result_finals">Upload/Update Result</button>
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