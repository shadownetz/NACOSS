<?php
require_once ("../../includes/initialize.php");

$session_student = $_SESSION['rnumber'];
   
if(isset($_POST['submit'])){

    
    $query = User::find_by_sql("
    CREATE TABLE IF NOT EXISTS `voted_students` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `rnumber` varchar(50) NOT NULL ,
        `full_name` varchar(100) NOT NULL ,
        `level` varchar(50) NOT NULL ,
        `date` TIMESTAMP NOT NULL ,
        PRIMARY KEY (  `id` )
        ) ENGINE = INNODB ");
    
    $check_query = User::find_by_sql("SELECT * FROM `nacoss`.`voted_students` WHERE rnumber='$session_student' ");
        $result = mysqli_num_rows($check_query);
        
        if(empty($result)){
    
    
    
    $president = htmlentities($_POST['president']);
    $vice_president = htmlentities($_POST['vice_president']);
    $secretary_general = htmlentities($_POST['secretary_general']);
    $financial_secretary = htmlentities($_POST['financial_secretary']);
    $social_1 = htmlentities($_POST['social_1']);
    $social_2 = htmlentities($_POST['social_2']);
    $software_1 = htmlentities($_POST['software_1']);
    $software_2 = htmlentities($_POST['software_2']);
    $academics_1 = htmlentities($_POST['academics_1']);
    $academics_2 = htmlentities($_POST['academics_2']);
    $librarian = htmlentities($_POST['librarian']);
    $provost = htmlentities($_POST['provost']);
    
    
    $explode_president = explode("_", $president);
    $explode_vice_president = explode("_", $vice_president);
    $explode_secretary_general = explode("_", $secretary_general);
    $explode_financial_secretary = explode("_", $financial_secretary);
    $explode_social_1 = explode("_", $social_1);
    $explode_social_2 = explode("_", $social_2);
    $explode_software_1 = explode("_", $software_1);
    $explode_software_2 = explode("_", $software_2);
    $explode_academics_1 = explode("_", $academics_1);
    $explode_academics_2 = explode("_", $academics_2);
    $explode_librarian = explode("_", $librarian);
    $explode_provost = explode("_", $provost);
    
    $end_president = end($explode_president);
    $end_vice_president = end($explode_vice_president);
    $end_secretary_general = end($explode_secretary_general);
    $end_financial_secretary = end($explode_financial_secretary);
    $end_social_1 = end($explode_social_1);
    $end_social_2 = end($explode_social_2);
    $end_software_1 = end($explode_software_1);
    $end_software_2 = end($explode_software_2);
    $end_academics_1 = end($explode_academics_1);
    $end_academics_2 = end($explode_academics_2);
    $end_librarian = end($explode_librarian);
    $end_provost = end($explode_provost);
    
    
    $start_president = $explode_president[0];
        if($start_president == "yes"){
            
            
            $president_rnumber = $end_president;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE rnumber='$president_rnumber' ");
           
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$president_rnumber' ");
        }else if($start_president == "no"){
            
            $president_rnumber = $end_president;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE `rnumber` ='$president_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$president_rnumber' ");
            
        }
    
    $start_vice_president = $explode_vice_president[0];
        if($start_vice_president == "yes"){
            
        $vice_president_rnumber = $end_vice_president;
        $query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE `rnumber` = '$vice_president_rnumber' ");
            
        while ( $row = mysqli_fetch_array($query) ) {	
            $eligibility = $row['eligibility'];
            $new_eligibility = $eligibility + 1;
        }
        $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$vice_president_rnumber' ");
    }else if($start_vice_president == "no"){

        $vice_president_rnumber = $end_vice_president;
        $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$vice_president_rnumber' ");
        while ( $row = mysqli_fetch_array($query) ) {	
            $ineligibility = $row['ineligibility'];
            $new_ineligibility = $ineligibility + 1;
        }
        $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$vice_president_rnumber' ");

    }
    
    $start_secretary_general = $explode_secretary_general[0];
        if($start_secretary_general == "yes"){
                
            $secretary_general_rnumber = $end_secretary_general;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$secretary_general_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$secretary_general_rnumber' ");
        }else if($start_secretary_general == "no"){

            $secretary_general_rnumber = $end_secretary_general;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$secretary_general_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$secretary_general_rnumber' ");

        }
    
    $start_financial_secretary = $explode_financial_secretary[0];
        if($start_financial_secretary == "yes"){
                    
            $financial_secretary_rnumber = $end_financial_secretary;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$financial_secretary_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$financial_secretary_rnumber' ");
        }else if($start_financial_secretary == "no"){
            
            $financial_secretary_rnumber = $end_financial_secretary;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$financial_secretary_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$financial_secretary_rnumber' ");
            
        }
    
    $start_social_1 = $explode_social_1[0];
        if($start_social_1 == "yes"){
                    
            $social_1_rnumber = $end_social_1;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$social_1_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$social_1_rnumber' ");
        }else if($start_social_1 == "no"){
            
            $social_1_rnumber = $end_social_1;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$social_1_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$social_1_rnumber' ");
            
        }
        
    $start_social_2 = $explode_social_2[0];
        if($start_social_2 == "yes"){
                    
            $social_2_rnumber = $end_social_2;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$social_2_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$social_2_rnumber' ");
        }else if($start_social_2 == "no"){
            
            $social_2_rnumber = $end_social_2;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$social_2_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$social_2_rnumber' ");
            
        }
    
    $start_software_1 = $explode_software_1[0];
        if($start_software_1 == "yes"){
                    
            $software_1_rnumber = $end_software_1;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$software_1_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$software_1_rnumber' ");
        }else if($start_software_1 == "no"){
            
            $software_1_rnumber = $end_software_1;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$software_1_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$software_1_rnumber' ");
            
        }
    
    $start_software_2 = $explode_software_2[0];
        if($start_software_2 == "yes"){
                    
            $software_2_rnumber = $end_software_2;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$software_2_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$software_2_rnumber' ");
        }else if($start_software_2 == "no"){
            
            $software_2_rnumber = $end_software_2;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$software_2_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$software_2_rnumber' ");
            
        }
    
    $start_academics_1 = $explode_academics_1[0];
        if($start_academics_1 == "yes"){
                    
            $academics_1_rnumber = $end_academics_1;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$academics_1_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$academics_1_rnumber' ");
        }else if($start_academics_1 == "no"){
            
            $academics_1_rnumber = $end_academics_1;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$academics_1_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$academics_1_rnumber' ");
            
        }
    
    $start_academics_2 = $explode_academics_2[0];
        if($start_academics_2 == "yes"){
                    
            $academics_2_rnumber = $end_academics_2;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$academics_2_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$academics_2_rnumber' ");
        }else if($start_academics_2 == "no"){
            
            $academics_2_rnumber = $end_academics_2;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$academics_2_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$academics_2_rnumber' ");
            
        }
    
    $start_librarian = $explode_librarian[0];
        if($start_librarian == "yes"){
                    
            $librarian_rnumber = $end_librarian;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$librarian_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$librarian_rnumber' ");
        }else if($start_librarian == "no"){
            
            $librarian_rnumber = $end_librarian;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$librarian_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$librarian_rnumber' ");
            
        }

    
    $start_provost = $explode_provost[0];
        if($start_provost == "yes"){
                    
            $provost_rnumber = $end_provost;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$provost_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $eligibility = $row['eligibility'];
                $new_eligibility = $eligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `eligibility` = '$new_eligibility' WHERE `rnumber` = '$provost_rnumber' ");
        }else if($start_provost == "no"){
            
            $provost_rnumber = $end_provost;
            $query = User::find_by_sql("SELECT * FROM `nacoss`.voting_system WHERE `rnumber` = '$provost_rnumber' ");
            while ( $row = mysqli_fetch_array($query) ) {	
                $ineligibility = $row['ineligibility'];
                $new_ineligibility = $ineligibility + 1;
            }
            $query = User::find_by_sql("UPDATE `nacoss`.`voting_system` SET `ineligibility` = '$new_ineligibility' WHERE `rnumber` = '$provost_rnumber' ");
            
        }
            
            $insert_query = User::find_by_sql("INSERT INTO `nacoss`.`voted_students` SET `rnumber`='$rnumber', level='$level', `full_name`='$full_name', date=NOW() ");
            if($insert_query){
                ?>
               <script type="text/javascript">
            alert("Student Voted Successfully!");

            window.location="cast_vote.php";
            </script>
            <?php

            die();
            }
    }else{
            
             ?>
               <script type="text/javascript">
            alert("Sorry Student Already Voted, you cannot vote more than once!");

            window.location="cast_vote.php";
            </script>
            <?php

            die();
            
        }
    
}
?>
<div class="container nacoss-all-discuss nacoss-vote" >
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="document-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cast Vote</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                <table width="100%" class="table table-responsive" id="dataTables-example">
<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='president' ");
$result = mysqli_num_rows($query);
$counter_President=1;
if(!empty($result)){
?>
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For President</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
                                 <tbody>
                                           
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $President_rnumber = $row['rnumber'];
    $President_fullname = $row['full_name'];
    $President_post = $row['post']; 
  ?> 
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_President;?></h5></td>
                                        <td><h4><?php echo $President_fullname; ?></h4></td>
                                        <td >
                                            <input type="radio" name="president" value="<?php echo "yes"."_".$President_rnumber; ?>" >
                                        </td>
                                        <td >
                                            <input type="radio" name="president" value="<?php echo "no"."_".$President_rnumber; ?>">
                                    </td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_President;?></h5></td>
                                        <td><h4><?php echo $President_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="president" value="<?php echo "yes"."_".$President_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_President++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='vice_president' ");
