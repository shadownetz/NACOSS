<?php include('includes/php/process_editstudentprofile.php'); ?>
<!-- Header -->
<?php include('includes/header.php'); ?>
        
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>

<?php


$session_student = $rnumber;
$count43 = array();
$count42 = array();
$count44 = array();
$count46 = array();

$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}  


function calculateGrade($cload="", $unit=""){
    global $count43, $count42, $count44, $count46;
    
    $jump = "no";
    if ($unit == "A"){
        $newunit = 5;
    } else if($unit == "B"){
        $newunit = 4;
    } else if($unit == "C"){
        $newunit = 3;
    } else if($unit == "D"){
        $newunit = 2;
    } else if($unit == "F"){
        $newunit = 1;
    } else {
        //Error maybe due to no result on the course.
        //Do nothing
        $jump = "yes";
    }
  if (!empty($unit) || $jump == "no")  {
    if ($cload == 3){
        $grade3 = 3 * $newunit;
        array_push($count43, $grade3);
    } else if($cload == 2){
        $grade2 = 2 * $newunit;
        
        array_push($count42, $grade2);   
    } else if($cload == 4){
        $grade4 = 4 * $newunit;
        
        array_push($count44, $grade4);   
    } else if($cload == 6){
        $grade6 = 6 * $newunit;
        
        array_push($count46, $grade6);   
    }
  }
}
 
