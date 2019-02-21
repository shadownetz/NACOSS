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
                                            <h3 class="panel-title">Upload First Year Result <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span></h3>
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
                                                        <div class="col-sm-6">
                                                            <label style="float:left;">GSP 101 ( Use of English I )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="gsp101" class="form-control" >
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
                                                            <label style="float:left;">GSP 111 ( Use of Library )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="gsp111" class="form-control" >
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
                                                            <label style="float:left;">COS 101 ( Introduction to Computer Sci. )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="cos101" class="form-control" >
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
                                                            <label style="float:left;">MTH 111 ( Elementary Mathematics )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="mth111" class="form-control" >
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
                                                            <label style="float:left;">MTH 121 ( Elementary Mathematics II )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="mth121" class="form-control" >
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
                                                            <select name="ansc1" class="form-control" required>
                                                                <option value="">Select Auxillary 1 Course</option>
                                                                <option value="phy115">PHY 115 (General Physics I)</option>
                                                                <option value="phy191">PHY 191 (Practical Physics)</option>
                                                                <option value="bio151">BIO 151 (General Biology I)</option>
                                                                <option value="chm101">CHM 101 (Basic Chemistry I)</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="ansc1_ans" class="form-control" >
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
                                                            <select name="ansc2" class="form-control" required>
                                                                <option value="">Select Auxillary 2 Course</option>
                                                                <option value="phy115">PHY 115 (General Physics I)</option>
                                                                <option value="phy191">PHY 191 (Practical Physics)</option>
                                                                <option value="bio151">BIO 151 (General Biology I)</option>
                                                                <option value="chm101">CHM 101 (Basic Chemistry I)</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="ansc2_ans" class="form-control" >
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
                                                            <select name="elective" class="form-control" required>
                                                                <option value="">Select Elective Course</option>
                                                                <option value="eng101">ENG 101 (Introduction to Engr I)</option>
                                                                <option value="sta111">STA 111 (Probability 1)</option>
                                                                <option value="sta131">STA 131 (Inference)</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
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
                                                    <button class="nacoss-btn" name="upload_result_ff">Upload/Update Result</button>
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