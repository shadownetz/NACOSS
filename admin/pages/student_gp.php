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



function calculateGrade($cload="", $unit=""){
    global $count43, $count42;
    
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
    if ($cload = 3){
        $grade3 = 3 * $newunit;
            
        array_push($count43, $grade3);
        
    } else if($cload = 2){
        $grade2 = 2 * $newunit;
        
        array_push($count42, $grade2);
        
    }
    
    
  
  }
    
    
    
}
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
        $session_result = $start."_first_first";
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if(!empty($check_query)){
        
            
        while($row = mysqli_fetch_assoc($check_query)){
            
            
                $gsp101 = $row['gsp101'];
                    calculateGrade(2, $gsp101);
                $gsp111 = $row['gsp111'];
                    calculateGrade(2, $gsp111);
                $cos101 = $row['cos101'];
                    calculateGrade(2, $cos101);
                $mth111 = $row['mth111'];
                    calculateGrade(3, $mth111);
                $mth121 = $row['mth121'];
                    calculateGrade(3, $mth121);
            
           

                $ansc1 = $row['ansc1'];
                $ansc1_ans = $row['ansc1_ans'];
            
                if($ansc1 == "bio151" ){
                    calculateGrade(3, $ansc1_ans);
                }else{
                    calculateGrade(2, $ansc1_ans);
                }
            
                
                $ansc2 = $row['ansc2'];
                $ansc2_ans = $row['ansc2_ans'];
            
                if($ansc2 == "bio151" ){
                    calculateGrade(3, $ansc2_ans);
                }else{
                    calculateGrade(2, $ansc2_ans);
                }
            
                $elective = $row['elective'];
                $elective_ans = $row['elective_ans'];
            
                    calculateGrade(2, $elective_ans);
                

            }
        }
            
        $session_result = $start."_first_second";
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if(!empty($check_query)){
        
            
        while($row = mysqli_fetch_assoc($check_query)){
                
            
                $gsp102 = $row['gsp102'];
                    calculateGrade(2, $gsp102);
                $cos102 = $row['cos102'];
                    calculateGrade(2, $cos102);
                $cos104 = $row['cos104'];
                    calculateGrade(2, $cos104);
                $mth122 = $row['mth122'];
                    calculateGrade(3, $mth122);
                $phy116 = $row['phy116'];
                    calculateGrade(2, $phy116);
                $phy118 = $row['phy118'];
                    calculateGrade(2, $phy118);
            
            
                $elective1 = $row['elective1'];
                $elective1_ans = $row['elective1_ans'];
                
            
                if($elective1 == "mth132" || $elective1 == "bio152" || $elective1 == "eng102" ){
                    calculateGrade(3, $elective1_ans);
                }else{
                    calculateGrade(2, $elective1_ans);
                }

            if($elective1 != "mth132" || $elective1 != "bio152" || $elective1 != "eng102" ){
                
                $elective2 = $row['elective2'];
                $elective2_ans = $row['elective2_ans'];
                    calculateGrade(2, $elective2_ans);
            }else{}
 

            }
                 
            
        }


    $session_result = $start."_second_first";
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if(!empty($check_query)){
        
            
        while($row = mysqli_fetch_assoc($check_query)){


                $gsp201 = $row['gsp201'];
                    calculateGrade(2, $gsp201);
                $gsp207 = $row['gsp207'];
                    calculateGrade(2, $gsp207);
                $cos201 = $row['cos201'];
                    calculateGrade(2, $cos201);
                $cos251 = $row['cos251'];
                    calculateGrade(2, $cos251);
                $mth215 = $row['mth215'];
                    calculateGrade(2, $mth215);
                $sta205 = $row['sta205']; 
                    calculateGrade(2, $sta205);

            
                $elective1 = $row['elective1'];
                $elective1_ans = $row['elective1_ans'];
                    calculateGrade(3, $elective1_ans);

                $elective2 = $row['elective2'];
                $elective2_ans = $row['elective2_ans'];
                    calculateGrade(3, $elective2_ans);

        }
                 
            
    }


        $session_result = $start."_second_second";
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if(!empty($check_query)){
        
            
        while($row = mysqli_fetch_assoc($check_query)){
            
                $gsp202 = $row['gsp202'];
                   calculateGrade(2, $gsp202);
                $gsp208 = $row['gsp208'];
                   calculateGrade(2, $gsp208);
                $cos202 = $row['cos202'];
                   calculateGrade(2, $cos202);
                $cos222 = $row['cos222'];
                   calculateGrade(2, $cos222);
                $mth216 = $row['mth216'];
                   calculateGrade(2, $mth216);
                $mth222 = $row['mth222'];
                   calculateGrade(3, $mth222);
                $mth242 = $row['mth242'];
                   calculateGrade(3, $mth242);
            
            $elective = $row['elective'];
            $elective_ans = $row['elective_ans'];
                calculateGrade(2, $elective2_ans);
            
            
            
        }
                 
            
    }



        $session_result = $start."_third_first";
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        if(!empty($check_query)){
        
            
        while($row = mysqli_fetch_assoc($check_query)){

                $cos301 = $row['cos301'];
                  calculateGrade(2, $cos301);
                $cos303 = $row['cos303'];
                  calculateGrade(2, $cos303);
                $cos311 = $row['cos311'];
                  calculateGrade(2, $cos311);
                $cos331 = $row['cos331'];
                  calculateGrade(2, $cos331);
                $cos333 = $row['cos333'];
                  calculateGrade(2, $cos333);
                $cos341 = $row['cos341'];
                  calculateGrade(2, $cos341);
            
            
            $elective = $row['elective'];
            $elective_ans = $row['elective_ans'];
            if($elective == "ece321" ){
                    calculateGrade(3, $elective_ans);
                }else{
                    calculateGrade(2, $elective_ans);
                }
            
            
        }
                 
            
    }



    $session_result = $start."_third_second";

    $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
    if(!empty($check_query)){


    while($row = mysqli_fetch_assoc($check_query)){

            $cos352 = $row['cos352'];
                calculateGrade(2, $cos352);
            $cos372 = $row['cos372'];
                calculateGrade(2, $cos372);
            $cos374 = $row['cos374'];
                calculateGrade(2, $cos374);
        
        
        
        $elective1 = $row['elective1'];
        $elective1_ans = $row['elective1_ans'];
            if($elective1 == "ece312" ){
                    calculateGrade(3, $elective1_ans);
                }else{
                    calculateGrade(2, $elective1_ans);
                }

        $elective2 = $row['elective2'];
        $elective2_ans = $row['elective2_ans'];
            if($elective2 == "ece312" ){
                    calculateGrade(3, $elective2_ans);
                }else{
                    calculateGrade(2, $elective2_ans);
                }
        
        $elective3 = $row['elective3'];
        $elective3_ans = $row['elective3_ans'];
            if($elective3 == "ece312" ){
                    calculateGrade(3, $elective3_ans);
                }else{
                    calculateGrade(2, $elective3_ans);
                }
        
        $elective4 = $row['elective4'];
        $elective4_ans = $row['elective4_ans'];
            if($elective4 == "ece312" ){
                    calculateGrade(3, $elective4_ans);
                }else{
                    calculateGrade(2, $elective4_ans);
                }
        
        $elective5 = $row['elective5'];
        $elective5_ans = $row['elective5_ans'];
            if($elective5 == "ece312" ){
                    calculateGrade(3, $elective5_ans);
                }else{
                    calculateGrade(2, $elective5_ans);
                }
        

    }


}



    $session_result = $start."_final_first";

    $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
    if(!empty($check_query)){


    while($row = mysqli_fetch_assoc($check_query)){

                $cos451 = $row['cos451'];
                    calculateGrade(2, $cos451);
                $cos461 = $row['cos461'];
                    calculateGrade(2, $cos461);
                $cos471 = $row['cos471'];
                    calculateGrade(2, $cos471);
        
        
        $elective1 = $row['elective1'];
        $elective1_ans = $row['elective1_ans'];
                    calculateGrade(2, $elective1_ans);
                

        $elective2 = $row['elective2'];
        $elective2_ans = $row['elective2_ans'];
                    calculateGrade(2, $elective2_ans);
        
        $elective3 = $row['elective3'];
        $elective3_ans = $row['elective3_ans'];
                    calculateGrade(2, $elective3_ans);
        
        $elective4 = $row['elective4'];
        $elective4_ans = $row['elective4_ans'];
                    calculateGrade(2, $elective4_ans);
                
        
        $elective5 = $row['elective5'];
        $elective5_ans = $row['elective5_ans'];
                    calculateGrade(2, $elective5_ans);

    }


}



    $session_result = $start."_final_second";

    $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
    if(!empty($check_query)){


    while($row = mysqli_fetch_assoc($check_query)){

                $cos452 = $row['cos452'];
                $cos462 = $row['cos462'];


        
        $elective1 = $row['elective1'];
        $elective1_ans = $row['elective1_ans'];
            if($elective1 == "cos472" ){
                    calculateGrade(3, $elective1_ans);
                }else{
                    calculateGrade(2, $elective1_ans);
                }

        $elective2 = $row['elective2'];
        $elective2_ans = $row['elective2_ans'];
            if($elective2 == "cos472" ){
                    calculateGrade(3, $elective2_ans);
                }else{
                    calculateGrade(2, $elective2_ans);
                }
        
        $elective3 = $row['elective3'];
        $elective3_ans = $row['elective3_ans'];
            if($elective3 == "cos472" ){
                    calculateGrade(3, $elective3_ans);
                }else{
                    calculateGrade(2, $elective3_ans);
                }
        
        $elective4 = $row['elective4'];
        $elective4_ans = $row['elective4_ans'];
            if($elective4 == "cos472" ){
                    calculateGrade(3, $elective4_ans);
                }else{
                    calculateGrade(2, $elective4_ans);
                }
        
        $elective5 = $row['elective5'];
        $elective5_ans = $row['elective5_ans'];
            if($elective5 == "cos472" ){
                    calculateGrade(3, $elective5_ans);
                }else{
                    calculateGrade(2, $elective5_ans);
                }
        
        $elective6 = $row['elective6'];
        $elective6_ans = $row['elective6_ans'];
            if($elective6 == "cos472" ){
                    calculateGrade(3, $elective6_ans);
                }else{
                    calculateGrade(2, $elective6_ans);
                }
    }


}



    $count3 = count($count43);
    $count2 = count($count42);
        $sum3 = 0;
        $sum2 = 0;
        
        for ( $x = 0; $x < $count3; $x++ ){
            $sum3 = $sum3 + $count43[$x];
        }
                       
       $gp3 = 3 * $count3;
    
        for ( $y = 0; $y < $count2; $y++ ){
            $sum2 = $sum2 + $count42[$y];
        }
        
        $gp2 = 2 * $count2;
          
    $total_grade = $sum3 + $sum2;
    $gp = $gp3 + $gp2;                   
                       
    if(!empty($total_grade)){
        $main_gp = $total_grade / $gp;
    }
    $explode_main_gp = explode(".", $main_gp);
        
        if(count($explode_main_gp) == 2){
            $end = end($explode_main_gp);
            $split_gp = str_split($end);
            if($split_gp[0]<5){
               $new_main_gp = $explode_main_gp[0].".".$split_gp[0];
            }else if($split_gp[0]>=5 && $split_gp[1]>=5){
            $final = $split_gp[0] + 1;
                $new_main_gp = $explode_main_gp[0].".".$final;
            }else if($split_gp[0]>=5 && $split_gp[1]<=5){
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