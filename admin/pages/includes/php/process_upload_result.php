<?php 

require_once ("../../includes/initialize.php");

$session_student = $_SESSION['rnumber'];
    
if(isset($_POST['next'])){
    global $session_student;
    

    
    $level = $_POST['level'];
    $semester = $_POST['semester'];
    
    if ($level == "first" && $semester == "first"){
        header("Location: first_first.php");
    }else
    if($level == "first" && $semester == "second"){
        header("Location: first_second.php");
    }else
    if($level == "second" && $semester == "first"){
        header("Location: second_first.php");
    }else
    if($level == "second" && $semester == "second"){
        header("Location: second_second.php");
    }else
    if($level == "third" && $semester == "first"){
        header("Location: third_first.php");
    }else
    if($level == "third" && $semester == "second"){
        header("Location: third_second.php");
    }else
    if($level == "final" && $semester == "first"){
        header("Location: final_first.php");
    }else
    if($level == "final" && $semester == "second"){
        header("Location: final_second.php");
    }else{
        echo "Invalid Input";
    }    
}

function nacoss_results_db(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "nacoss_results";

    $dbconnect= mysqli_connect($host, $user, $pass, $database);


    if(mysqli_connect_errno()){
        die("Database connection failed: ".
        mysqli_connect_error().
                "(".mysqli_connect_errno().")"
            );
     }
         return $dbconnect;
     }