$counter_vice_president=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Vice President</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $vice_president_rnumber = $row['rnumber'];
    $vice_president_fullname = $row['full_name'];
    $vice_president_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_vice_president;?></h5></td>
                                        <td><h4><?php echo $vice_president_fullname; ?></h4></td>
                                        <td ><input type="radio" name="vice_president" value="<?php echo "yes"."_".$vice_president_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="vice_president" value="<?php echo "no"."_".$vice_president_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_vice_president;?></h5></td>
                                        <td><h4><?php echo $vice_president_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="vice_president" value="<?php echo "yes"."_".$vice_president_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_vice_president++;
}
    ?>

 <?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='secretary_general' ");
$counter_secretary_general=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>    
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Secretary General</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $secretary_general_rnumber = $row['rnumber'];
    $secretary_general_fullname = $row['full_name'];
    $secretary_general_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_secretary_general;?></h5></td>
                                        <td><h4><?php echo $secretary_general_fullname; ?></h4></td>
                                        <td ><input type="radio" name="secretary" value="<?php echo "yes"."_".$secretary_general_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="secretary" value="<?php echo "no"."_".$secretary_general_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_secretary_general;?></h5></td>
                                        <td><h4><?php echo $secretary_general_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="secretary" value="<?php echo "yes"."_".$secretary_general_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_secretary_general++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='financial_secretary' ");
