<?php include('php/assign_variables.php') ?>
<?php 
if(isset($_GET['update_all'])){
    $result_set = User::find_by_sql("SELECT * FROM `discussion_logs` WHERE rnumber = '$rnumber' GROUP BY discussion_id");
    $count = mysqli_num_rows($result_set);
    while($c=mysqli_fetch_assoc($result_set)){
        $discussion_id[] = $c['discussion_id'];  
    }
    for($x=0; $x<$count; $x++){
    $result_set1 = User::find_by_sql("SELECT * FROM `discussion_logs` WHERE rnumber = '$rnumber' AND discussion_id = '$discussion_id[$x]' ");
        $count_messages = mysqli_num_rows($result_set1);
        $update_query = User::find_by_sql("UPDATE `read_messages` SET no_of_read = '$count_messages' WHERE rnumber = '$rnumber' AND discussion_id = '$discussion_id[$x]' ");
    }
}
?>
<?php
$fetch = User::find_by_sql("SELECT logged FROM all_students WHERE id='$session->user_id' LIMIT 1");
while($rw=mysqli_fetch_assoc($fetch)){
    $last_logged = $rw['logged'];
    $explode1 = explode(" ", $last_logged); $explode2 = explode("-", $explode1[0]); $logged_year = $explode2[0];
    $logged_month = $explode2[1]; $logged_day = $explode2[2];

    $explode3 = explode(":", $explode1[1]); $logged_hour = $explode3[0]; $logged_min = $explode3[1]; $logged_sec = $explode3[2];
}
if($logged_hour > 12){
    $lh = $logged_hour - 12;
    $meridian = "pm";
}else{
    $lh = $logged_hour;
    $meridian = "am";
}
$logged_time = $lh."-".$logged_min."-".$logged_sec." ".$meridian;
$logged_date = $logged_day."-".$logged_month."-".$logged_year;


 
?>
<?php

$pass_id = array();

    $result_set = User::find_by_sql("SELECT * FROM `read_messages` WHERE rnumber = '$rnumber' ");
    $total_unread_messages = 0;
if(mysqli_num_rows($result_set)>0){
        while ( $row = mysqli_fetch_array($result_set) ) :
            $count_groups = mysqli_num_rows($result_set);
            $collect[] = $row['discussion_id'];
            //$hold[] = $row[no_of_read];
        endwhile;
        $sum_all_messages = calculateNewDiscussions($rnumber, $collect, $count_groups);

        $total_read = 0;
        for($y=0; $y < $count_groups; $y++){
            $result_set = User::find_by_sql("SELECT * FROM `read_messages` WHERE rnumber = '$rnumber' AND discussion_id='$collect[$y]' ");
            while($row=mysqli_fetch_array($result_set)){
                $no_of_read = $row['no_of_read'];
                $total_read +=  $no_of_read;
                $hold[] = $no_of_read;
            }
        }
    //print_r($hold)."     "; //read messages
    //print_r($collect)."   "; //discussion id
    //echo $sum_all_messages;
    for($i = 0; $i < $count_groups; $i++){
        $unread = array();
        $result_set = User::find_by_sql("SELECT * FROM `discussion_logs` WHERE discussion_id = '$collect[$i]' ");
        $sum_for_id = mysqli_num_rows($result_set);
        $unread[$i] = $sum_for_id - $hold[$i];
        $hold2[] = $unread[$i];
    }
    $total_unread_messages = $sum_all_messages - $total_read;
}


//echo $total_unread_messages."<br>";



//print_r($hold2);    // unread logs



?>
    <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top nacoss-admin-nav nacoss-blue" role="navigation" style="margin-bottom: 0;border-bottom:0">
        <a href="../../"><div class="nacoss-nav-img"></div></a>
        <div class="navbar-header nacoss-admin-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bg-white"></span>
                    <span class="icon-bar bg-white"></span>
                    <span class="icon-bar bg-white"></span>
                </button>
                <a class="navbar-brand" href="../../">Home Page</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
               
                    <ul class="dropdown-menu dropdown-messages">
 <?php
