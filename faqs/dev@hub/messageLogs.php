<?php
require_once("../../includes/initialize.php");
     $discussion_id = $_SESSION['discussion_id'];


?>
<style>
button[type="submit"].comment-respond{
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid rgb(20, 172, 20);
  border-radius: 20px;
  box-shadow: none;
  color: #444;
  display: inline-block;
  font-size: 12px;
  font-weight: 700;
  height: 40px;
  line-height: 14px;
  margin-top: 20px;
  padding: 10px 15px;
  text-shadow: none;
  text-transform: capitalize;
  transition: all 0.3s ease 0s;
  white-space: nowrap;
}
button[type="submit"].comment-respond:hover {
  border: 1px solid rgb(20, 172, 20);
  color: #fff;
  background: rgb(20, 172, 20);
  cursor:pointer;
}
</style>
<ul>
                      <!-- comment list #1 -->
<?php
    
 if(isset($_SESSION['id'])){
     require_once("../../admin/pages/includes/php/assign_variables.php"); 
     $check = User::find_by_sql("SELECT last_joined_id FROM joined_members WHERE discussion_id = '$discussion_id' AND rnumber='$rnumber' LIMIT 1 ");
        while($v=mysqli_fetch_assoc($check)){
            $my_last_id = $v['last_joined_id'];
        }
     $find_my_discussion_id = User::find_by_sql("SELECT * FROM joined_members WHERE rnumber='$rnumber' GROUP BY discussion_id");
        $counter = 1;
        while($rw=mysqli_fetch_assoc($find_my_discussion_id)){
            $my_discussion_id[] = $rw['discussion_id'];
        }
     
 }   
    
