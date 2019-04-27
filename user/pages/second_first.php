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
                                        <h3 class="panel-title">Upload Second Year Result <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span></h3>
                                        </div>
                                        <div class="panel-body">
                                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                                <fieldset>
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-md-8 col-sm-12" >
                                                            <label>LIST OF COURSES</label>
                                                        </div>
                                                        <div class="col-md-4 col-sm-12">
                                                            <label>GRADE</label>
                                                        </div>
                                                    </div>
                                                    <br><hr>
                                                    
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-md-8 col-sm-12">
                                                            <label>GSP 201 ( Basic Concepts & Theory of Peace )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="gsp201" class="form-control" >
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
                                                            <label>GSP 207 ( Humanities I )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="gsp207" class="form-control" >
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
                                                            <label>COS 201 ( Computer Programming I )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos201" class="form-control" >
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
                                                            <label>COS 251 ( Machine and Assembly Language )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos251" class="form-control" >
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
                                                            <label>MTH 215 ( Linear Algebra I )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="mth215" class="form-control" >
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
                                                            <label>STA 205 ( Statistics for Physical Sc. & Engr. I )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="sta205" class="form-control" >
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
                                                            <select name="elective1" class="form-control" required>
                                                                <option value="">Select Elective Course 1</option>
                                                                <option value="ee211">EE 211 (Basic Electrical Engineering)</option>
                                                                <option value="mth211">MTH 211 (Set Logic And Algebra)</option>
                                                                <option value="mth221">MTH 221 (Real Analysis I)</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
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
                                                        <div class="col-md-8 col-sm-12">
                                                            <select name="elective2" class="form-control" required>
                                                                <option value="">Select Elective Course 1</option>
                                                                <option value="ee211">EE 211 (Basic Electrical Engineering)</option>
                                                                <option value="mth211">MTH 211 (Set Logic And Algebra)</option>
                                                                <option value="mth221">MTH 221 (Real Analysis I)</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
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
                                                    
                                                    
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <button class="nacoss-btn" name="upload_result_sf">Upload/Update Result</button>
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