$counter_financial_secretary=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Financial Secretary</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $financial_secretary_rnumber = $row['rnumber'];
    $financial_secretary_fullname = $row['full_name'];
    $financial_secretary_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_financial;?></h5></td>
                                        <td><h4><?php echo $financial_fullname; ?></h4></td>
                                        <td ><input type="radio" name="financial_secretary" value="<?php echo "yes"."_".$financial_secretary_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="financial_secretary" value="<?php echo "no"."_".$financial_secretary_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_financial_secretary;?></h5></td>
                                        <td><h4><?php echo $financial_secretary_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="financial_secretary" value="<?php echo "yes"."_".$financial_secretary_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_financial_secretary++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='social_1' ");
$counter_social_1=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Director of Social I</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $social_1_rnumber = $row['rnumber'];
    $social_1_fullname = $row['full_name'];
    $social_1_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_social_1;?></h5></td>
                                        <td><h4><?php echo $social_1_fullname; ?></h4></td>
                                        <td ><input type="radio" name="social_1" value="<?php echo "yes"."_".$social_1_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="social_1" value="<?php echo "no"."_".$social_1_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_social_1;?></h5></td>
                                        <td><h4><?php echo $social_1_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="social_1" value="<?php echo "yes"."_".$social_1_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_social_1++;
}
    ?>
                                
<?php                                
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='social_2' ");
$counter_social_2=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Director of Social II</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $social_2_rnumber = $row['rnumber'];
    $social_2_fullname = $row['full_name'];
    $social_2_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_social_2;?></h5></td>
                                        <td><h4><?php echo $social_2_fullname; ?></h4></td>
                                        <td ><input type="radio" name="social_2" value="<?php echo "yes"."_".$social_2_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="social_2" value="<?php echo "no"."_".$social_2_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_social_2;?></h5></td>
                                        <td><h4><?php echo $social_2_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="social_2" value="<?php echo "yes"."_".$social_2_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_social_2++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='software_1' ");
$counter_software_1=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Director of Software I</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $software_1_rnumber = $row['rnumber'];
    $software_1_fullname = $row['full_name'];
    $software_1_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_software_1;?></h5></td>
                                        <td><h4><?php echo $software_1_fullname; ?></h4></td>
                                        <td ><input type="radio" name="software_1" value="<?php echo "yes"."_".$software_1_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="software_1" value="<?php echo "no"."_".$software_1_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_software_1;?></h5></td>
                                        <td><h4><?php echo $software_1_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="software_1" value="<?php echo "yes"."_".$software_1_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_software_1++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='software_2' ");
