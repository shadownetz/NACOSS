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
        $session_result = $start."_second_second";
        
        $check_query = $database->query_results("SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if($check_query){
            if(mysqli_num_rows($check_query)>0){
            
                while($row = mysqli_fetch_assoc($check_query)){
            
            
                $gsp202 = $row['gsp202'];
                $gsp208 = $row['gsp208'];
                $cos202 = $row['cos202'];
                $cos222 = $row['cos222'];
                $mth216 = $row['mth216'];
                $mth222 = $row['mth222'];
                $mth242 = $row['mth242'];
            
            
           

                
                $elective = $row['elective'];
                    if($elective == "mth216" ){
                        $new_elective = "MTH 216 (Linear Algebra II):";
                    }else if($elective == "sta206" ){
                        $new_elective = "STA 206 (Statistics for Physical Sc. & Engr.):";
                    }else{
                        $new_elective = $elective;
                    }    
            
                $elective_ans = $row['elective_ans'];
                 
        
        
            }
        }else{ 
            ?>
               <script type="text/javascript">
            alert("No result Uploaded, Kindly Upload result! ");

            window.location="second_second.php";
            </script>
            <?php

            die();

        }
    }else{
        echo "<script> alert('No result Uploaded, Kindly Upload result!'); window.location='second_second.php'; </script>";
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
                                        <h3 class="panel-title">Second Year Result <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span></h3>
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
                                                            <label >GSP 208 (Humanities II)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 ><?php echo $gsp208; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >GSP 202 (Issues in Peace & Conflict Resolution studies)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 ><?php echo $gsp202; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 202 (Computer Programming II)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 ><?php echo $cos202; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >COS 222 (File Processing)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 ><?php echo $cos222; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >MTH 222 (Elementary Differential Equation I)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5><?php echo $mth222; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label >MTH 242 (Mathematical Methods I)</label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 ><?php echo $mth242; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="col-sm-8">
                                                            <label ><?php echo $new_elective; ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 ><?php echo $elective_ans; ?></h5>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <a href="second_second.php" class="nacoss-btn">Update Result</a>
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