<!-- Header -->
<?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>
        
        <?php $session_student = $_SESSION['rnumber']; ?>
<?php 
        
global $session_student;
    

        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "nacoss_results";

    $dbconnect = mysqli_connect($host, $user, $pass, $database);


    if(mysqli_connect_errno()){
        die("Database connection failed: ".
        mysqli_connect_error().
                "(".mysqli_connect_errno().")"
            );
     }
        
        
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_first_second";
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        if(!empty($result)){
            
        while($row = mysqli_fetch_assoc($check_query)){
            
            
                $gsp102 = $row['gsp102'];
                $cos102 = $row['cos102'];
                $cos104 = $row['cos104'];
                $mth122 = $row['mth122'];
                $phy116 = $row['phy116'];
                $phy118 = $row['phy118'];
            
           

                
                $elective1 = $row['elective1'];
                    if($elective1 == "bio152" ){
                        $new_elective1 = "BIO 152 (General Biology II)";
                    }else if($elective1 == "chm122" ){
                        $new_elective1 = "CHM 112 (Basic Principles of Chemistry II)";
                    }else if($elective1 == "eng102" ){
                        $new_elective1 = "ENG 102 (Applied Mechanics)";
                    }else if($elective1 == "mth132" ){
                        $new_elective1 = "MTH 132 (Elementary Mathematics IV)";
                    }else if($elective1 == "sta112" ){
                        $new_elective1 = "STA 112 (Probability II)";
                    }else if($elective1 == "sta132" ){
                        $new_elective1 = "STA 132 (Inference II)";
                    }else if($elective1 == "sta172" ){
                        $new_elective1 = "STA 172 (Laboratory for Inference I)";
                    }else{
                        $new_elective1 = $elective1;
                    }    
                
                $elective1_ans = $row['elective1_ans'];
                        
                        
                $elective2 = $row['elective2'];
                    if($elective2 == "bio152" ){
                        $new_elective2 = "BIO 152 (General Biology II)";
                    }else if($elective2 == "chm122" ){
                        $new_elective2 = "CHM 112 (Basic Principles of Chemistry II)";
                    }else if($elective2 == "eng102" ){
                        $new_elective2 = "ENG 102 (Applied Mechanics)";
                    }else if($elective2 == "mth132" ){
                        $new_elective2 = "MTH 132 (Elementary Mathematics IV)";
                    }else if($elective2 == "sta112" ){
                        $new_elective2 = "STA 112 (Probability II)";
                    }else if($elective2 == "sta132" ){
                        $new_elective2 = "STA 132 (Inference II)";
                    }else if($elective2 == "sta172" ){
                        $new_elective2 = "STA 172 (Laboratory for Inference I)";
                    }else{
                        $new_elective2 = $elective2;
                    }    
            
                $elective2_ans = $row['elective2_ans'];
        
        
            }
        }else{ 
            ?>
               <script type="text/javascript">
            alert("No result Uploaded, Kindly Upload result! ");

            window.location="first_second.php";
            </script>
            <?php

            die();

        }



?>

        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form nacoss-new-discuss nacoss-upload nacoss-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Student's result</h1>
                               
                        <div class="container" class="nacoss-new-discuss">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="result-panel panel panel-default">
                                        <div class="panel-heading">
                                        <h3 class="panel-title">First Year Result <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span></h3>
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
                                                            <label style="float:left;">LIST OF COURSES</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>GRADE</label>
                                                        </div>
                                                    </div>
                                                    <br><hr>
                                                    
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label style="float:left;">GSP 102 (Use of English II)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $gsp102; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label style="float:left;">COS 102 (Introduction to Computer System)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos102; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label style="float:left;">COS 104 (Computing Practice)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos104; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label style="float:left;">MTH 122 (Elementary Mathematics III)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $mth122; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label style="float:left;">PHY 116 (General Physics II)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $phy116; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label style="float:left;">PHY 118 (General Physics III)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $phy118; ?></h5>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label style="float:left;"><?php echo $new_elective1; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective1_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <?php if($elective1 != "mth132" || $elective1 != "bio152" || $elective1 != "eng102" ){  ?>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label style="float:left;"><?php echo $new_elective2; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective2_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <?php }else{} ?>
                                                    
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <a href="first_second.php" class="nacoss-btn" name="">Update Result</a>
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