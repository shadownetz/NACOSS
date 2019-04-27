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
        $session_result = $start."_third_second";
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        if(!empty($result)){
            
        while($row = mysqli_fetch_assoc($check_query)){
            
            
                $cos352 = $row['cos352'];
                $cos372 = $row['cos372'];
                $cos374 = $row['cos374'];
            
            
            
                
                $elective1 = $row['elective1'];
                    if($elective1 == "cos314" ){
                        $new_elective1 = "COS 314 (Switching Algebra and Discrete Struct. II)";
                    }else if($elective1 == "mth342" ){
                        $new_elective1 = "MTH 342 (Discrete Mathematics II)";
                    }else if($elective1 == "cos316" ){
                        $new_elective1 = "COS 316 (Automata Theory & Formal Languages)";
                    }else if($elective1 == "cos322" ){
                        $new_elective1 = "COS 322 (Data Base Design & Management II)";
                    }else if($elective1 == "cos334" ){
                        $new_elective1 = "COS 334 (Operating System II)";
                    }else if($elective1 == "cos342" ){
                        $new_elective1 = "COS 342 (Computer Architecture II)";
                    }else if($elective1 == "ece312" ){
                        $new_elective1 = "ECE 312 (Circuit Theory II)";
                    }else if($elective1 == "ece322" ){
                        $new_elective1 = "ECE 322 (Applied Electronics)";
                    }else{
                        $new_elective1 = $elective1;
                    }    
            
                $elective1_ans = $row['elective1_ans'];
                 
            
                $elective2 = $row['elective2'];
                    if($elective2 == "cos314" ){
                        $new_elective2 = "COS 314 (Switching Algebra and Discrete Struct. II)";
                    }else if($elective2 == "mth342" ){
                        $new_elective2 = "MTH 342 (Discrete Mathematics II)";
                    }else if($elective2 == "cos316" ){
                        $new_elective2 = "COS 316 (Automata Theory & Formal Languages)";
                    }else if($elective2 == "cos322" ){
                        $new_elective2 = "COS 322 (Data Base Design & Management II)";
                    }else if($elective2 == "cos334" ){
                        $new_elective2 = "COS 334 (Operating System II)";
                    }else if($elective2 == "cos342" ){
                        $new_elective2 = "COS 342 (Computer Architecture II)";
                    }else if($elective2 == "ece312" ){
                        $new_elective2 = "ECE 312 (Circuit Theory II)";
                    }else if($elective2 == "ece322" ){
                        $new_elective2 = "ECE 322 (Applied Electronics)";
                    }else{
                        $new_elective2 = $elective2;
                    }    
            
                $elective2_ans = $row['elective2_ans'];
            
            
                $elective3 = $row['elective3'];
                    if($elective3 == "cos314" ){
                        $new_elective3 = "COS 314 (Switching Algebra and Discrete Struct. II)";
                    }else if($elective3 == "mth342" ){
                        $new_elective3 = "MTH 342 (Discrete Mathematics II)";
                    }else if($elective3 == "cos316" ){
                        $new_elective3 = "COS 316 (Automata Theory & Formal Languages)";
                    }else if($elective3 == "cos322" ){
                        $new_elective3 = "COS 322 (Data Base Design & Management II)";
                    }else if($elective3 == "cos334" ){
                        $new_elective3 = "COS 334 (Operating System II)";
                    }else if($elective3 == "cos342" ){
                        $new_elective3 = "COS 342 (Computer Architecture II)";
                    }else if($elective3 == "ece312" ){
                        $new_elective3 = "ECE 312 (Circuit Theory II)";
                    }else if($elective3 == "ece322" ){
                        $new_elective3 = "ECE 322 (Applied Electronics)";
                    }else{
                        $new_elective3 = $elective1;
                    }    
            
                $elective3_ans = $row['elective3_ans'];
            
            
                $elective4 = $row['elective4'];
                    if($elective4 == "cos314" ){
                        $new_elective4 = "COS 314 (Switching Algebra and Discrete Struct. II)";
                    }else if($elective4 == "mth342" ){
                        $new_elective4 = "MTH 342 (Discrete Mathematics II)";
                    }else if($elective4 == "cos316" ){
                        $new_elective4 = "COS 316 (Automata Theory & Formal Languages)";
                    }else if($elective4 == "cos322" ){
                        $new_elective4 = "COS 322 (Data Base Design & Management II)";
                    }else if($elective4 == "cos334" ){
                        $new_elective4 = "COS 334 (Operating System II)";
                    }else if($elective4 == "cos342" ){
                        $new_elective4 = "COS 342 (Computer Architecture II)";
                    }else if($elective4 == "ece312" ){
                        $new_elective4 = "ECE 312 (Circuit Theory II)";
                    }else if($elective4 == "ece322" ){
                        $new_elective4 = "ECE 322 (Applied Electronics)";
                    }else{
                        $new_elective4 = $elective4;
                    }    
            
                $elective4_ans = $row['elective4_ans'];
            
            
                $elective5 = $row['elective5'];
                    if($elective5 == "cos314" ){
                        $new_elective5 = "COS 314 (Switching Algebra and Discrete Struct. II)";
                    }else if($elective5 == "mth342" ){
                        $new_elective5 = "MTH 342 (Discrete Mathematics II)";
                    }else if($elective5 == "cos316" ){
                        $new_elective5 = "COS 316 (Automata Theory & Formal Languages)";
                    }else if($elective5 == "cos322" ){
                        $new_elective5 = "COS 322 (Data Base Design & Management II)";
                    }else if($elective5 == "cos334" ){
                        $new_elective5 = "COS 334 (Operating System II)";
                    }else if($elective5 == "cos342" ){
                        $new_elective5 = "COS 342 (Computer Architecture II)";
                    }else if($elective5 == "ece312" ){
                        $new_elective5 = "ECE 312 (Circuit Theory II)";
                    }else if($elective5 == "ece322" ){
                        $new_elective5= "ECE 322 (Applied Electronics)";
                    }else{
                        $new_elective5 = $elective5;
                    }    
            
                $elective5_ans = $row['elective5_ans'];
        
        
            }
        }else{ 
            ?>
               <script type="text/javascript">
            alert("No result Uploaded, Kindly Upload result! ");

            window.location="third_second.php";
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
                                        <h3 class="panel-title">Third Year Result <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span></h3>
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
                                                            <label >COS 352 (Data Structures)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos352; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 372 (Laboratory for Digital Design)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos372; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 374 (Student Industrial Work Experience)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos374; ?></h5>
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
                                                    <a href="third_second.php" class="nacoss-btn">Update Result</a>
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