if(mysqli_num_rows($result_set)>0){                    
     for($i = 0; $i < $count_groups; $i++){
        $unread = array();
        $result_set = User::find_by_sql("SELECT * FROM `discussion_logs` WHERE discussion_id = '$collect[$i]' ORDER BY id DESC LIMIT $hold2[$i] ");
         if(mysqli_num_rows($result_set) == 1){
             while ($result= mysqli_fetch_assoc($result_set)):

            $discussion_id = $result['discussion_id']; $rnumber =$result['rnumber']; $topic = $result['topic']; $uname = $result['uname']; $message = $result['message']; $date = $result['date'];

            $explode1 = explode(" ", $date); $explode2 = explode("-", $explode1[0]); $message_year = $explode2[0];
             $message_month = $explode2[1]; $message_day = $explode2[2];

             $explode3 = explode(":", $explode1[1]); $message_hour = $explode3[0]; $message_min = $explode3[1]; $message_sec = $explode3[2];

             $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); $current_sec = date('s');

                 if($message_year == $current_year && $message_month == $current_month){
                    $days = $current_day - $message_day;
                     if($current_day == $message_day){
                        $check_hrs = $current_hour - $message_hour;
                        $check_min = $current_min - $message_min;
                        if($current_hour == $message_hour){
                            $period = $check_min." minutes ago";
                        }else{
                            $period = $check_hrs." hours ago";
                        }

                    }else if($days == 1){
                        $period = "yesterday";
                    }else if($days > 1){
                        $period = $days." days ago"; 
                    }

                 }else if($message_year == $current_year && $current_month > $message_month){
                     $chech_months = $current_month - $message_month;
                     if($chech_months == 1){
                         $period = $chech_months." month ago";
                     }else{
                        $period = $chech_months." months ago";
                     }
                 }else{
                     $check_year = $current_year - $message_year;
                     if($check_year == 1){
                        $period = $check_year." year ago"; 
                     }else{
                        $period = $check_year." years ago";
                     }
                 }

           //  print_r($explode3);              
      ?>                                          
    <?php
    $explode = uniqid('', true);
    $explodeid = explode('.', $explode);
    $new_end = end($explodeid);
    $new_start = $explodeid[0];                        


    ?>
                            <li>
                                <a href="../../../faqs/dev@hub/index.php?status=zigma&alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$discussion_id.$new_start;?>">
                                    <div>
                                        <strong><?php echo $uname; ?> @<?php echo $result['topic']; ?></strong>
                                        <span class="pull-right text-muted">
                                            <em><?php echo $period; ?></em>
                                        </span>
                                    </div>
                                    <div><?php echo $message; ?></div>
                                </a>
                            </li>
                            <li class="divider"></li>

       <?php
            $explode = uniqid('', true);
            $explodeid = explode('.', $explode);
            $new_end = end($explodeid);
            $new_start = $explodeid[0];
             endwhile;
         }
         $discussion_id = $collect[$i];
             if(mysqli_num_rows($result_set) > 1){
                 $no_of_rows = mysqli_num_rows($result_set);


                 $result = User::find_by_sql("SELECT * FROM read_messages WHERE rnumber='$rnumber' AND discussion_id='$collect[$i]' LIMIT 1");
                 while($col = mysqli_fetch_assoc($result)){
                 $last_message_id = $col['last_message_id'];
                    $resultset = User::find_by_sql("SELECT * FROM `discussion_logs` WHERE discussion_id = '$collect[$i]' AND id ='$last_message_id' ");
                     while($r=mysqli_fetch_assoc($resultset)){
                         $last_message_date = $r['date'];

             $explode1 = explode(" ", $last_message_date); $explode2 = explode("-", $explode1[0]); $message_year = $explode2[0];
             $message_month = $explode2[1]; $message_day = $explode2[2];

             $explode3 = explode(":", $explode1[1]); $message_hour = $explode3[0]; $message_min = $explode3[1]; $message_sec = $explode3[2];

             $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); $current_sec = date('s');

                 if($message_year == $current_year && $message_month == $current_month){
                    $days = $current_day - $message_day;
                     if($current_day == $message_day){
                        $check_hrs = $current_hour - $message_hour;
                        $check_min = $current_min - $message_min;
                        if($current_hour == $message_hour){
                            $period = $check_min." minutes ago";
                        }else{
                            $period = $check_hrs." hours ago";
                        }

                    }else if($days == 1){
                        $period = "yesterday";
                    }else if($days > 1){
                        $period = $days." days ago"; 
                    }

                 }else if($message_year == $current_year && $current_month > $message_month){
                     $chech_months = $current_month - $message_month;
                     if($chech_months == 1){
                         $period = $chech_months." month ago";
                     }else{
                        $period = $chech_months." months ago";
                     }
                 }else{
                     $check_year = $current_year - $message_year;
                     if($check_year == 1){
                        $period = $check_year." year ago"; 
                     }else{
                        $period = $check_year." years ago";
                     }
                 }
                     }
                 }
                 $result_set = User::find_by_sql("SELECT * FROM `discussion_logs` WHERE discussion_id = '$collect[$i]' ORDER BY id DESC LIMIT 1");
                 while($row = mysqli_fetch_assoc($result_set)):
         ?>                                          
    <?php
    $explode = uniqid('', true);
    $explodeid = explode('.', $explode);
    $new_end = end($explodeid);
    $new_start = $explodeid[0];                                              
    ?>
                            <li>
                                <a href="../../../faqs/dev@hub/index.php?status=zigma&alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$discussion_id.$new_start;?>">
                                    <div>
                                        <strong><?php echo $no_of_rows; ?> unread messages @<?php echo $row['topic']; ?></strong>
                                        <span class="pull-right text-muted">
                                            <em>From <?php echo $period; ?></em>
                                        </span>
                                    </div>
                                    <div></div>
                                </a>
                            </li>
                            <li class="divider"></li>

       <?php  
                    $explode = uniqid('', true);
                    $explodeid = explode('.', $explode);
                    $new_end = end($explodeid);
                    $new_start = $explodeid[0];
                 endwhile;
         }


     }  
}
  ?>     
                        
                        <li>
                            <a class="text-center" href="?update_all">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
