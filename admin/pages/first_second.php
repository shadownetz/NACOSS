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
                                        <h3 class="panel-title">Upload First Year Result <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span></h3>
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
                                                            <label style="float:left;">GSP 102 ( Use of English II )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="gsp102" class="form-control" >
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
                                                            <label style="float:left;">COS 102 ( Introduction to Computer System )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="cos102" class="form-control" >
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
                                                            <label style="float:left;">COS 104 ( Computing Practice )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="cos104" class="form-control" >
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
                                                            <label style="float:left;">MTH 122 ( Elementary Mathematics III )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="mth122" class="form-control" >
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
                                                            <label style="float:left;">PHY 116 ( General Physics II )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="phy116" class="form-control" >
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
                                                            <label style="float:left;">PHY 118 ( General Physics III )</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="phy118" class="form-control" >
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
                                                                <option value="">Select Elective Course</option>
                                                                <option value="bio152">BIO 152 (General Biology II)</option>
                                                                <option value="chm112">CHM 112 (Basic Principles of Chemistry II)</option>
                                                                <option value="eng102">ENG 102 (Applied Mechanics)</option>
                                                                <option value="mth132">MTH 132 (Elementary Mathematics IV)</option>
                                                                <option value="sta112">STA 112 (Probability II)</option>
                                                                <option value="sta132">STA 132 (Inference II)</option>
                                                                <option value="sta172">STA 172 (Laboratory for Inference I)</option>
                                                                
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
                                                            <select name="elective2" class="form-control" >
                                                                <option value="">Select Elective Course</option>
                                                                <option value="bio152">BIO 152 (General Biology II)</option>
                                                                <option value="chm112">CHM 112 (Basic Principles of Chemistry II)</option>
                                                                <option value="eng102">ENG 102 (Applied Mechanics)</option>
                                                                <option value="mth132">MTH 132 (Elementary Mathematics IV)</option>
                                                                <option value="sta112">STA 112 (Probability II)</option>
                                                                <option value="sta132">STA 132 (Inference II)</option>
                                                                <option value="sta172">STA 172 (Laboratory for Inference I)</option>
                                                                
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
                                                    
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <button class="nacoss-btn" name="upload_result_fs">Upload/Update Result</button>
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