$counter_software_2=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Director of Social II</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $software_2_rnumber = $row['rnumber'];
    $software_2_fullname = $row['full_name'];
    $software_2_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_software_2;?></h5></td>
                                        <td><h4><?php echo $software_2_fullname; ?></h4></td>
                                        <td ><input type="radio" name="software_2" value="<?php echo "yes"."_".$software_2_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="software_2" value="<?php echo "no"."_".$software_2_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_software_2;?></h5></td>
                                        <td><h4><?php echo $software_2_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="software_2" value="<?php echo "yes"."_".$software_2_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_software_2++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='academics_1' ");
$counter_academics_1=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Director of Academics I</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $academics_1_rnumber = $row['rnumber'];
    $academics_1_fullname = $row['full_name'];
    $academics_1_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_academics_1;?></h5></td>
                                        <td><h4><?php echo $academics_1_fullname; ?></h4></td>
                                        <td ><input type="radio" name="academics_1" value="<?php echo "yes"."_".$academics_1_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="academics_1" value="<?php echo "no"."_".$academics_1_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_academics_1;?></h5></td>
                                        <td><h4><?php echo $academics_1_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="academics_1" value="<?php echo "yes"."_".$academics_1_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_academics_1++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='academics_2' ");
$counter_academics_2=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Director of Academics II</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $academics_2_rnumber = $row['rnumber'];
    $academics_2_fullname = $row['full_name'];
    $academics_2_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_academics_2;?></h5></td>
                                        <td><h4><?php echo $academics_2_fullname; ?></h4></td>
                                        <td ><input type="radio" name="academics_2" value="<?php echo "yes"."_".$academics_2_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="academics_2" value="<?php echo "no"."_".$academics_2_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_academics_2;?></h5></td>
                                        <td><h4><?php echo $academics_2_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="academics_2" value="<?php echo "yes"."_".$academics_2_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_academics_2++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='librarian' ");
$counter_librarian=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Librarian</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $librarian_rnumber = $row['rnumber'];
    $librarian_fullname = $row['full_name'];
    $librarian_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_librarian;?></h5></td>
                                        <td><h4><?php echo $librarian_fullname; ?></h4></td>
                                        <td ><input type="radio" name="librarian" value="<?php echo "yes"."_".$librarian_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="librarian" value="<?php echo "no"."_".$librarian_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_librarian;?></h5></td>
                                        <td><h4><?php echo $librarian_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="librarian" value="<?php echo "yes"."_".$librarian_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_librarian++;
}
    ?>

<?php
$query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system` WHERE post='provost' ");
$counter_provost=1;
$result = mysqli_num_rows($query);
if(!empty($result)){
?>                                 
                                <thead>
                                <tr>
                                <th colspan="4"><h4>For Provost</h4></th>
                                </tr>
                                </thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Vote</th>
                                        <th>No-Vote</th>
                                    </tr>
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $provost_rnumber = $row['rnumber'];
    $provost_fullname = $row['full_name'];
    $provost_post = $row['post']; 
  ?>                                
<?php if(mysqli_num_rows($query)==1){ ?>
                               
                                    <tr>
                                        <td><h5 ><?php echo $counter_provost;?></h5></td>
                                        <td><h4><?php echo $provost_fullname; ?></h4></td>
                                        <td ><input type="radio" name="provost" value="<?php echo "yes"."_".$provost_rnumber; ?>" ></td>
                                        <td ><input type="radio" name="provost" value="<?php echo "no"."_".$provost_rnumber; ?>"></td>
                                    </tr>
                                
	<?php
                                    }else if(mysqli_num_rows($query)>1){
    ?>
                                
                                    <tr>
                                        <td><h5 ><?php echo $counter_provost;?></h5></td>
                                        <td><h4><?php echo $provost_fullname; ?></h4></td>
                                        <td colspan="2"><input type="radio" name="provost" value="<?php echo "yes"."_".$provost_rnumber; ?>" ></td>
                                    </tr>
                                
	<?php
  }
		$counter_provost++;
}
    ?>

                                </tbody>
                                </table>
<?php $query = User::find_by_sql("SELECT * FROM `nacoss`.`voting_system`"); if(mysqli_num_rows($query)>0){ ?>                             
                                
                                <button class="nacoss-btn" name="submit">Submit</button>
<?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>