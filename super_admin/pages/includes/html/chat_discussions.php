<link rel="stylesheet" href="stylechat.css">

<?php
require_once ("../../includes/initialize.php");
require_once("includes/php/assign_variables.php");

    $session_student = $_SESSION['rnumber'];
$explode_student = explode("/", $session_student);
$allow_student = $explode_student[0];

        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "nacoss";

    $dbconnect = mysqli_connect($host, $user, $pass, $database);


    if(mysqli_connect_errno()){
        die("Database connection failed: ".
        mysqli_connect_error().
                "(".mysqli_connect_errno().")"
            );
     }



    $zigma = mysqli_real_escape_string($dbconnect, $_GET['zigma']);
	$alpha = mysqli_real_escape_string($dbconnect, $_GET['alpha']);
	$delta = mysqli_real_escape_string($dbconnect, $_GET['delta']);

    $_SESSION['alpha'] = $alpha;
    $_SESSION['delta'] = $delta;
    $_SESSION['zigma'] = $zigma;
	
	$explode1 = explode($alpha, $zigma);
	$explode2 = explode($delta, $explode1[0]);
	
	$discussion_id = $explode2[1];
    $_SESSION['discussion_id'] = $discussion_id;
	   
    $create_table_query = mysqli_query($dbconnect, "
                CREATE TABLE IF NOT EXISTS `discussion_logs` (
                  `id` int(11) NOT NULL auto_increment,
                  `discussion_id` int(11) NOT NULL,
                  `rnumber` varchar(15) NOT NULL,
                  `topic` varchar(50) NOT NULL,
                  `message` text NOT NULL,
                  `display_picture` varchar(30) NOT NULL,
                  `date` timestamp NOT NULL,
                PRIMARY KEY  (`id`)
                ) ENGINE=InnoDB ");
    $create_table_joined = mysqli_query($dbconnect, "
                    CREATE TABLE  `nacoss`.`joined_members` (
                    `id` INT NOT NULL AUTO_INCREMENT ,
                    `discussion_id` INT NOT NULL ,
                    `uname` VARCHAR( 50 ) NOT NULL ,
                    `rnumber` VARCHAR( 50 ) NOT NULL ,
                    `last_joined_id` INT NOT NULL ,
                    `date` TIMESTAMP NOT NULL ,
                    PRIMARY KEY (  `id` )
                ) ENGINE = INNODB");
    /*$insert = mysqli_query($dbconnect, "INSERT INTO joined_members SET rnumber='$session_student', discussion_id='$discussion_id', uname='$uname', joined_status='0', date=NOW()");*/
    //$result_set = User::find_by_sql("INSERT INTO discussion_logs SET display_picture='$picture', rnumber='$rnumber', uname='$uname', discussion_id='$discussion_id', topic='$topic', message='$message', date=NOW()");



$fetch_query = mysqli_query($dbconnect, "SELECT * FROM discussions WHERE id='$discussion_id' ");
            while($result = mysqli_fetch_assoc($fetch_query)){
                $group_topic = $result['topic'];
                $group_type = $result['discussion_type'];
                $group_rnumber = $result['rnumber'];
                
                $query = mysqli_query($dbconnect, "SELECT * FROM all_students WHERE rnumber = '$group_rnumber' LIMIT 1");
                while($r=mysqli_fetch_assoc($query)){
                    $group_creator = $r['uname'];
                }
                
                $explode = explode("/", $group_rnumber);
                $allowed = $explode[0];
            }
        if($group_type == 'private' ){
            $new_users = 0;
            $find_new_user_query = mysqli_query($dbconnect, "SELECT * FROM private_discussions WHERE discussion_id='$discussion_id' AND status='0' ");
            $new_users = mysqli_num_rows($find_new_user_query);
            $_SESSION['private_id'] = $discussion_id;
            
            $query = mysqli_query($dbconnect, "SELECT * FROM private_discussions WHERE rnumber='$session_student' AND discussion_id='$discussion_id' ");
            if(mysqli_num_rows($query) == 1){
                while($col=mysqli_fetch_assoc($query)){
                    if($col['status'] == 0){
                        ?>
                            <script type="text/javascript">
                    alert("You are not confirmed yet, Kindly check back later!");
                    window.location="all_discussions.php";																//header location
                        </script>
                    <?php
                    die(); 
                    }
                }
            }else{
                if(mysqli_num_rows($query) == 0){
                    
                    $insert_query = mysqli_query($dbconnect, "INSERT INTO private_discussions SET rnumber='$session_student', discussion_id='$discussion_id', uname='$uname', status='0', date=NOW() ");
                    if($insert_query){
                           ?>
                            <script type="text/javascript">
                    alert("Kindly check back while you are being confirmed to the group discussion!");
                    window.location="all_discussions.php";																//header location
                        </script>
                    <?php
                    die(); 
                    }
                }
            }
        }
        if($group_type == 'classic' && $allowed != $allow_student){
                    ?>
                        <script type="text/javascript">
        		alert("You can not join this group!");
        		window.location="all_discussions.php";																//header location
        			</script>
        		<?php
        		die();
                }
?>
<?php
/*$update_message_query = "UPDATE read_messages SET no_of_read='$no_of_read' WHERE discussion_id = '$discussion_id' ";
$result_set = User::find_by_sql($update_message_query);*/

?>

<h1 class="page-header" style=""><?php echo $group_topic; ?><i><a href="new_private_user.php" style="color: green;"><?php if($group_type == 'private' && $new_users > 1){ echo $new_users.' new users'; }elseif($group_type == 'private' && $new_users == 1){ echo $new_users.' new user';}  ?></a></i></h1>

<?php

  $query = "SELECT * FROM discussion_logs WHERE discussion_id='$discussion_id' ORDER BY id ASC ";

  $result = mysqli_query($dbconnect, $query);

if(mysqli_num_rows($result) > 0){
    //
    //
    //
    //
    $check = mysqli_query($dbconnect, "SELECT id, last_joined_id, joined_status FROM joined_members WHERE discussion_id = '$discussion_id' AND rnumber='$session_student' LIMIT 1 ");
    if(mysqli_num_rows($check) > 0){
    while($v=mysqli_fetch_assoc($check)){
        $my_last_id = $v['id'];
        $joined_status = $v['joined_status'];
    }
        if($joined_status == '0'){
?> 
        <em>You joined</em>
<?php
        $update = mysqli_query($dbconnect, "UPDATE joined_members SET joined_status='1' WHERE rnumber='$session_student' AND discussion_id='$discussion_id' ");
        }
    }else{
        $insert = mysqli_query($dbconnect, "INSERT INTO joined_members SET rnumber='$session_student', discussion_id='$discussion_id', uname='$uname', joined_status='0', date=NOW()");
 ?> 
        <em>You joined</em>
<?php  
        $check_id = mysqli_query($dbconnect, "SELECT id FROM joined_members WHERE discussion_id='$discussion_id' AND rnumber='$session_student' LIMIT 1");
        while($d=mysqli_fetch_assoc($check_id)){
            $my_last_id = $d['id'];
        }
        $update_last_id = mysqli_query($dbconnect, "UPDATE joined_members SET last_joined_id = '$my_last_id' WHERE rnumber='$session_student' AND discussion_id='$discussion_id' ");
    }
    
    $check = mysqli_query($dbconnect, "SELECT id, uname, last_joined_id, date FROM joined_members WHERE discussion_id = '$discussion_id' AND id > '$my_last_id' ");
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
        <em><?php echo $r['uname']." joined ".$period; ?></em>
<?php
            $last_joined_id = $r['id'];
        }
    $update_my_last_id = mysqli_query($dbconnect, "UPDATE joined_members SET last_joined_id = '$last_joined_id' WHERE rnumber='$session_student' AND discussion_id='$discussion_id' ");
        
    }   
    
    
    //
            //
            //
            //
    $no_of_read = mysqli_num_rows($result);
    $check = mysqli_query($dbconnect, "SELECT * FROM read_messages WHERE rnumber='$session_student' AND discussion_id='$discussion_id' ");
    if(mysqli_num_rows($check) > 0){
        
        $update_read_message_query = mysqli_query($dbconnect, "UPDATE read_messages SET no_of_read='$no_of_read', date=NOW() WHERE discussion_id = '$discussion_id' AND rnumber='$session_student' ");
        //$update = mysqli_query($dbconnect, "UPDATE joined_members SET last_joined_id='$last_joined_id', joined_status='1', date=NOW()");
    }else{
        //$insert = mysqli_query($dbconnect, "INSERT INTO joined_members SET rnumber='$session_student', discussion_id='$discussion_id', uname='$uname', joined_status='0', date=NOW()");
        $insert_read_message_query = mysqli_query($dbconnect, "INSERT INTO read_messages SET discussion_id='$discussion_id', rnumber='$session_student', uname='$uname', no_of_read='$no_of_read', date=NOW() ");
    }
$check = mysqli_query($dbconnect, "SELECT * FROM joined_members WHERE rnumber='$session_student' AND discussion_id='$discussion_id' AND joined_status = '0' ");
    if(mysqli_num_rows($check) == 1){
        $new = true;
    }elseif(mysqli_num_rows($check) != 1){
        $new = "";
    }
if($new==true){ 
?> 
        <em><?php echo $group_creator; ?> created this group</em><br>
        <em><?php echo $uname; ?> just joined</em>
<?php }
$check2 = mysqli_query($dbconnect, "SELECT * FROM joined_members WHERE discussion_id='$discussion_id' AND joined_status = '0' AND rnumber != '$session_student'");
    if(mysqli_num_rows($check2) > 0){
        $newusers = true;
    }elseif(mysqli_num_rows($check2) <= 0){
        $newusers = "";
    }
if($newusers==true){
    while($c=mysqli_fetch_assoc($check2)){
?> 
        <em><?php echo $c['uname']; ?> just joined</em>
<?php }
}
    
  					while ( $row = mysqli_fetch_array($result) ) :

                $id =$row['id'];
                $discussion_id = $row['discussion_id'];
                //$rnumber =$row['rnumber'];
                $topic = $row['topic'];
                //$uname = $row['uname'];
                $message = $row['message'];
                $date = $row['date'];
                $picture = $row['display_picture'];
                $imagepath = "../../photos/".$picture;



  if($row['uname'] == $uname){

      if($picture==""){
  ?>
        
    <div class="chatlogs" id="chatlogs" name="chatlogs">
        <em><?php echo $group_creator; ?> created this group</em>
    
  		<div class="chat self" id="self">
  			<p class="chat-message"><span><?php echo $row['uname']; ?></span><?php echo $row['message']?></p>
  		</div>
  <?php
  	}else{

  		//$username_picture = $picture;
  ?>
          <div class="chat self" id="self">
  				<p class="chat-message"><span><?php echo $row['uname']; ?></span><br><?php echo $row['message']?></p>
      </div>
  <?php
  		}

   }else{

   	if($picture==""){
  ?>
         <div class="chat friend" id="friend">

  			<div class="user-photo"><img src="../../photos/user.png" alt=""></div>
  			<p class="chat-message"><span><?php echo $row['uname']; ?></span><br><?php echo $row['message']?></p>
  		</div>
  <?php
  	   }else{

  		  $username_picture = $imagepath;
  ?>
         <div class="chat friend" id="friend">

  			<div class="user-photo"><img src="<?php echo $username_picture; ?>" alt=""></div>
  			<p class="chat-message"><span><?php echo $row['uname']; ?></span><br><?php echo $row['posts']?></p>
  		</div>
  <?php
      }

   }
    $last_message_id = $row['id'];
    $result_set = mysqli_query($dbconnect, "UPDATE read_messages SET last_message_id='$last_message_id', date=NOW() WHERE discussion_id = '$discussion_id' AND rnumber='$session_student' ");
  endwhile; 
    //
}else{
    //if no record in the discussion log
    
    $check = mysqli_query($dbconnect, "SELECT * FROM joined_members WHERE discussion_id='$discussion_id' AND rnumber='$session_student' LIMIT 1 ");
    if(mysqli_num_rows($check) > 0){
        
        while($w=mysqli_fetch_assoc($check)){
            $joined_status = $w['joined_status'];
        }
        if($joined_status == '0'){
?> 
        <em>You joined</em>
<?php
        $update = mysqli_query($dbconnect, "UPDATE joined_members SET joined_status='1' WHERE rnumber='$session_student' AND discussion_id='$discussion_id' ");
        }
        
        
    }else{
        $insert = mysqli_query($dbconnect, "INSERT INTO joined_members SET rnumber='$session_student', discussion_id='$discussion_id', uname='$uname', joined_status='0', date=NOW()");
 ?> 
        <em>You joined</em>
<?php       
        $insert_read_message_query = mysqli_query($dbconnect, "INSERT INTO read_messages SET discussion_id='$discussion_id', rnumber='$session_student', uname='$uname', no_of_read='0', date=NOW() ");
        $check_id = mysqli_query($dbconnect, "SELECT id FROM joined_members WHERE discussion_id='$discussion_id' AND rnumber='$session_student' LIMIT 1");
        while($d=mysqli_fetch_assoc($check_id)){
            $my_id = $d['id'];
        }
        $update_last_id = mysqli_query($dbconnect, "UPDATE joined_members SET last_joined_id = '$my_id' WHERE rnumber='$session_student' AND discussion_id='$discussion_id' ");
    }
    $check = mysqli_query($dbconnect, "SELECT id, last_joined_id FROM joined_members WHERE discussion_id = '$discussion_id' AND rnumber='$session_student' LIMIT 1 ");
    while($v=mysqli_fetch_assoc($check)){
        $my_last_id = $v['id'];
    }
    
    $check = mysqli_query($dbconnect, "SELECT id, uname, last_joined_id, date FROM joined_members WHERE discussion_id = '$discussion_id' AND id > '$my_last_id' ");
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
        <br><em><?php echo $r['uname']." joined ".$period; ?></em>
<?php
            $last_joined_id = $r['id'];
            
        }
    $update_my_last_id = mysqli_query($dbconnect, "UPDATE joined_members SET last_joined_id = '$last_joined_id' WHERE rnumber='$session_student' AND discussion_id='$discussion_id' ");
        
    }
    

}
    ?>

</div>
