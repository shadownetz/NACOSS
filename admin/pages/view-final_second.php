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
        $session_result = $start."_final_second";
        
        $check_query = $database->query_results("SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if($check_query){
            if(mysqli_num_rows($check_query)>0){
            
                while($row = mysqli_fetch_assoc($check_query)){
            
            
                    $cos452 = $row['cos452'];
                    $cos462 = $row['cos462'];
                
                
                
                    
                    $elective1 = $row['elective1'];
                        if($elective1 == "cos432" ){
                            $new_elective1 = "COS 432 (Compiler Construction)";
                        }else if($elective1 == "cos454" ){
                            $new_elective1 = "COS 454 (Artificial Intelligence)";
                        }else if($elective1 == "cos414" ){
                            $new_elective1 = "COS 414 (Operation Research II)";
                        }else if($elective1 == "cos412" ){
                            $new_elective1 = "COS 412 (Computer Performance Evaluation)";
                        }else if($elective1 == "cos458" ){
                            $new_elective1 = "COS 458 (Expert Systems)";
                        }else if($elective1 == "cos464" ){
                            $new_elective1 = "COS 464 (Concurrent Programming)";
                        }else if($elective1 == "cos472" ){
                            $new_elective1 = "COS 472 (Advanced Digital Laboratory)";
                        }else if($elective1 == "cos456" ){
                            $new_elective1 = "COS 456 (Data Comm. & Networking II.)";
                        }else{
                            $new_elective1 = $elective1;
                        }    
                
                    $elective1_ans = $row['elective1_ans'];
                    
                
                    $elective2 = $row['elective2'];
                        if($elective2 == "cos432" ){
                            $new_elective2 = "COS 432 (Compiler Construction)";
                        }else if($elective2 == "cos454" ){
                            $new_elective2 = "COS 454 (Artificial Intelligence)";
                        }else if($elective2 == "cos414" ){
                            $new_elective2 = "COS 414 (Operation Research II)";
                        }else if($elective2 == "cos412" ){
                            $new_elective2 = "COS 412 (Computer Performance Evaluation)";
                        }else if($elective2 == "cos458" ){
                            $new_elective2 = "COS 458 (Expert Systems)";
                        }else if($elective2 == "cos464" ){
                            $new_elective2 = "COS 464 (Concurrent Programming)";
                        }else if($elective2 == "cos472" ){
                            $new_elective2 = "COS 472 (Advanced Digital Laboratory)";
                        }else if($elective2 == "cos456" ){
                            $new_elective2 = "COS 456 (Data Comm. & Networking II.)";
                        }else{
                            $new_elective2 = $elective2;
                        }    
                
                    $elective2_ans = $row['elective2_ans'];
                
                
                    $elective3 = $row['elective3'];
                        if($elective3 == "cos432" ){
                            $new_elective3 = "COS 432 (Compiler Construction)";
                        }else if($elective3 == "cos454" ){
                            $new_elective3 = "COS 454 (Artificial Intelligence)";
                        }else if($elective3 == "cos414" ){
                            $new_elective3 = "COS 414 (Operation Research II)";
                        }else if($elective3 == "cos412" ){
                            $new_elective3 = "COS 412 (Computer Performance Evaluation)";
                        }else if($elective3 == "cos458" ){
                            $new_elective3 = "COS 458 (Expert Systems)";
                        }else if($elective3 == "cos464" ){
                            $new_elective3 = "COS 464 (Concurrent Programming)";
                        }else if($elective3 == "cos472" ){
                            $new_elective3 = "COS 472 (Advanced Digital Laboratory)";
                        }else if($elective3 == "cos456" ){
                            $new_elective3 = "COS 456 (Data Comm. & Networking II.)";
                        }else{
                            $new_elective3 = $elective3;
                        }    
                
                    $elective3_ans = $row['elective3_ans'];
                
                
                    $elective4 = $row['elective4'];
                        if($elective4 == "cos432" ){
                            $new_elective4 = "COS 432 (Compiler Construction)";
                        }else if($elective4 == "cos454" ){
                            $new_elective4 = "COS 454 (Artificial Intelligence)";
                        }else if($elective4 == "cos414" ){
                            $new_elective4 = "COS 414 (Operation Research II)";
                        }else if($elective4 == "cos412" ){
                            $new_elective4 = "COS 412 (Computer Performance Evaluation)";
                        }else if($elective4 == "cos458" ){
                            $new_elective4 = "COS 458 (Expert Systems)";
                        }else if($elective4 == "cos464" ){
                            $new_elective4 = "COS 464 (Concurrent Programming)";
                        }else if($elective4 == "cos472" ){
                            $new_elective4 = "COS 472 (Advanced Digital Laboratory)";
                        }else if($elective4 == "cos456" ){
                            $new_elective4 = "COS 456 (Data Comm. & Networking II.)";
                        }else{
                            $new_elective4 = $elective4;
                        }    
                
                    $elective4_ans = $row['elective4_ans'];
                
                
                    $elective5 = $row['elective5'];
                        if($elective5 == "cos432" ){
                            $new_elective5 = "COS 432 (Compiler Construction)";
                        }else if($elective5 == "cos454" ){
                            $new_elective5 = "COS 454 (Artificial Intelligence)";
                        }else if($elective5 == "cos414" ){
                            $new_elective5 = "COS 414 (Operation Research II)";
                        }else if($elective5 == "cos412" ){
                            $new_elective5 = "COS 412 (Computer Performance Evaluation)";
                        }else if($elective5 == "cos458" ){
                            $new_elective5 = "COS 458 (Expert Systems)";
                        }else if($elective5 == "cos464" ){
                            $new_elective5 = "COS 464 (Concurrent Programming)";
                        }else if($elective5 == "cos472" ){
                            $new_elective5 = "COS 472 (Advanced Digital Laboratory)";
                        }else if($elective5 == "cos456" ){
                            $new_elective5 = "COS 456 (Data Comm. & Networking II.)";
                        }else{
                            $new_elective5 = $elective5;
                        }    
                
                    $elective5_ans = $row['elective5_ans'];
                
                
                    $elective6 = $row['elective6'];
                        if($elective6 == "cos432" ){
                            $new_elective6 = "COS 432 (Compiler Construction)";
                        }else if($elective6 == "cos454" ){
                            $new_elective6 = "COS 454 (Artificial Intelligence)";
                        }else if($elective6 == "cos414" ){
                            $new_elective6 = "COS 414 (Operation Research II)";
                        }else if($elective6 == "cos412" ){
                            $new_elective6 = "COS 412 (Computer Performance Evaluation)";
                        }else if($elective6 == "cos458" ){
                            $new_elective6 = "COS 458 (Expert Systems)";
                        }else if($elective6 == "cos464" ){
                            $new_elective6 = "COS 464 (Concurrent Programming)";
                        }else if($elective6 == "cos472" ){
                            $new_elective6 = "COS 472 (Advanced Digital Laboratory)";
                        }else if($elective6 == "cos456" ){
                            $new_elective6 = "COS 456 (Data Comm. & Networking II.)";
                        }else{
                            $new_elective6 = $elective6;
                        }    
                
                    $elective6_ans = $row['elective6_ans'];
            
        
            }
        }else{ 
            ?>
               <script type="text/javascript">
            alert("No result Uploaded, Kindly Upload result! ");

            window.location="final_second.php";
            </script>
            <?php

            die();

        }
    }else{
        echo "<script> alert('No result Uploaded, Kindly Upload result!'); window.location='final_second.php'; </script>";
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
                                        <h3 class="panel-title">Final Year Result <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span></h3>
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
                                                            <label>COS 452 (Computer Centre Management)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos452; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label>COS 462 (Structured Programming)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $cos462; ?></h5>
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                    
                                                    
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label><?php echo $new_elective1; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective1_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label><?php echo $new_elective2; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective2_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label><?php echo $new_elective3; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective3_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label><?php echo $new_elective4; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective4_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label><?php echo $new_elective5; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $elective5_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <a href="final_second.php" class="nacoss-btn">Update Result</a>
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