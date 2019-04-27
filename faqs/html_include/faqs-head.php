<?php
require_once('../../includes/initialize.php');

if(isset($_POST['signin'])){
            
$uname  = $database->escape_value($_POST ['uname']);
$pword = $database->escape_value($_POST ['pword']);
       	
$epassword = md5($pword);;
$result_set = User::student_login($uname, $epassword);
    while ( $row = $database->fetch_array($result_set)) {
        $session->login($row['id']);
        $_SESSION['id'] = $row['id'];
        if($row['user_type'] == "user"){
            $_SESSION['user_location'] = "user";
            $_SESSION['my_portal_location'] = 'user/pages/dashboard.php';
            //redirect_to("user/pages/dashboard.php");
        }else if($row['user_type'] == "admin"){
            $_SESSION['user_location'] = "admin";
            $_SESSION['my_portal_location'] = 'admin/pages/dashboard.php?admin_test';
            //redirect_to("admin/pages/dashboard.php?admin_test");
        }if($row['user_type'] == "super_admin"){
            $_SESSION['user_location'] = "super_admin";
            $_SESSION['my_portal_location'] = 'admin/pages/dashboard.php?admin_test';
            //redirect_to("admin/pages/dashboard.php?super_admin_test");
        }
    }
}

if(isset($_POST['send_message'])){
    require_once("../../admin/pages/includes/php/assign_variables.php");
    
    $message = $database->escape_value($_POST ['message_box']);
    $discussion_id = $_SESSION['discussion_id'];
        
        $fetch_query = User::find_by_sql("SELECT * FROM discussions WHERE id='$discussion_id' ");
            while($result = mysqli_fetch_assoc($fetch_query)){
                $topic = $result['topic'];
            }
    
    $send_query = User::find_by_sql("INSERT INTO discussion_logs SET display_picture='$picture', rnumber='$rnumber', uname='$uname', discussion_id='$discussion_id', topic='$topic', message='$message', date=NOW()");
    
    if($send_query){
        $get_last_id_query = User::find_by_sql("SELECT id FROM discussion_logs WHERE discussion_id='$discussion_id' ORDER BY id DESC LIMIT 1");
        while($cl=mysqli_fetch_assoc($get_last_id_query)){
            $last_message_id = $cl['id'];
        }
        
        $result = User::find_by_sql("SELECT * FROM discussion_logs WHERE discussion_id='$discussion_id'");
        $no_of_read = mysqli_num_rows($result);
        $check = User::find_by_sql("SELECT * FROM read_messages WHERE rnumber='$rnumber' AND discussion_id='$discussion_id' LIMIT 1");
            if(mysqli_num_rows($check) == 1){
                $update_read_message_query = User::find_by_sql("UPDATE read_messages SET last_message_id='$last_message_id', no_of_read='$no_of_read', date=NOW() WHERE discussion_id = '$discussion_id' AND rnumber='$rnumber' ");
            }else{
                $insert_read_message_query = User::find_by_sql("INSERT INTO read_messages SET last_message_id='$last_message_id', discussion_id='$discussion_id', rnumber='$rnumber', uname='$uname', no_of_read='$no_of_read', date=NOW() ");
            }
    }
        
}
    
    
function cal($value=""){
    $split = str_split($value);
    $count = count($split);
    $val = $split[0];
    if($count==3){ $num = $val.'h'; }
    elseif($count==4){ $num = $val.'k'; }
    elseif($count==5){ $val2 = $split[1]; $num = $val.$val2.'k'; }
    elseif($count==6){ $val2 = $split[1]; $val3 = $split[2]; $num = $val.$val2.$val3.'k'; }else{$num = $value;}
    return $num;
}
function star($num=""){
    if($num < 100){ $progress = 1;}elseif($num >= 100 && $num < 200){$progress = 2;}elseif($num >= 200 && $num < 300){$progress = 3;}elseif($num >= 300 && $num < 400){$progress = 4;}elseif($num >= 400){ $progress = 5;}else{$progress = 0;}
    return $progress;
}


    $zigma = $database->escape_value($_GET['zigma']);
    $alpha = $database->escape_value($_GET['alpha']);
	$delta = $database->escape_value($_GET['delta']);
    $status = $database->escape_value($_GET['status']);	

	$explode1 = explode($alpha, $zigma);
	$explode2 = explode($delta, $explode1[0]);
	
	$discussion_id = $explode2[1];
    $_SESSION['discussion_id'] = $discussion_id;
//echo $discussion_id;

function returnQuery($min, $check_counter){
    global $discussion_id;
    if(isset($_SESSION['min'])){
        if($_SESSION['min'] >= 10){
            $min = $_SESSION['min'] - 10;
            $_SESSION['min'] = $min;
        }else{
            $min = 0;
            $_SESSION['noMoreMessages'] = true;
        }
        
    }else{
        if($min >= 10){
            $min = $min - 10;
            $_SESSION['min'] = $min;
        }else{
            $min = 0;
            $_SESSION['noMoreMessages'] = true;
        }  
    }
    $query = "SELECT * FROM discussion_logs WHERE discussion_id = '$discussion_id' ORDER BY id ASC LIMIT $min, $check_counter";
    //return $query;
    $_SESSION['query'] = $query;
}

