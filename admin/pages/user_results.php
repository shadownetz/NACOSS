<!-- Header -->
<?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>
        
        <?php $session_student = $_SESSION['rnumber']; ?>
<?php 
        
global $session_student;
        
$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}  
$dataDb = $type.'_'.$_SESSION['dataDb'];
        
        $check_query = $database->query_results("SELECT offered FROM `$dataDb` WHERE rnumber='$session_student' LIMIT 1");
        if($check_query){
            if(mysqli_num_rows($check_query)>0){
                while($col=$database->fetch_array($check_query)){
                    $offerd = $col['offered'];
                }
                $exp = explode('~', $offerd);
        }else{ 
            ?>
               <script type="text/javascript">
            alert("No result Uploaded, Kindly Upload result! ");

            window.location="<?php echo $_SESSION['result_loc']; ?>";
            </script>
            <?php

            die();

        }
    }else{
        $loc = $_SESSION['result_loc'];
        echo "<script> alert('No result Uploaded, Kindly Upload result!'); window.location='$loc'; </script>";
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
                                        <h3 class="panel-title"><?php echo semesterName($_SESSION['dataDb']); ?></h3>
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
                                                    
                                                    
                                                    <?php
                                                    $count=0;
                                                    while($count < count($exp)){
                                                        $course = $exp[$count];
                                                        $check_query = $database->query_results("SELECT * FROM `$dataDb` WHERE rnumber='$session_student' LIMIT 1");
                                                        while($row=$database->fetch_array($check_query)){
                                                        $grade = $row["$course"];
                                                        }
                                                    ?>
                                                    <div class="column">
                                                        <div class="col-sm-6">
                                                            <label><?php if($type=='old'){ echo checkCourseTitle_old($course); }else{ echo checkCourseTitle_new($course); } ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <h5 style=""><?php echo $grade; ?></h5>
                                                        </div>
                                                    </div>

                                                    <?php
                                                        
                                                    $count++;
                                                    } 
                                                    ?>

                                                    <div class="col-md-6 col-md-offset-3">
                                                    <a href="<?php echo $_SESSION['result_loc']; ?>" class="nacoss-btn">Update Result</a>
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