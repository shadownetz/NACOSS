<!-- Header -->
<?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>
        
        <?php $session_student = $_SESSION['rnumber']; ?>
<?php 
        
global $session_student;
        
        
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_first_first";
        
        $check_query = $database->query_results("SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if($check_query){
            if(mysqli_num_rows($check_query)>0){
            
                while($row = mysqli_fetch_assoc($check_query)){
                    
                    
                        $gsp101 = $row['gsp101'];
                        $gsp111 = $row['gsp111'];
                        $cos101 = $row['cos101'];
                        $mth111 = $row['mth111'];
                        $mth121 = $row['mth121'];
                    
                

                        $ansc1 = $row['ansc1'];
                            if($ansc1 == "phy115" ){
                                $new_ansc1 = "PHY 115 (General Physics I)";
                            }else if($ansc1 == "phy191" ){
                                $new_ansc1 = "PHY 191 (Practical Physics)";
                            }else if($ansc1 == "bio151" ){
                                $new_ansc1 = "BIO 151 (General Biology I)";
                            }else if($ansc1 == "chm101" ){
                                $new_ansc1 = "CHM 101 (Basic Chemistry I)";
                            }else{
                                $new_ansc1 = $ansc1;
                            }
                    
                        $ansc1_ans = $row['ansc1_ans'];

                        $ansc2 = $row['ansc2'];
                            if($ansc2 == "phy115" ){
                                $new_ansc2 = "PHY 115 (General Physics I)";
                            }else if($ansc2 == "phy191" ){
                                $new_ansc2 = "PHY 191 (Practical Physics)";
                            }else if($ansc2 == "bio151" ){
                                $new_ansc2 = "BIO 151 (General Biology I)";
                            }else if($ansc2 == "chm101" ){
                                $new_ansc2 = "CHM 101 (Basic Chemistry I)";
                            }else{
                                $new_ansc2 = $ansc2;
                            }
                    
                        $ansc2_ans = $row['ansc2_ans'];
                    
                        $elective = $row['elective'];
                            if($elective == "eng101" ){
                                $new_elective = "ENG 101 (Introduction to Engr I)";
                            }else if($elective == "sta111" ){
                                $new_elective = "STA 111 (Probability 1)";
                            }else if($elective == "sta131" ){
                                $new_elective = "STA 131 (Inference)";
                            }else{
                                $new_elective = $elective;
                            }    
                    
                        $elective_ans = $row['elective_ans'];
                
                    }
        }else{ 
            ?>
               <script type="text/javascript">
            alert("No result Uploaded, Kindly Upload result! ");

            window.location="first_first.php";
            </script>
            <?php

            die();

        }
    }else{
        echo "<script> alert('No result Uploaded, Kindly Upload result!'); window.location='first_first.php'; </script>";
    }



?>

        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form nacoss-new-discuss nacoss-upload nacoss-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Result Details</h1>
                               
                        <div class="container" class="nacoss-new-discuss">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="result-panel panel panel-default">
                                        <div class="panel-heading">
                                        <h3 class="panel-title">First Year Result <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span></h3>
                                        </div>
                                        <div class="panel-body">
                                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                                <fieldset>
                                                    <?php include("includes/html/user_info.php"); ?>
                                                </fieldset>
                                                <hr>
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
                                                            <label>GSP 101 (Use of English 1)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $gsp101; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label>GSP 111 (Use of Library)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $gsp111; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label>COS 101 (Introduction to Computer Sci.)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos101; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label>MTH 111 (Elementary Mathematics)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $mth111; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label>MTH 121 (Elementary Mathematics II)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $mth121; ?></h5>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label><?php echo $new_ansc1; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $ansc1_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label><?php echo $new_ansc2; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $ansc2_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label><?php echo $new_elective; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <a href="first_first.php" class="nacoss-btn">Update Result</a>
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