if(isset($_POST['load_more_messages'])){
    returnQuery($_SESSION['min_initial'], $_SESSION['check_count']);
    $_SESSION['omega'] = true;
}else{
    $_SESSION['omega'] = false;
}

if(isset($_GET['omega']) && isset($_GET['zigma']) && isset($_GET['alpha']) && isset($_GET['delta']) && isset($_GET['status'])){
    if($_GET['omega'] == "none" && $_SESSION['omega'] == false){
        unset($_SESSION['query']);
        unset($_SESSION['noMoreMessages']);
        unset($_SESSION['min_initial']);
        unset($_SESSION['min']);
        unset($_SESSION['check_count']);
    }
}


if(isset($_SESSION['id']) && $status == 'delta'){ //joining member
    require_once("../../admin/pages/includes/php/assign_variables.php");
    
    $result_set = User::find_by_sql("SELECT * FROM discussions WHERE id = '$discussion_id' LIMIT 1");
    if(mysqli_num_rows($result_set) == 1){
        while($ch=mysqli_fetch_assoc($result_set)){
            $type = $ch['discussion_type'];
            $creator_rnumber = $ch['rnumber'];
        }
        $check_query = User::find_by_sql("SELECT * FROM joined_members WHERE rnumber='$rnumber' AND discussion_id='$discussion_id' LIMIT 1");
        if(mysqli_num_rows($check_query) < 1){

            if($type == 'classic'){
                $explode = explode("/", $creator_rnumber);
                $allowed = $explode[0];

                $explode_student = explode("/", $rnumber);
                $allow_student = $explode_student[0];

                    if($allowed == $allow_student){
                        $insert_query = User::find_by_sql("INSERT INTO joined_members SET rnumber='$rnumber', discussion_id='$discussion_id', uname='$uname', joined_status='0', date=NOW()");
                        echo "<script> alert('You joined Successfully!'); </script>";
                    }else{
                        echo "<script> alert('Sorry, you can not join this group, but can be able to check in!'); </script>";
                    } 
            }else{
                $insert_query = User::find_by_sql("INSERT INTO joined_members SET rnumber='$rnumber', discussion_id='$discussion_id', uname='$uname', joined_status='0', date=NOW()");
                $get_query = User::find_by_sql("SELECT id FROM joined_members WHERE discussion_id='$discussion_id' AND rnumber='$rnumber' ORDER BY id DESC LIMIT 1");
                while($r=mysqli_fetch_assoc($get_query)){
                    $my_last_id = $r['id'];
                }
                $update_last_id = User::find_by_sql("UPDATE joined_members SET last_joined_id = '$my_last_id' WHERE rnumber='$rnumber' AND discussion_id='$discussion_id' ");
                
                if($type == 'private'){
                    $query = User::find_by_sql("SELECT * FROM private_discussions WHERE rnumber='$rnumber' AND discussion_id='$discussion_id' LIMIT 1");
                    if(mysqli_num_rows($query) < 1){
                        $insert_query = User::find_by_sql("INSERT INTO private_discussions SET rnumber='$rnumber', discussion_id='$discussion_id', uname='$uname', status='0', date=NOW() ");
                        echo "<script> alert('You joined Successfully!'); </script>";
                    }

                } 
                
            }
        }
    }
    
}



$get_query = User::find_by_sql("SELECT * FROM discussions WHERE id = '$discussion_id' LIMIT 1");
while($row=mysqli_fetch_assoc($get_query)){
    $discussion_id =$row['id'];
    $discussion_topic =$row['topic'];
    $discussion_type =strtoupper($row['discussion_type']);
    $discussion_aim = $row['discussion_aim'];
    $display_picture = $row['display_picture'];
    $discussion_creator =$row['rnumber'];
    $discussion_date =$row['date'];
    
    $members_query = User::find_by_sql("SELECT discussion_id FROM joined_members WHERE discussion_id = '$discussion_id'");
        $no_of_members = mysqli_num_rows($members_query);
            $comments_query = User::find_by_sql("SELECT discussion_id FROM  discussion_logs WHERE discussion_id = '$discussion_id'");
                $no_of_comments = mysqli_num_rows($comments_query);
        $progress = star($no_of_members);
        $num_of_users = cal($no_of_members);
        $num_of_comments = cal($no_of_comments);
            
            
            
        $creator_query = User::find_by_sql("SELECT fname, lname, uname FROM all_students WHERE rnumber = '$discussion_creator' LIMIT 1");
            while($r=mysqli_fetch_assoc($creator_query)){
                $creator = $r['fname'].' '.$r['lname'].'('.$r['uname'].')';
            }
            
        $D_date = date('jS F, Y', strtotime($discussion_date));
        $D_time = date('h:i:s a', strtotime($discussion_date));
}

?>
<div class="col-md-8 col-sm-8 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img" style="margin-top:0.5%;background:url('../img/<?php echo $display_picture; ?>') center center;height:250px;background-size:100%;background-repeat:no-repeat"></div>
              <div class="blog-meta" style="float:right;padding:0px 7px">
                <span class="creator-type">
										<i class="fa fa-user-secret">Created by:</i>
										<span><?php echo $creator; ?></span>
									</span>
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#"><?php echo $num_of_comments; ?> comments</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i><?php echo $D_date; ?> / <?php echo $D_time; ?>
									</span>
              </div>