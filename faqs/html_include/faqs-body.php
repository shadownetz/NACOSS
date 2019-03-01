
<div class="col-md-12 col-sm-12 col-xs-12 blog-text" style="min-height:200px;padding-bottom:30px">
    
    
                <h3 style="text-align: center"><?php echo $discussion_topic; ?></h3>
                <hr/>
                <p style="font-weight:bold;text-align: justify;border-left:10px solid #BBEAF7;padding-left:10px">
                  <?php echo $discussion_aim; ?>
                </p>
                <div class="single-post-comments faqs-body">
                  <div onLoad="moveWin();" class="comments-list" id="messageLogs">
                        <!--MESSAGE LOGS APPEARS HERE-->
                  </div>
                </div>
<?php
if(isset($_SESSION['id'])){
    require_once("../../admin/pages/includes/php/assign_variables.php");
     $q = User::find_by_sql("SELECT * FROM read_messages WHERE rnumber='$rnumber' AND discussion_id='$discussion_id' LIMIT 1");
    if(mysqli_num_rows($q) == 1){
        while($table=mysqli_fetch_assoc($q)){
            $table_last_message_id = $table['last_message_id'];
        }
    }
}
    
if(isset($_SESSION['unread_display']) && $_SESSION['unread_display'] == true){
    $query = User::find_by_sql("SELECT * FROM discussion_logs WHERE discussion_id = '$discussion_id' AND id > '$table_last_message_id' ORDER BY id DESC LIMIT 1 ");
}else{
    $query = User::find_by_sql("SELECT * FROM discussion_logs WHERE discussion_id = '$discussion_id' ORDER BY id DESC LIMIT 1 ");
}
if(mysqli_num_rows($query)>0){
    while($col=mysqli_fetch_assoc($query)){
        $last_message_id = $col['id'];
    }
}
?>
    
<?php if(isset($_SESSION['id'])){ ?>
<?php
require_once("../../admin/pages/includes/php/assign_variables.php");
    
    $result = User::find_by_sql("SELECT * FROM discussion_logs WHERE discussion_id='$discussion_id'");
    if(mysqli_num_rows($result) > 0){
        $no_of_read = mysqli_num_rows($result);
        $check = User::find_by_sql("SELECT * FROM read_messages WHERE rnumber='$rnumber' AND discussion_id='$discussion_id' LIMIT 1");
            if(mysqli_num_rows($check) == 1){
                $update_read_message_query = User::find_by_sql("UPDATE read_messages SET last_message_id='$last_message_id', no_of_read='$no_of_read', date=NOW() WHERE discussion_id = '$discussion_id' AND rnumber='$rnumber' ");
            }else{
                $insert_read_message_query = User::find_by_sql("INSERT INTO read_messages SET last_message_id='$last_message_id', discussion_id='$discussion_id', rnumber='$rnumber', uname='$uname', no_of_read='$no_of_read', date=NOW() ");
            }
    }
    

    
$query = User::find_by_sql("SELECT * FROM joined_members WHERE discussion_id='$discussion_id' AND rnumber='$rnumber' LIMIT 1");
    if(mysqli_num_rows($query)==1){
        $_SESSION['comment'] = true;
    $check = User::find_by_sql("SELECT * FROM private_discussions WHERE discussion_id='$discussion_id' AND rnumber='$rnumber' LIMIT 1");
        if(mysqli_num_rows($check)==1){
            while($rw=mysqli_fetch_assoc($check)){
                $user_status = $rw['status'];
            }
            if($user_status == '1'){
                $_SESSOIN['comment'] = true;
            }elseif($user_status == '0'){
                $_SESSOIN['comment'] = false;
            }
        }      
?>
<?php if($_SESSION['comment'] == true){ ?>
                <div style="display:block" class="comment-respond">
                  <div class=" col-md-12 col-sm-12 col-xs-12">
                    <i class="fa fa-sign-in"></i> comment as @<?php echo $uname; ?>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" name="user-comment" enctype="multipart/form-data" method="post">
                      <textarea name="message_box" class="form-control" placeholder="@<?php echo $uname; ?>"></textarea>
                      <input type="submit" name="send_message"  value="Post Comment" >
                    </form>
                  </div>
                </div>
<?php }else{
            echo "<script> alert('Sorry, You will be able to comment once an admin confirms you!'); </script>";
        } 
?>
<?php } ?>
<?php }else{ ?>
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;display:block">
                  <p>
                    <a href="#" data-toggle="modal" data-target="#login">Login to comment <i class="fa fa-comment"></i></a>
                  </p>
                </div>
<?php } ?>
                <!-- Modal -->
              <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top:20%">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#fff;">
                &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">User Login</h4>
                </div>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" name="login" method="post">
                <div class="modal-body">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <label>Username:</label>
                    <input name="uname" type="text" class="form-control" placeholder="username">
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <label style="padding-top:5px">Password:</label>
                    <input name="pword" type="password" class="form-control" placeholder="password">
                  </div>
                  
                </div>
                <div class="modal-footer" style="border-top:0">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top:7px">Cancel</button>
                <button type="submit" class="btn btn-primary" name="signin" style="margin-top:7px">Login</button>
                </div>
                </form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal -->
              </div>
</div>
