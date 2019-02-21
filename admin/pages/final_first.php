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
                                        <h3 class="panel-title">Upload Final Year Result <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span></h3>
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
                                                            <label>COS 451 ( Algorithms )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="cos451" class="form-control" >
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
                                                            <label>COS 461 ( Org. of Programming Languages )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="cos461" class="form-control" >
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
                                                            <label>COS 471 ( Project )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="cos471" class="form-control" >
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
                                                                <option value="cos415">COS 415 (Systems Modelling & Simulation)</option>
                                                                <option value="cos411">COS 411 (Numerical Methods)</option>
                                                                <option value="cos413">COS 413 (Queing Theory)</option>
                                                                <option value="cos431">COS 431 (Software Engineering & Management)</option>
                                                                <option value="cos453">COS 453 (Computer Process Control)</option>
                                                                <option value="cos455">COS 455 (Data Communication & Networks I)</option>
                                                                <option value="cos457">COS 457 (Computer Graphics)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective1_ans" class="form-control" >
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
                                                                <option value="cos415">COS 415 (Systems Modelling & Simulation)</option>
                                                                <option value="cos411">COS 411 (Numerical Methods)</option>
                                                                <option value="cos413">COS 413 (Queing Theory)</option>
                                                                <option value="cos431">COS 431 (Software Engineering & Management)</option>
                                                                <option value="cos453">COS 453 (Computer Process Control)</option>
                                                                <option value="cos455">COS 455 (Data Communication & Networks I)</option>
                                                                <option value="cos457">COS 457 (Computer Graphics)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective2_ans" class="form-control" >
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
                                                                <option value="cos415">COS 415 (Systems Modelling & Simulation)</option>
                                                                <option value="cos411">COS 411 (Numerical Methods)</option>
                                                                <option value="cos413">COS 413 (Queing Theory)</option>
                                                                <option value="cos431">COS 431 (Software Engineering & Management)</option>
                                                                <option value="cos453">COS 453 (Computer Process Control)</option>
                                                                <option value="cos455">COS 455 (Data Communication & Networks I)</option>
                                                                <option value="cos457">COS 457 (Computer Graphics)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective3_ans" class="form-control" >
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
                                                                <option value="cos415">COS 415 (Systems Modelling & Simulation)</option>
                                                                <option value="cos411">COS 411 (Numerical Methods)</option>
                                                                <option value="cos413">COS 413 (Queing Theory)</option>
                                                                <option value="cos431">COS 431 (Software Engineering & Management)</option>
                                                                <option value="cos453">COS 453 (Computer Process Control)</option>
                                                                <option value="cos455">COS 455 (Data Communication & Networks I)</option>
                                                                <option value="cos457">COS 457 (Computer Graphics)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective4_ans" class="form-control" >
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
                                                                <option value="cos415">COS 415 (Systems Modelling & Simulation)</option>
                                                                <option value="cos411">COS 411 (Numerical Methods)</option>
                                                                <option value="cos413">COS 413 (Queing Theory)</option>
                                                                <option value="cos431">COS 431 (Software Engineering & Management)</option>
                                                                <option value="cos453">COS 453 (Computer Process Control)</option>
                                                                <option value="cos455">COS 455 (Data Communication & Networks I)</option>
                                                                <option value="cos457">COS 457 (Computer Graphics)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="elective5_ans" class="form-control" >
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
                                                    <button class="nacoss-btn" name="upload_result_finalf">Upload/Update Result</button>
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