if(isset($_SESSION['id']) && in_array($discussion_id, $my_discussion_id)){
        
        $check = User::find_by_sql("SELECT id, uname, last_joined_id, date FROM joined_members WHERE discussion_id = '$discussion_id' AND id > '$my_last_id' ");
            if(mysqli_num_rows($check) > 0){
                while($r=mysqli_fetch_assoc($check)){
                    //$user_uname = $r['uname'];
                    $last_joined_id = $r['last_joined_id'];
                    $user_date =$r['date'];

                 $explode1 = explode(" ", $user_date); $explode2 = explode("-", $explode1[0]); $joined_year = $explode2[0];
                 $joined_month = $explode2[1]; $joined_day = $explode2[2];

                 $explode3 = explode(":", $explode1[1]); $joined_hour = $explode3[0]; $joined_min = $explode3[1]; $joined_sec = $explode3[2];

                 $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); $current_sec = date('s');

                    if($joined_year == $current_year && $joined_month == $current_month){
                        $days = $current_day - $joined_day;
                         if($current_day == $joined_day){
                            $check_hrs = $current_hour - $joined_hour;
                            $check_min = $current_min - $joined_min;
                            if($current_hour == $joined_hour){
                                $period = $check_min." minutes ago";
                            }else{
                                $period = $check_hrs." hours ago";
                            }

                        }else if($days == 1){
                            $period = "yesterday";
                        }else if($days > 1){
                            $period = $days." days ago"; 
                        }

                     }else if($joined_year == $current_year && $current_month > $joined_month){
                         $chech_months = $current_month - $joined_month;
                         if($chech_months == 1){
                             $period = $chech_months." month ago";
                         }else{
                            $period = $chech_months." months ago";
                         }
                     }else{
                         $check_year = $current_year - $joined_year;
                         if($check_year == 1){
                            $period = $check_year." year ago"; 
                         }else{
                            $period = $check_year." years ago";
                         }
                     }



        ?> 
                        <li>
                            <div class="" style="">
                                <em><?php echo $r['uname']." joined ".$period; ?></em>
                            </div>
                        </li>
        <?php
                    $last_joined_id = $r['id'];

                }
            $update_my_last_id = User::find_by_sql("UPDATE joined_members SET last_joined_id = '$last_joined_id' WHERE rnumber='$rnumber' AND discussion_id='$discussion_id' ");

            }    
}   
?>
<?php
if(isset($_SESSION['id'])){
    $q = User::find_by_sql("SELECT * FROM read_messages WHERE rnumber='$rnumber' AND discussion_id='$discussion_id' LIMIT 1");
    if(mysqli_num_rows($q) == 1){
        while($table=mysqli_fetch_assoc($q)){
            $table_last_message_id = $table['last_message_id'];
        }
        $query = User::find_by_sql("SELECT * FROM discussion_logs WHERE  discussion_id='$discussion_id' AND id > '$table_last_message_id'");
        if(mysqli_num_rows($query) > 0){
            $_SESSION['unread_display'] = true;
            $query_counter = mysqli_num_rows($query);
            if($query_counter == 1){
                $message_display = "1 Unread Message";
            }else{
                $message_display = $query_counter." Unread Messages";
            }
            ?> 
                        <li>
                            <div class="" style="">
                                <em><?php echo $message_display; ?></em>
                            </div>
                        </li>
            <?php
        }else{
            $_SESSION['unread_display'] = false;
        }
    }
}
?>
<?php
    
    
if(isset($_SESSION['unread_display']) && $_SESSION['unread_display'] == true){
    $query = User::find_by_sql("SELECT * FROM discussion_logs WHERE discussion_id = '$discussion_id' AND id > '$table_last_message_id' ORDER BY id ASC ");
}else{
    $checker = User::find_by_sql("SELECT * FROM discussion_logs WHERE discussion_id = '$discussion_id'");
    $check_counter = mysqli_num_rows($checker);
    $_SESSION['check_count'] = $check_counter;
    if($check_counter > 10){
        $load_more_msgs = true;
        $min = $check_counter - 10;
        $_SESSION['min_initial'] = $min;
    }else{
        $load_more_msgs = false;
        $min = 0;
        $_SESSION['min_initial'] = $min;
    }
    
    
    if(isset($_SESSION['query']) && $_SESSION['query'] != false){
        $query = User::find_by_sql($_SESSION['query']);
        //$_SESSION['query'] = false;
    }else{
        $query = User::find_by_sql("SELECT * FROM discussion_logs WHERE discussion_id = '$discussion_id' ORDER BY id ASC LIMIT $min, $check_counter");
    }
}

    if(isset($_SESSION['noMoreMessages']) && $_SESSION['noMoreMessages'] == true){
        $load_more_msgs = false;
    }
    
    
    if($load_more_msgs == true){
?>
<div class="row">
<div class="col-md-5 col-md-offset-4" style="margin-bottom:10px">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" role="form" enctype="multipart/form-data" name="" method="post">
        <button type="submit" class="comment-respond" name="load_more_messages">Load Previous Messages&nbsp;<i class="fa fa-arrow-circle-up"></i></button>
    </form>
    </div>
    </div>
<?php
    }
if(mysqli_num_rows($query)>0){ 

while($col=mysqli_fetch_assoc($query)):
    $member_uname = $col['uname'];
    $date = $col['date'];
        $member_message_date = date('dS F, Y', strtotime($date));
        $member_message_time = date('h:i:s a', strtotime($date));
    $member_message = $col['message'];
    $member_display_image  = $col['display_picture'];
        $member_imagepath = "../../photos/".$member_display_image;
    $last_message_id = $col['id'];
?>
                      <li class="threaded-comments">
                        <div class="comments-details">
                        <div class="comments-list-img"><img src="<?php echo $member_imagepath; ?>" height="50" width="50" alt="user-img"></div>
                        <div class="comments-content-wrap">
                        <div>
                        <p style="margin-top:10px;text-align:justify">
                        <b><?php echo $member_uname; ?></b>
                          <span style="font-size:1em;float:right;color:rgb(50, 50, 50)">
                          &nbsp;<?php echo $member_message_date; ?> <i class="fa fa-calendar"></i> &nbsp; <?php echo $member_message_time; ?> 
                          </span>
                          <br>
                          <?php echo $member_message; ?>
                        </p>
                        </div>
                        <div class="faq-icn like" title="like"><i class="fa fa-star"></i>  (31)</div>
                        <div class="faq-icn share" title="share"><i class="fa fa-share-alt"></i></div>
                       </div>
                        </div>
                      </li>
<?php endwhile;
}else{ ?>
                        <em>NO MESSAGE HISTORY</em>
        <?php                
}

?>
                      

                    </ul>