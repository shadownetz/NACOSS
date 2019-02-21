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
        $session_result = $start."_third_first";
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        if(!empty($result)){
            
        while($row = mysqli_fetch_assoc($check_query)){
            
            
                $cos301 = $row['cos301'];
                $cos303 = $row['cos303'];
                $cos311 = $row['cos311'];
                $cos331 = $row['cos331'];
                $cos333 = $row['cos333'];
                $cos341 = $row['cos341'];
            
            
                $ced341 = $row['ced341'];
                    
                
                $elective = $row['elective'];
                    if($elective == "mth341" ){
                        $new_elective = "MTH 341 (Discrete Mathematics I)";
                    }else if($elective == "cos313" ){
                        $new_elective = "COS 313 (Switching Algebra & Discrete Structures)";
                    }else if($elective == "cos315" ){
                        $new_elective = "COS 315 (Operation Research I)";
                    }else if($elective == "cos321" ){
                        $new_elective = "COS 321 (Data Base Design & Management I)";
                    }else if($elective == "cos335" ){
                        $new_elective = "COS 335 (Systems Analysis & Design)";
                    }else if($elective == "ece311" ){
                        $new_elective = "ECE 311 (Circuit Theory I)";
                    }else if($elective == "ece321" ){
                        $new_elective = "ECE 321 (Physical Electronics)";
                    }else{
                        $new_elective = $elective;
                    }    
            
                $elective_ans = $row['elective_ans'];
                 
        
        
            }
        }else{ 
            ?>
               <script type="text/javascript">
            alert("No result Uploaded, Kindly Upload result! ");

            window.location="third_first.php";
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
                                        <h3 class="panel-title">Third Year Result <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span></h3>
                                        </div>
                                        <div class="panel-body">
                                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                                <fieldset>
                                                    <?php include("includes/html/user_info.php"); ?>
                                                </fieldset>
                                                <hr>
                                                <fieldset>
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-8" >
                                                            <label>LIST OF COURSES</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>GRADE</label>
                                                        </div>
                                                    </div>
                                                    <br><hr>
                                                    
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 303 (Introduction to Micro Computer Sys.)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos303; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 311 (Numerical Methods I)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos311; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 331 (Compiler Construction)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos331; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 333 (Operating Systems I)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos333; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 341 (Computer Architecture)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos341; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label>CED 341 (Introduction To Entrepreneurship)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $ced341; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label ><?php echo $new_elective; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <a href="third_first.php" class="nacoss-btn">Update Result</a>
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