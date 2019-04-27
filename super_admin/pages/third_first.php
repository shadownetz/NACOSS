<?php include('includes/php/process_upload_result.php'); ?>
<!-- Header -->
<?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper"  class="nacoss-form nacoss-new-discuss nacoss-upload">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Upload your result</h1>
                               
                        <div class="container" class="nacoss-new-discuss">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="result-panel panel panel-default">
                                        <div class="panel-heading">
                                        <h3 class="panel-title">Upload Third Year Result <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span></h3>
                                        </div>
                                        <div class="panel-body">
                                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                                <fieldset>
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-md-8 col-sm-12" >
                                                            <label>LIST OF COURSES</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <label>GRADE</label>
                                                        </div>
                                                    </div>
                                                    <br><hr>
                                                    
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-md-8 col-sm-12">
                                                            <label>COS 301 ( Introduction to Digital Design )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos301" class="form-control" >
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
                                                        <div class="col-md-8 col-sm-12">
                                                            <label>COS 303 ( Introduction to Micro Computer Sys. )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos303" class="form-control" >
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
                                                        <div class="col-md-8 col-sm-12">
                                                            <label>COS 311 ( Numerical Methods I )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos311" class="form-control" >
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
                                                        <div class="col-md-8 col-sm-12">
                                                            <label>COS 331 ( Compiler Construction )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos331" class="form-control" >
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
                                                        <div class="col-md-8 col-sm-12">
                                                            <label>COS 333 ( Operating Systems I )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos333" class="form-control" >
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
                                                        <div class="col-md-8 col-sm-12">
                                                            <label>COS 341 ( Computer Architecture )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos341" class="form-control" >
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
                                                        <div class="col-md-8 col-sm-12">
                                                            <label>CED 341 ( Introduction To Entrepreneurship )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="ced341" class="form-control" >
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
                                                        <div class="col-md-8 col-sm-12">
                                                            <select name="elective" class="form-control" required>
                                                                <option value="">Select Elective Course </option>
                                                                <option value="mth341">MTH 341 (Discrete Mathematics I)</option>
                                                                <option value="cos313">COS 313 (Switching Algebra & Discrete Structures)</option>
                                                                <option value="cos315">COS 315 (Operation Research I)</option>
                                                                <option value="cos321">COS 321 (Data Base Design & Management I)</option>
                                                                <option value="cos335">COS 335 (Systems Analysis & Design)</option>
                                                                <option value="ece311">ECE 311 (Circuit Theory I)</option>
                                                                <option value="ece321">ECE 321 (Physical Electronics)</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="elective_ans" class="form-control" >
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
                                                    <button class="nacoss-btn" name="upload_result_tf">Upload/Update Result</button>
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