<?php
    

                
?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="profile.php">
                                <div>
                                    <p style="color:rgb(50,50,50)">
                                        <strong>User Profile</strong>
                                        <span class="pull-right text-muted"><?php echo $completed; ?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-<?php $status = checkValue($completed); echo $status; ?>" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completed; ?>%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
<?php


?>
                        <?php
                        $explode = explode('/', $rnumber);
                        $student_entry_year = $explode[0];
                        $current_year = date('Y');
                        $current_month = date('n');
                        $year_range = $current_year - $student_entry_year;
                        if($year_range == 1 && $current_month >= 5 &&  $current_month <= 7){ //from May - July
                            $range = 1; //First Semester result must av been ready
                        }else if($year_range == 1  && $current_month >= 10){ 
                            $range = 2;
                        }else if($year_range == 2 && $current_month < 5){ 
                            $range = 2;
                            
                            
                        }else if($year_range == 2 && $current_month >= 5 &&  $current_month <= 7){ //from May - July
                            $range = 3; //First Semester result must av been ready
                        }else if($year_range == 2  && $current_month >= 10){ 
                            $range = 4;
                        }else if($year_range == 3 && $current_month < 5){ 
                            $range = 4;
                            
                            
                        }else if($year_range == 3 && $current_month >= 5 &&  $current_month <= 7){ //from May - July
                            $range = 5; //First Semester result must av been ready
                        }else if($year_range == 3  && $current_month >= 10){ 
                            $range = 6;
                        }else if($year_range == 4 && $current_month < 5){ 
                            $range = 6;
                            
                            
                        }else if($year_range == 4 && $current_month >= 5 &&  $current_month <= 7){ //from May - July
                            $range = 7; //First Semester result must av been ready
                        }else if($year_range == 4  && $current_month >= 10){ 
                            $range = 8;
                        }

                        $collect_results = array();
                        $q = array();

                        $result_type = explode_my_year();
                        if($result_type <= 2017){
                            $type = "old";
                        }else{
                            $type = "new";
                        }

                        $q[1] = "SELECT * FROM $type"."_first_yr_first_semester_results WHERE rnumber = '$rnumber' LIMIT 1 ";
                        $q[2] = "SELECT * FROM $type"."_first_yr_second_semester_results WHERE rnumber = '$rnumber' LIMIT 1 ";
                        $q[3] = "SELECT * FROM $type"."_second_yr_first_semester_results WHERE rnumber = '$rnumber' LIMIT 1 ";
                        $q[4] = "SELECT * FROM $type"."_second_yr_second_semester_results WHERE rnumber = '$rnumber' LIMIT 1 ";
                        $q[5] = "SELECT * FROM $type"."_third_yr_first_semester_results WHERE rnumber = '$rnumber' LIMIT 1 ";
                        $q[6] = "SELECT * FROM $type"."_third_yr_second_semester_results WHERE rnumber = '$rnumber' LIMIT 1 ";
                        $q[7] = "SELECT * FROM $type"."_final_yr_first_semester_results WHERE rnumber = '$rnumber' LIMIT 1 ";
                        $q[8] = "SELECT * FROM $type"."_final_yr_second_semester_results WHERE rnumber = '$rnumber' LIMIT 1 ";
                        
                        if($range != 0){
                        for($x=1; $x <= $range; $x++){
                            $query = User::find_by_sql($q[$x]);
                            if($query){
                                if(mysqli_num_rows($query)>0){
                                    array_push($collect_results, $q[$x]);
                                }
                            }
                        }
                        $count_uploaded = count($collect_results);
                        $percent = checkUploaded($count_uploaded, $range);
                        }else{
                            $percent = 100; //freshers
                        }
                        ?>
                        <li>
                            <a href="upload_result.php">
                                <div>
                                    <p style="color:rgb(50,50,50)">
                                        <strong>Result Uploads</strong>
                                        <span class="pull-right text-muted"><?php echo $percent; ?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-<?php $status = checkValue($percent); echo $status; ?>" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent; ?>%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php
                        $result_set = User::find_by_sql("SELECT * FROM students_documents WHERE rnumber='$rnumber' ");
                        $num=mysqli_num_rows($result_set);
                        $default = 20;
                        if($num != 0){
                           $calc = $num/$default * 100;
                            $split = str_split($calc);
                            if(in_array('.', $split)){
                                $explode = explode('.', $calc);
                                $calc = $explode[0];
                            }
                            
                        }else{
                            $calc = 0;
                        }
                        ?>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong style="color:rgb(50,50,50)">Documents</strong>
                                        <span class="pull-right text-muted"><?php echo $calc; ?>% Uploads(<?php echo $num.'/20'?>)</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-<?php $status = checkValue(100-$calc); echo $status; ?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $calc; ?>%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php
                        $result_set = User::find_by_sql("SELECT * FROM joined_members WHERE rnumber='$rnumber' GROUP BY discussion_id");
                        $num=mysqli_num_rows($result_set);
                        if($num != 0){
                            $per = $num/10 * 100;
                            $number_of_groups = $num;
                        }else{
                            $number_of_groups = 0;
                        }
                        
                        ?>
                        <li>
                            <a href="my_discussions.php">
                                <div>
                                    <p style="color:rgb(50,50,50)">
                                        <strong>Discussions</strong>
                                        <span class="pull-right text-muted">Joined <?php echo $number_of_groups." Groups($number_of_groups/10)" ; ?></span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-<?php $status = checkValue(100-$per); echo $status; ?>" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $per; ?>%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                
                <?php
                $query_status = User::find_by_sql("SELECT my_status FROM all_students WHERE id='$session->user_id' LIMIT 1");
                while($status=mysqli_fetch_assoc($query_status)){
                    $my_status = $status['my_status'];
                }
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw" ></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php"><i class="fa fa-user fa-fw" style="color: <?php if($my_status=="online"){ echo "green"; }else{ echo "gray"; } ?>"></i> User Profile</a>
                        </li>
                        <li><a href="account_settings.php"><i class="fa fa-gear fa-fw"></i>Account Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="?logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="profile.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-comments fa-fw"></i> Chat Room<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="new_discussion.php">Create New Group</a>
                                </li>
                                <!-- <li>
                                    <a href="all_discussions.php">View All Groups</a>
                                </li> -->
                                <li>
                                    <a href="my_discussions.php">Joined Groups</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-zip-o fa-fw"></i> My Documents<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="upload_document.php">Upload Documents</a>
                                </li>
                                <li>
                                    <a href="view_document.php">View Documents</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-word-o fa-fw"></i> My Results<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="upload_result.php">Upload Result</a>
                                </li>
                                <li>
                                    <a href="view_result.php">View Results</a>
                                </li>
                                <li>
                                    <a href="student_gp.php">Current GP</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-thumbs-up fa-fw"></i> Voting System<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cast_vote.php">Cast Vote</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="?logout"><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div class="col-md-12 ext-nav">
    <span class="f-left"><b>Registration Number:</b>&nbsp;<?php echo $rnumber; ?></span> | <span class="f-right"><b>Last access : </b>&nbsp;<?php echo $logged_time."&nbsp&nbsp".$logged_date;?></span>
    </div>