if(isset($_POST['upload_result_ff'])){
    global $session_student;
    
    $dbconnect = nacoss_results_db();
        
    $gsp101 = mysqli_real_escape_string($dbconnect, $_POST['gsp101']);
    $gsp111 = mysqli_real_escape_string($dbconnect, $_POST['gsp111']);
    $cos101 = mysqli_real_escape_string($dbconnect, $_POST['cos101']);
    $mth111 = mysqli_real_escape_string($dbconnect, $_POST['mth111']);
    $mth121 = mysqli_real_escape_string($dbconnect, $_POST['mth121']);
    
    $ansc1 = mysqli_real_escape_string($dbconnect, $_POST['ansc1']);
    $ansc1_ans = mysqli_real_escape_string($dbconnect, $_POST['ansc1_ans']);
    
    $ansc2 = mysqli_real_escape_string($dbconnect, $_POST['ansc2']);
    $ansc2_ans = mysqli_real_escape_string($dbconnect, $_POST['ansc2_ans']);
    
    $elective = mysqli_real_escape_string($dbconnect, $_POST['elective']);
    $elective_ans = mysqli_real_escape_string($dbconnect, $_POST['elective_ans']);
    
        
                                           
   
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_first_first";
        
        $create_table_query = mysqli_query($dbconnect, "
        CREATE TABLE IF NOT EXISTS `$session_result` (
          `id` int(11) NOT NULL auto_increment,
          `regno` varchar(15) NOT NULL,
          `gsp101` varchar(15) NOT NULL,
          `gsp111` varchar(15) NOT NULL,
          `cos101` varchar(15) NOT NULL,
          `mth111` varchar(15) NOT NULL,
          `mth121` varchar(15) NOT NULL,
          `phy115` varchar(15) NOT NULL,
          `phy191` varchar(15) NOT NULL,
          `bio151` varchar(15) NOT NULL,
          `chm101` varchar(15) NOT NULL,
          `eng101` varchar(15) NOT NULL,
          `sta111` varchar(15) NOT NULL,
          `sta131` varchar(15) NOT NULL,
          `ansc1` varchar(50) NOT NULL,
          `ansc1_ans` text NOT NULL,
          `ansc2` varchar(50) NOT NULL,
          `ansc2_ans` varchar(50) NOT NULL,
          `elective` varchar(50) NOT NULL,
          `elective_ans` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB ");
        
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        
        if(!empty($result)){
        
        $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET gsp101='$gsp101', gsp111='$gsp111', cos101='$cos101', mth111='$mth111', mth121='$mth121', ansc1='$ansc1', ansc2='$ansc2', elective='$elective', `$ansc1`='$ansc1_ans', `$ansc2`='$ansc2_ans', `$elective`='$elective_ans', `ansc1_ans`='$ansc1_ans', `ansc2_ans`='$ansc2_ans', `elective_ans`='$elective_ans' WHERE regno='$session_student' ");
            
        }else{
            
        
        $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', gsp101='$gsp101', gsp111='$gsp111', cos101='$cos101', mth111='$mth111', mth121='$mth121', ansc1='$ansc1', ansc2='$ansc2', elective='$elective', `$ansc1`='$ansc1_ans', `$ansc2`='$ansc2_ans', `$elective`='$elective_ans', `ansc1_ans`='$ansc1_ans', `ansc2_ans`='$ansc2_ans', `elective_ans`='$elective_ans' ");
    
    
        }
    
    

        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="first_first.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="first_first.php";
                </script>

                <?php
                

        }

    }

if(isset($_POST['upload_result_fs'])){
    global $session_student;
    
    $dbconnect = nacoss_results_db();
        
    $gsp102 = mysqli_real_escape_string($dbconnect, $_POST['gsp102']);
    $cos102 = mysqli_real_escape_string($dbconnect, $_POST['cos102']);
    $cos104 = mysqli_real_escape_string($dbconnect, $_POST['cos104']);
    $mth122 = mysqli_real_escape_string($dbconnect, $_POST['mth122']);
    $phy116 = mysqli_real_escape_string($dbconnect, $_POST['phy116']);
    $phy118 = mysqli_real_escape_string($dbconnect, $_POST['phy118']);
    
    
    $elective1 = mysqli_real_escape_string($dbconnect, $_POST['elective1']);
    $elective1_ans = mysqli_real_escape_string($dbconnect, $_POST['elective1_ans']);
    
    $elective2 = mysqli_real_escape_string($dbconnect, $_POST['elective2']);
    $elective2_ans = mysqli_real_escape_string($dbconnect, $_POST['elective2_ans']);
    
    
    
        
                                           
   
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_first_second";
        
        $create_table_query = mysqli_query($dbconnect, "
        CREATE TABLE IF NOT EXISTS `$session_result` (
          `id` int(11) NOT NULL auto_increment,
          `regno` varchar(15) NOT NULL,
          `gsp102` varchar(50) NOT NULL,
          `cos102` varchar(50) NOT NULL,
          `cos104` varchar(50) NOT NULL,
          `mth122` varchar(50) NOT NULL,
          `phy116` varchar(50) NOT NULL,
          `phy118` varchar(50) NOT NULL,
          `bio152` varchar(50) NOT NULL,
          `chm122` varchar(50) NOT NULL,
          `eng102` varchar(50) NOT NULL,
          `mth132` varchar(50) NOT NULL,
          `sta122` varchar(50) NOT NULL,
          `sta132` varchar(50) NOT NULL,
          `sta172` varchar(50) NOT NULL,
          `elective1` varchar(50) NOT NULL,
          `elective1_ans` varchar(50) NOT NULL,
          `elective2` varchar(50) NOT NULL,
          `elective2_ans` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB ");
    
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        
        $result = mysqli_num_rows($check_query);
        
        if(!empty($result)){
            
            
            if($_POST['elective2'] != "") {
                
                $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET gsp102='$gsp102', cos102='$cos102', cos104='$cos104', mth122='$mth122', phy116='$phy116', phy118='$phy118', elective1='$elective1', `$elective1`='$elective1_ans', `elective1_ans`='$elective1_ans', elective2='$elective2', `$elective2`='$elective2_ans', `elective2_ans`='$elective2_ans' WHERE regno='$session_student' ");
      
        
            }else{
           
            
                $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET gsp102='$gsp102', cos102='$cos102', cos104='$cos104', mth122='$mth122', phy116='$phy116', phy118='$phy118', elective1='$elective1', `$elective1`='$elective1_ans', `elective1_ans`='$elective1_ans' WHERE regno='$session_student' ");
            }
            
            
        }else{
            
            if($_POST['elective2'] != "") {
                
                $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', gsp102='$gsp102', cos102='$cos102', cos104='$cos104', mth122='$mth122', phy116='$phy116', phy118='$phy118', elective1='$elective1', `$elective1`='$elective1_ans', `elective1_ans`='$elective1_ans', elective2='$elective2', `$elective2`='$elective2_ans', `elective2_ans`='$elective2_ans' ");
      
        
            }else{
           
            
                $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', gsp102='$gsp102', cos102='$cos102', cos104='$cos104', mth122='$mth122', phy116='$phy116', phy118='$phy118', elective1='$elective1', `$elective1`='$elective1_ans', `elective1_ans`='$elective1_ans' ");
            }
        }
    
    
    

        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="first_second.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="first_second.php";
                </script>

                <?php
                

        }

    }


    
if(isset($_POST['upload_result_sf'])){
    global $session_student;
    

    $dbconnect = nacoss_results_db();
        
    $gsp201 = mysqli_real_escape_string($dbconnect, $_POST['gsp201']);
    $gsp207 = mysqli_real_escape_string($dbconnect, $_POST['gsp207']);
    $cos201 = mysqli_real_escape_string($dbconnect, $_POST['cos201']);
    $cos251 = mysqli_real_escape_string($dbconnect, $_POST['cos251']);
    $mth215 = mysqli_real_escape_string($dbconnect, $_POST['mth215']);
    $sta205 = mysqli_real_escape_string($dbconnect, $_POST['sta205']);
    
    
    $elective1 = mysqli_real_escape_string($dbconnect, $_POST['elective1']);
    $elective1_ans = mysqli_real_escape_string($dbconnect, $_POST['elective1_ans']);
    
    $elective2 = mysqli_real_escape_string($dbconnect, $_POST['elective2']);
    $elective2_ans = mysqli_real_escape_string($dbconnect, $_POST['elective2_ans']);
    
    
    
        
                                           
   
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_second_first";
        
        
    $create_table_query = mysqli_query($dbconnect, "
        CREATE TABLE IF NOT EXISTS `$session_result` (
          `id` int(11) NOT NULL auto_increment,
          `regno` varchar(50) NOT NULL,
          `gsp201` varchar(50) NOT NULL,
          `gsp207` varchar(50) NOT NULL,
          `cos201` varchar(50) NOT NULL,
          `cos251` varchar(50) NOT NULL,
          `mth215` varchar(50) NOT NULL,
          `sta205` varchar(50) NOT NULL,
          `ee211` varchar(50) NOT NULL,
          `mth211` varchar(50) NOT NULL,
          `mth221` varchar(50) NOT NULL,
          `elective1` varchar(50) NOT NULL,
          `elective1_ans` varchar(50) NOT NULL,
          `elective2` varchar(50) NOT NULL,
          `elective2_ans` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB ");
        
    
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        
        if(!empty($result)){
        
        $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET gsp201='$gsp201', gsp207='$gsp207', cos201='$cos201', cos251='$cos251', mth215='$mth215', sta205='$sta205', elective1='$elective1', elective2='$elective2', `$elective1`='$elective1_ans', `$elective2`='$elective2_ans', `elective1_ans`='$elective1_ans', `elective2_ans`='$elective2_ans' WHERE regno='$session_student' ");
            
        }else{
            
        
        $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', gsp201='$gsp201', gsp207='$gsp207', cos201='$cos201', cos251='$cos251', mth215='$mth215', sta205='$sta205', elective1='$elective1', elective2='$elective2', `$elective1`='$elective1_ans', `$elective2`='$elective2_ans', `elective1_ans`='$elective1_ans', `elective2_ans`='$elective2_ans' ");
    
    
        }
    
    
    

        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="second_first.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="second_first.php";
                </script>

                <?php
                

        }

    }

if(isset($_POST['upload_result_ss'])){
    global $session_student;
    

    $dbconnect = nacoss_results_db();
        
    $gsp208 = mysqli_real_escape_string($dbconnect, $_POST['gsp208']);
    $gsp202 = mysqli_real_escape_string($dbconnect, $_POST['gsp202']);
    $cos202 = mysqli_real_escape_string($dbconnect, $_POST['cos202']);
    $cos222 = mysqli_real_escape_string($dbconnect, $_POST['cos222']);
    $mth222 = mysqli_real_escape_string($dbconnect, $_POST['mth222']);
    $mth242 = mysqli_real_escape_string($dbconnect, $_POST['mth242']);
    
    
    $elective = mysqli_real_escape_string($dbconnect, $_POST['elective']);
    $elective_ans = mysqli_real_escape_string($dbconnect, $_POST['elective_ans']);
    
    
        
                                           
   
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_second_second";
        
        
    $create_table_query = mysqli_query($dbconnect, "
        CREATE TABLE IF NOT EXISTS `$session_result` (
          `id` int(11) NOT NULL auto_increment,
          `regno` varchar(50) NOT NULL,
          `gsp202` varchar(50) NOT NULL,
          `gsp208` varchar(50) NOT NULL,
          `cos202` varchar(50) NOT NULL,
          `cos222` varchar(50) NOT NULL,
          `mth222` varchar(50) NOT NULL,
          `mth242` varchar(50) NOT NULL,
          `mth216` varchar(50) NOT NULL,
          `sta206` varchar(50) NOT NULL,
          `elective` varchar(50) NOT NULL,
          `elective_ans` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB ");
        
    
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        
        if(!empty($result)){
        
        $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET gsp202='$gsp202', gsp208='$gsp208', cos202='$cos202', cos222='$cos222', mth242='$mth242', elective='$elective', `$elective`='$elective_ans', `elective_ans`='$elective_ans' WHERE regno='$session_student' ");
            
        }else{
            
        
        $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', gsp202='$gsp202', gsp208='$gsp208', cos202='$cos202', cos222='$cos222', mth242='$mth242', elective='$elective', `$elective`='$elective_ans',  `elective_ans`='$elective_ans' ");
    
    
        }
    
    
    

        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="second_second.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="second_second.php";
                </script>

                <?php
                

        }

    }


if(isset($_POST['upload_result_tf'])){
    global $session_student;
    

    $dbconnect = nacoss_results_db();
        
    $cos301 = mysqli_real_escape_string($dbconnect, $_POST['cos301']);
    $cos303 = mysqli_real_escape_string($dbconnect, $_POST['cos303']);
    $cos311 = mysqli_real_escape_string($dbconnect, $_POST['cos311']);
    $cos331 = mysqli_real_escape_string($dbconnect, $_POST['cos331']);
    $cos333 = mysqli_real_escape_string($dbconnect, $_POST['cos333']);
    $cos341 = mysqli_real_escape_string($dbconnect, $_POST['cos341']);
    
    
    $elective = mysqli_real_escape_string($dbconnect, $_POST['elective']);
    $elective_ans = mysqli_real_escape_string($dbconnect, $_POST['elective_ans']);
    
    
        
                                           
   
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_third_first";
        
        
    $create_table_query = mysqli_query($dbconnect, "
        CREATE TABLE IF NOT EXISTS `$session_result` (
          `id` int(11) NOT NULL auto_increment,
          `regno` varchar(50) NOT NULL,
          `cos301` varchar(50) NOT NULL,
          `cos303` varchar(50) NOT NULL,
          `cos311` varchar(50) NOT NULL,
          `cos331` varchar(50) NOT NULL,
          `cos333` varchar(50) NOT NULL,
          `cos341` varchar(50) NOT NULL,
          `ced341` varchar(50) NOT NULL,
          `mth341` varchar(50) NOT NULL,
          `cos313` varchar(50) NOT NULL,
          `cos315` varchar(50) NOT NULL,
          `cos321` varchar(50) NOT NULL,
          `cos335` varchar(50) NOT NULL,
          `ece311` varchar(50) NOT NULL,
          `ece321` varchar(50) NOT NULL,
          `elective` varchar(50) NOT NULL,
          `elective_ans` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB ");
        
    
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        
        if(!empty($result)){
        
        $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET cos301='$cos301', cos303='$cos303', cos311='$cos311', cos331='$cos331', cos333='$cos333', cos341='$cos341', ced341='$ced341', elective='$elective', `$elective`='$elective_ans',  `elective_ans`='$elective_ans' WHERE regno='$session_student' ");
            
        }else{
            
        
        $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', cos301='$cos301', cos303='$cos303', cos311='$cos311', cos331='$cos331', cos333='$cos333', cos341='$cos341', ced341='$ced341', elective='$elective', `$elective`='$elective_ans',  `elective_ans`='$elective_ans' ");
    
    
        }
    
    
    

        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="third_first.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="third_first.php";
                </script>

                <?php
                

        }

    }


if(isset($_POST['upload_result_ts'])){
    global $session_student;
    
    $dbconnect = nacoss_results_db();
        
    $cos352 = mysqli_real_escape_string($dbconnect, $_POST['cos352']);
    $cos372 = mysqli_real_escape_string($dbconnect, $_POST['cos372']);
    $cos374 = mysqli_real_escape_string($dbconnect, $_POST['cos374']);
    
    
    $elective1 = mysqli_real_escape_string($dbconnect, $_POST['elective1']);
    $elective1_ans = mysqli_real_escape_string($dbconnect, $_POST['elective1_ans']);
    $elective2 = mysqli_real_escape_string($dbconnect, $_POST['elective2']);
    $elective2_ans = mysqli_real_escape_string($dbconnect, $_POST['elective2_ans']);
    $elective3 = mysqli_real_escape_string($dbconnect, $_POST['elective3']);
    $elective3_ans = mysqli_real_escape_string($dbconnect, $_POST['elective3_ans']);
    $elective4 = mysqli_real_escape_string($dbconnect, $_POST['elective4']);
    $elective4_ans = mysqli_real_escape_string($dbconnect, $_POST['elective4_ans']);
    $elective5 = mysqli_real_escape_string($dbconnect, $_POST['elective5']);
    $elective5_ans = mysqli_real_escape_string($dbconnect, $_POST['elective5_ans']);
    
    
        
                                           
   
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_third_second";
        
        
    $create_table_query = mysqli_query($dbconnect, "
        CREATE TABLE IF NOT EXISTS `$session_result` (
          `id` int(11) NOT NULL auto_increment,
          `regno` varchar(50) NOT NULL,
          `cos352` varchar(50) NOT NULL,
          `cos372` varchar(50) NOT NULL,
          `cos374` varchar(50) NOT NULL,
          `cos314` varchar(50) NOT NULL,
          `mth342` varchar(50) NOT NULL,
          `cos316` varchar(50) NOT NULL,
          `cos322` varchar(50) NOT NULL,
          `cos334` varchar(50) NOT NULL,
          `cos342` varchar(50) NOT NULL,
          `ece312` varchar(50) NOT NULL,
          `ece322` varchar(50) NOT NULL,
          `elective1` varchar(50) NOT NULL,
          `elective1_ans` varchar(50) NOT NULL,
          `elective2` varchar(50) NOT NULL,
          `elective2_ans` varchar(50) NOT NULL,
          `elective3` varchar(50) NOT NULL,
          `elective3_ans` varchar(50) NOT NULL,
          `elective4` varchar(50) NOT NULL,
          `elective4_ans` varchar(50) NOT NULL,
          `elective5` varchar(50) NOT NULL,
          `elective5_ans` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB ");
        
    
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        
        if(!empty($result)){
        
        $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET cos301='$cos301', cos352='$cos352', cos372='$cos372', cos374='$cos374', elective1='$elective1', `$elective1`='$elective1_ans',  `elective1_ans`='$elective1_ans', elective2='$elective2', `$elective2`='$elective2_ans',  `elective2_ans`='$elective2_ans', elective3='$elective3', `$elective3`='$elective3_ans',  `elective3_ans`='$elective3_ans', elective4='$elective4', `$elective4`='$elective4_ans',  `elective4_ans`='$elective4_ans', elective5='$elective5', `$elective5`='$elective5_ans',  `elective5_ans`='$elective5_ans' WHERE regno='$session_student' ");
            
        }else{
            
        
        $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', cos352='$cos352', cos372='$cos372', cos374='$cos374', elective1='$elective1', `$elective1`='$elective1_ans',  `elective1_ans`='$elective1_ans', elective2='$elective2', `$elective2`='$elective2_ans',  `elective2_ans`='$elective2_ans', elective3='$elective3', `$elective3`='$elective3_ans',  `elective3_ans`='$elective3_ans', elective4='$elective4', `$elective4`='$elective4_ans',  `elective4_ans`='$elective4_ans', elective5='$elective5', `$elective5`='$elective5_ans',  `elective5_ans`='$elective5_ans' ");
    
    
        }
    
    
    

        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="third_second.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="third_second.php";
                </script>

                <?php
                

        }

    }


if(isset($_POST['upload_result_finalf'])){
    global $session_student;
    
    $dbconnect = nacoss_results_db();
        
    $cos451 = mysqli_real_escape_string($dbconnect, $_POST['cos451']);
    $cos461 = mysqli_real_escape_string($dbconnect, $_POST['cos461']);
    $cos471 = mysqli_real_escape_string($dbconnect, $_POST['cos471']);
    
    
    $elective1 = mysqli_real_escape_string($dbconnect, $_POST['elective1']);
    $elective1_ans = mysqli_real_escape_string($dbconnect, $_POST['elective1_ans']);
    $elective2 = mysqli_real_escape_string($dbconnect, $_POST['elective2']);
    $elective2_ans = mysqli_real_escape_string($dbconnect, $_POST['elective2_ans']);
    $elective3 = mysqli_real_escape_string($dbconnect, $_POST['elective3']);
    $elective3_ans = mysqli_real_escape_string($dbconnect, $_POST['elective3_ans']);
    $elective4 = mysqli_real_escape_string($dbconnect, $_POST['elective4']);
    $elective4_ans = mysqli_real_escape_string($dbconnect, $_POST['elective4_ans']);
    $elective5 = mysqli_real_escape_string($dbconnect, $_POST['elective5']);
    $elective5_ans = mysqli_real_escape_string($dbconnect, $_POST['elective5_ans']);
    
    
        
                                           
   
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_final_first";
        
        
    $create_table_query = mysqli_query($dbconnect, "
        CREATE TABLE IF NOT EXISTS `$session_result` (
          `id` int(11) NOT NULL auto_increment,
          `regno` varchar(50) NOT NULL,
          `cos451` varchar(50) NOT NULL,
          `cos461` varchar(50) NOT NULL,
          `cos471` varchar(50) NOT NULL,
          `cos415` varchar(50) NOT NULL,
          `cos411` varchar(50) NOT NULL,
          `cos413` varchar(50) NOT NULL,
          `cos431` varchar(50) NOT NULL,
          `cos453` varchar(50) NOT NULL,
          `cos455` varchar(50) NOT NULL,
          `cos457` varchar(50) NOT NULL,
          `elective1` varchar(50) NOT NULL,
          `elective1_ans` varchar(50) NOT NULL,
          `elective2` varchar(50) NOT NULL,
          `elective2_ans` varchar(50) NOT NULL,
          `elective3` varchar(50) NOT NULL,
          `elective3_ans` varchar(50) NOT NULL,
          `elective4` varchar(50) NOT NULL,
          `elective4_ans` varchar(50) NOT NULL,
          `elective5` varchar(50) NOT NULL,
          `elective5_ans` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB ");
        
    
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        
        if(!empty($result)){
        
        $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET cos451='$cos451', cos461='$cos461', cos471='$cos471', elective1='$elective1', `$elective1`='$elective1_ans', `elective1_ans`='$elective1_ans', elective2='$elective2', `$elective2`='$elective2_ans', `elective2_ans`='$elective2_ans', elective3='$elective3', `$elective3`='$elective3_ans', `elective3_ans`='$elective3_ans', elective4='$elective4', `$elective4`='$elective4_ans', `elective4_ans`='$elective4_ans', elective5='$elective5', `$elective5`='$elective5_ans', `elective5_ans`='$elective5_ans' WHERE regno='$session_student' ");
            
        }else{
            
        
        $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', cos451='$cos451', cos461='$cos461', cos471='$cos471', elective1='$elective1', `$elective1`='$elective1_ans', `elective1_ans`='$elective1_ans', elective2='$elective2', `$elective2`='$elective2_ans', `elective2_ans`='$elective2_ans', elective3='$elective3', `$elective3`='$elective3_ans', `elective3_ans`='$elective3_ans', elective4='$elective4', `$elective4`='$elective4_ans', `elective4_ans`='$elective4_ans', elective5='$elective5', `$elective5`='$elective5_ans', `elective5_ans`='$elective5_ans' ");
    
    
        }
    
    
    

        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="final_first.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="final_first.php";
                </script>

                <?php
                

        }

    }


if(isset($_POST['upload_result_finals'])){
    global $session_student;
    
    $dbconnect = nacoss_results_db();
        
    $cos452 = mysqli_real_escape_string($dbconnect, $_POST['cos452']);
    $cos462 = mysqli_real_escape_string($dbconnect, $_POST['cos462']);
    
    
    $elective1 = mysqli_real_escape_string($dbconnect, $_POST['elective1']);
    $elective1_ans = mysqli_real_escape_string($dbconnect, $_POST['elective1_ans']);
    $elective2 = mysqli_real_escape_string($dbconnect, $_POST['elective2']);
    $elective2_ans = mysqli_real_escape_string($dbconnect, $_POST['elective2_ans']);
    $elective3 = mysqli_real_escape_string($dbconnect, $_POST['elective3']);
    $elective3_ans = mysqli_real_escape_string($dbconnect, $_POST['elective3_ans']);
    $elective4 = mysqli_real_escape_string($dbconnect, $_POST['elective4']);
    $elective4_ans = mysqli_real_escape_string($dbconnect, $_POST['elective4_ans']);
    $elective5 = mysqli_real_escape_string($dbconnect, $_POST['elective5']);
    $elective5_ans = mysqli_real_escape_string($dbconnect, $_POST['elective5_ans']);
    $elective6 = mysqli_real_escape_string($dbconnect, $_POST['elective6']);
    $elective6_ans = mysqli_real_escape_string($dbconnect, $_POST['elective6_ans']);
    
    
        
                                           
   
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;
        $session_result = $start."_final_second";
        
        
    $create_table_query = mysqli_query($dbconnect, "
        CREATE TABLE IF NOT EXISTS `$session_result` (
          `id` int(11) NOT NULL auto_increment,
          `regno` varchar(50) NOT NULL,
          `cos452` varchar(50) NOT NULL,
          `cos462` varchar(50) NOT NULL,
          `cos432` varchar(50) NOT NULL,
          `cos454` varchar(50) NOT NULL,
          `cos414` varchar(50) NOT NULL,
          `cos412` varchar(50) NOT NULL,
          `cos458` varchar(50) NOT NULL,
          `cos464` varchar(50) NOT NULL,
          `cos472` varchar(50) NOT NULL,
          `cos456` varchar(50) NOT NULL,
          `elective1` varchar(50) NOT NULL,
          `elective1_ans` varchar(50) NOT NULL,
          `elective2` varchar(50) NOT NULL,
          `elective2_ans` varchar(50) NOT NULL,
          `elective3` varchar(50) NOT NULL,
          `elective3_ans` varchar(50) NOT NULL,
          `elective4` varchar(50) NOT NULL,
          `elective4_ans` varchar(50) NOT NULL,
          `elective5` varchar(50) NOT NULL,
          `elective5_ans` varchar(50) NOT NULL,
          `elective6` varchar(50) NOT NULL,
          `elective6_ans` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB ");
        
    
        $check_query = mysqli_query($dbconnect, "SELECT * FROM `$session_result` WHERE regno='$session_student' ");
        $result = mysqli_num_rows($check_query);
        
        if(!empty($result)){
        
        $insert_query = mysqli_query($dbconnect, "UPDATE `$session_result` SET cos452='$cos452', cos462='$cos462', elective1='$elective1', `$elective1`='$elective1_ans', `elective1_ans`='$elective1_ans', elective2='$elective2', `$elective2`='$elective2_ans', `elective2_ans`='$elective2_ans', elective3='$elective3', `$elective3`='$elective3_ans', `elective3_ans`='$elective3_ans', elective4='$elective4', `$elective4`='$elective4_ans', `elective4_ans`='$elective4_ans', elective5='$elective5', `$elective5`='$elective5_ans', `elective5_ans`='$elective5_ans', elective6='$elective6', `$elective6`='$elective6_ans', `elective6_ans`='$elective6_ans' WHERE regno='$session_student' ");
            
        }else{
            
        
        $insert_query = mysqli_query($dbconnect, "INSERT INTO `$session_result` SET regno='$session_student', cos452='$cos452', cos462='$cos462', elective1='$elective1', `$elective1`='$elective1_ans', `elective1_ans`='$elective1_ans', elective2='$elective2', `$elective2`='$elective2_ans', `elective2_ans`='$elective2_ans', elective3='$elective3', `$elective3`='$elective3_ans', `elective3_ans`='$elective3_ans', elective4='$elective4', `$elective4`='$elective4_ans', `elective4_ans`='$elective4_ans', elective5='$elective5', `$elective5`='$elective5_ans', `elective5_ans`='$elective5_ans', elective6='$elective6', `$elective6`='$elective6_ans', `elective6_ans`='$elective6_ans' ");
    
    
        }
    
    
    

        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="final_second.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="final_second.php";
                </script>

                <?php
                

        }

    }


?>