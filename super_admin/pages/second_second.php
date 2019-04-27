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
                                        <h3 class="panel-title">Upload Second Year Result <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span></h3>
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
                                                            <label>GSP 208 ( Humanities II )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="gsp208" class="form-control" >
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
                                                            <label>GSP 202 ( Issues in Peace & Conflict Resolution studies )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="gsp202" class="form-control" >
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
                                                            <label>COS 202 ( Computer Programming II )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos202" class="form-control" >
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
                                                            <label>COS 222 ( File Processing )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="cos222" class="form-control" >
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
                                                            <label>MTH 222 ( Elementary Differential Equation I )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="mth222" class="form-control" >
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
                                                            <label>MTH 242 ( Mathematical Methods I )</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <select name="mth242" class="form-control" >
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
                                                                <option value="">Select Elective Course</option>
                                                                <option value="mth216">MTH 216 (Linear Algebra II)</option>
                                                                <option value="sta206">STA 206 (Statistics for Physical Sc. & Engr.)</option>
                                                                
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
                                                    <button class="nacoss-btn" name="upload_result_ss">Upload/Update Result</button>
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