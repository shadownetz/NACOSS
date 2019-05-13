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
        $session_result = $start."_final_first";
        
        $check_query = $database->query_results("SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if($check_query){
            if(mysqli_num_rows($check_query)>0){
            
                while($row = mysqli_fetch_assoc($check_query)){
            
            
                    $cos451 = $row['cos451'];
                    $cos461 = $row['cos461'];
                    $cos471 = $row['cos471'];
                
                
                
                    
                    $elective1 = $row['elective1'];
                        if($elective1 == "cos415" ){
                            $new_elective1 = "COS 415 (Systems Modelling & Simulation)";
                        }else if($elective1 == "cos411" ){
                            $new_elective1 = "COS 411 (Numerical Methods)";
                        }else if($elective1 == "cos413" ){
                            $new_elective1 = "COS 413 (Queing Theory)";
                        }else if($elective1 == "cos431" ){
                            $new_elective1 = "COS 431 (Software Engineering & Management)";
                        }else if($elective1 == "cos453" ){
                            $new_elective1 = "COS 453 (Computer Process Control)";
                        }else if($elective1 == "cos455" ){
                            $new_elective1 = "COS 455 (Data Communication & Networks I)";
                        }else if($elective1 == "cos457" ){
                            $new_elective1 = "COS 457 (Computer Graphics)";
                        }else{
                            $new_elective1 = $elective1;
                        }    
                
                    $elective1_ans = $row['elective1_ans'];
                    
                
                    $elective2 = $row['elective2'];
                        if($elective2 == "cos415" ){
                            $new_elective2 = "COS 415 (Systems Modelling & Simulation)";
                        }else if($elective2 == "cos411" ){
                            $new_elective2 = "COS 411 (Numerical Methods)";
                        }else if($elective2 == "cos413" ){
                            $new_elective2 = "COS 413 (Queing Theory)";
                        }else if($elective2 == "cos431" ){
                            $new_elective2 = "COS 431 (Software Engineering & Management)";
                        }else if($elective2 == "cos453" ){
                            $new_elective2 = "COS 453 (Computer Process Control)";
                        }else if($elective2 == "cos455" ){
                            $new_elective2 = "COS 455 (Data Communication & Networks I)";
                        }else if($elective2 == "cos457" ){
                            $new_elective2 = "COS 457 (Computer Graphics)";
                        }else{
                            $new_elective2 = $elective2;
                        }    
                
                    $elective2_ans = $row['elective2_ans'];
                
                
                    $elective3 = $row['elective3'];
                        if($elective3 == "cos415" ){
                            $new_elective3 = "COS 415 (Systems Modelling & Simulation)";
                        }else if($elective3 == "cos411" ){
                            $new_elective3 = "COS 411 (Numerical Methods)";
                        }else if($elective3 == "cos413" ){
                            $new_elective3 = "COS 413 (Queing Theory)";
                        }else if($elective3 == "cos431" ){
                            $new_elective3 = "COS 431 (Software Engineering & Management)";
                        }else if($elective3 == "cos453" ){
                            $new_elective3 = "COS 453 (Computer Process Control)";
                        }else if($elective3 == "cos455" ){
                            $new_elective3 = "COS 455 (Data Communication & Networks I)";
                        }else if($elective3 == "cos457" ){
                            $new_elective3 = "COS 457 (Computer Graphics)";
                        }else{
                            $new_elective3 = $elective3;
                        }    
                
                    $elective3_ans = $row['elective3_ans'];
                
                
                    $elective4 = $row['elective4'];
                        if($elective4 == "cos415" ){
                            $new_elective4 = "COS 415 (Systems Modelling & Simulation)";
                        }else if($elective4 == "cos411" ){
                            $new_elective4 = "COS 411 (Numerical Methods)";
                        }else if($elective4 == "cos413" ){
                            $new_elective4 = "COS 413 (Queing Theory)";
                        }else if($elective4 == "cos431" ){
                            $new_elective4 = "COS 431 (Software Engineering & Management)";
                        }else if($elective4 == "cos453" ){
                            $new_elective4 = "COS 453 (Computer Process Control)";
                        }else if($elective4 == "cos455" ){
                            $new_elective4 = "COS 455 (Data Communication & Networks I)";
                        }else if($elective4 == "cos457" ){
                            $new_elective4 = "COS 457 (Computer Graphics)";
                        }else{
                            $new_elective4 = $elective4;
                        }    
                
                    $elective4_ans = $row['elective4_ans'];
                
                
                    $elective5 = $row['elective5'];
                        if($elective5 == "cos415" ){
                            $new_elective5 = "COS 415 (Systems Modelling & Simulation)";
                        }else if($elective5 == "cos411" ){
                            $new_elective5 = "COS 411 (Numerical Methods)";
                        }else if($elective5 == "cos413" ){
                            $new_elective5 = "COS 413 (Queing Theory)";
                        }else if($elective5 == "cos431" ){
                            $new_elective5 = "COS 431 (Software Engineering & Management)";
                        }else if($elective5 == "cos453" ){
                            $new_elective5 = "COS 453 (Computer Process Control)";
                        }else if($elective5 == "cos455" ){
                            $new_elective5 = "COS 455 (Data Communication & Networks I)";
                        }else if($elective5 == "cos457" ){
                            $new_elective5 = "COS 457 (Computer Graphics)";
                        }else{
                            $new_elective5 = $elective5;
                        }    
                
                    $elective5_ans = $row['elective5_ans'];
            
        
            }
        }else{ 
            ?>
               <script type="text/javascript">
            alert("No result Uploaded, Kindly Upload result! ");

            window.location="final_first.php";
            </script>
            <?php

            die();

        }
    }else{
        echo "<script> alert('No result Uploaded, Kindly Upload result!'); window.location='final_first.php'; </script>";
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
                                        <h3 class="panel-title">Final Year Result <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span></h3>
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
                                                            <label >LIST OF COURSES</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>GRADE</label>
                                                        </div>
                                                    </div>
                                                    <br><hr>
                                                    
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 451 (Algorithms)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos451; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 461 (Org. of Programming Languages)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos461; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 471 (Project)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos471; ?></h5>
                                                        </div>
                                                    </div>
                                                  
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label ><?php echo $new_elective1; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective1_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label ><?php echo $new_elective2; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective2_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label ><?php echo $new_elective3; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective3_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label ><?php echo $new_elective4; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective4_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label ><?php echo $new_elective5; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective5_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <a href="final_first.php" class="nacoss-btn" name="">Update Result</a>
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