//$myGpType = 'checkUnits'.$type.'()';
$session_result = $type."_first_yr_first_semester_results";
        
        $check_query = User::find_by_sql("SELECT offered FROM `$session_result` WHERE rnumber='$session_student' ");
        if($database->num_rows($check_query)){
            while($row = $database->fetch_array($check_query)){
                $offered = $row["offered"];
                $exp = explode('~', $offered);
                $count=0;
                while($count < count($exp)){
                    $course = $exp[$count];
                    $check_query = User::find_by_sql("SELECT * FROM `$session_result` WHERE rnumber='$session_student' ");
                    while($row=$database->fetch_array($check_query)){
                        $grade = $row["$course"];
                        if($type=='new'){
                            calculateGrade(checkUnits_new($course), $grade);
                        }elseif($type=='old'){
                            calculateGrade(checkUnits_old($course), $grade);
                        }
                    }
                $count++;
                }
            }
        }
        
        $session_result = $type."_first_yr_second_semester_results";

        $check_query = User::find_by_sql("SELECT offered FROM `$session_result` WHERE rnumber='$session_student' ");
        if($database->num_rows($check_query)){
            while($row = $database->fetch_array($check_query)){
                $offered = $row["offered"];
                $exp = explode('~', $offered);
                $count=0;
                while($count < count($exp)){
                    $course = $exp[$count];
                    $check_query = User::find_by_sql("SELECT * FROM `$session_result` WHERE rnumber='$session_student' ");
                    while($row=$database->fetch_array($check_query)){
                        $grade = $row["$course"];
                        if($type=='new'){
                            calculateGrade(checkUnits_new($course), $grade);
                        }elseif($type=='old'){
                            calculateGrade(checkUnits_old($course), $grade);
                        }
                    }
                $count++;
                }
            }
        }



        $session_result = $type."_second_yr_first_semester_results";
        
        $check_query = User::find_by_sql("SELECT offered FROM `$session_result` WHERE rnumber='$session_student' ");
        if($database->num_rows($check_query)){
            while($row = $database->fetch_array($check_query)){
                $offered = $row["offered"];
                $exp = explode('~', $offered);
                $count=0;
                while($count < count($exp)){
                    $course = $exp[$count];
                    $check_query = User::find_by_sql("SELECT * FROM `$session_result` WHERE rnumber='$session_student' ");
                    while($row=$database->fetch_array($check_query)){
                        $grade = $row["$course"];
                        if($type=='new'){
                            calculateGrade(checkUnits_new($course), $grade);
                        }elseif($type=='old'){
                            calculateGrade(checkUnits_old($course), $grade);
                        }
                    }
                $count++;
                }
            }
        }


    $session_result = $type."_second_yr_second_semester_results";
        
    $check_query = User::find_by_sql("SELECT offered FROM `$session_result` WHERE rnumber='$session_student' ");
    if($database->num_rows($check_query)){
        while($row = $database->fetch_array($check_query)){
            $offered = $row["offered"];
            $exp = explode('~', $offered);
            $count=0;
            while($count < count($exp)){
                $course = $exp[$count];
                $check_query = User::find_by_sql("SELECT * FROM `$session_result` WHERE rnumber='$session_student' ");
                while($row=$database->fetch_array($check_query)){
                    $grade = $row["$course"];
                    if($type=='new'){
                        calculateGrade(checkUnits_new($course), $grade);
                    }elseif($type=='old'){
                        calculateGrade(checkUnits_old($course), $grade);
                    }
                }
            $count++;
            }
        }
    }


    $session_result = $type."_third_yr_first_semester_results";
        
    $check_query = User::find_by_sql("SELECT offered FROM `$session_result` WHERE rnumber='$session_student' ");
    if($database->num_rows($check_query)){
        while($row = $database->fetch_array($check_query)){
            $offered = $row["offered"];
            $exp = explode('~', $offered);
            $count=0;
            while($count < count($exp)){
                $course = $exp[$count];
                $check_query = User::find_by_sql("SELECT * FROM `$session_result` WHERE rnumber='$session_student' ");
                while($row=$database->fetch_array($check_query)){
                    $grade = $row["$course"];
                    if($type=='new'){
                        calculateGrade(checkUnits_new($course), $grade);
                    }elseif($type=='old'){
                        calculateGrade(checkUnits_old($course), $grade);
                    }
                }
            $count++;
            }
        }
    }



    $session_result = $type."_third_yr_second_semester_results";

    $check_query = User::find_by_sql("SELECT offered FROM `$session_result` WHERE rnumber='$session_student' ");
        if($database->num_rows($check_query)){
            while($row = $database->fetch_array($check_query)){
                $offered = $row["offered"];
                $exp = explode('~', $offered);
                $count=0;
                while($count < count($exp)){
                    $course = $exp[$count];
                    $check_query = User::find_by_sql("SELECT * FROM `$session_result` WHERE rnumber='$session_student' ");
                    while($row=$database->fetch_array($check_query)){
                        $grade = $row["$course"];
                        if($type=='new'){
                            calculateGrade(checkUnits_new($course), $grade);
                        }elseif($type=='old'){
                            calculateGrade(checkUnits_old($course), $grade);
                        }
                    }
                $count++;
                }
            }
        }



        $session_result = $type."_final_yr_first_semester_results";

        $check_query = User::find_by_sql("SELECT offered FROM `$session_result` WHERE rnumber='$session_student' ");
        if($database->num_rows($check_query)){
            while($row = $database->fetch_array($check_query)){
                $offered = $row["offered"];
                $exp = explode('~', $offered);
                $count=0;
                while($count < count($exp)){
                    $course = $exp[$count];
                    $check_query = User::find_by_sql("SELECT * FROM `$session_result` WHERE rnumber='$session_student' ");
                    while($row=$database->fetch_array($check_query)){
                        $grade = $row["$course"];
                        if($type=='new'){
                            calculateGrade(checkUnits_new($course), $grade);
                        }elseif($type=='old'){
                            calculateGrade(checkUnits_old($course), $grade);
                        }
                    }
                $count++;
                }
            }
        }



        $session_result = $type."_final_yr_second_semester_results";

        $check_query = User::find_by_sql("SELECT offered FROM `$session_result` WHERE rnumber='$session_student' ");
        if($database->num_rows($check_query)){
            while($row = $database->fetch_array($check_query)){
                $offered = $row["offered"];
                $exp = explode('~', $offered);
                $count=0;
                while($count < count($exp)){
                    $course = $exp[$count];
                    $check_query = User::find_by_sql("SELECT * FROM `$session_result` WHERE rnumber='$session_student' ");
                    while($row=$database->fetch_array($check_query)){
                        $grade = $row["$course"];
                        if($type=='new'){
                            calculateGrade(checkUnits_new($course), $grade);
                        }elseif($type=='old'){
                            calculateGrade(checkUnits_old($course), $grade);
                        }
                    }
                $count++;
                }
            }
        }



    $count3 = count($count43);
    $count2 = count($count42);
    $count4 = count($count44);
    $count6 = count($count46);
    
        $sum3 = 0;
        $sum2 = 0;
        $sum4 = 0;
        $sum6 = 0;
        
        for ( $x = 0; $x < $count3; $x++ ){
            $sum3 = $sum3 + $count43[$x];
        }
                       
       $gp3 = 3 * $count3;
    
        for ( $y = 0; $y < $count2; $y++ ){
            $sum2 = $sum2 + $count42[$y];
        }
        
        $gp2 = 2 * $count2;

        for ( $y = 0; $y < $count4; $y++ ){
            $sum4 = $sum4 + $count44[$y];
        }
        
        $gp4 = 4 * $count4;

        for ( $y = 0; $y < $count6; $y++ ){
            $sum6 = $sum6 + $count46[$y];
        }
        
        $gp6 = 6 * $count6;
          
    $total_grade = $sum3 + $sum2 + $sum4 + $sum6;
    $gp = $gp3 + $gp2 + $gp4 + $gp6;                   
                       
    if(!empty($total_grade)){
        $main_gp = $total_grade / $gp;
    }else{
        $main_gp = "5.0";
    }
    $explode_main_gp = explode(".", $main_gp);
        
        if(count($explode_main_gp) == 2){
            $end = end($explode_main_gp);
            $split_gp = str_split($end);
            if($split_gp[0]<5){
               $new_main_gp = $explode_main_gp[0].".".$split_gp[0];
            }/*else if($split_gp[0]>=5 && $split_gp[1]>=5){           //SET
            $final = $split_gp[0] + 1;
                $new_main_gp = $explode_main_gp[0].".".$final;
            }*/else if($split_gp[0]>=5/* && $split_gp[1]<=5*/){           //SET
            $final = $split_gp[0];
                $new_main_gp = $explode_main_gp[0].".".$final;
            }
        }else{
            $new_main_gp = $main_gp.".0";
        }
        if(empty($main_gp)){
            $new_main_gp = "5.0";
        }

?>
        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form nacoss-new-discuss nacoss-gp"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">Current Grade Point</h1>
                        
                           <div class="col-lg-8 col-md-8 col-sm-12  col-md-offset-2">
                                <div class="result-panel panel panel-default">
                                    <div class="panel-heading">
                                        
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-lg-12 col-md-12 col-sm-12 list">
                                            <div class="col-md-6">Name:</div>
                                            <div class="col-md-6"><?php echo $fname." ".$lname." ".$oname; ?></div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 list">
                                            <div class="col-md-6">Registration Number:</div>
                                            <div class="col-md-6"><?php echo $rnumber; ?></div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 list">
                                            <div class="col-md-6">School E-mail:</div>
                                            <div class="col-md-6"><?php echo $semail; ?></div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 list">
                                            <div class="col-md-6 col-sm-12">Current G.P:</div>
                                            <div class="col-md-6 col-sm-12"><?php echo $new_main_gp; ?></div>
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