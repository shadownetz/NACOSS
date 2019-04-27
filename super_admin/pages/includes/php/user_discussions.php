<div class="nacoss-all-discuss nacoss-my-discuss">
    <div class="panel document-panel">
<?php
if(isset($_GET['accept'])){
    $accept = $_GET['accept'];
    $grp_id = $_SESSION['details_id'];
    $query = User::find_by_sql("SELECT * FROM nacoss.discussions WHERE id = '$grp_id' AND rnumber='$rnumber'");
    if(mysqli_num_rows($query)>0){
        $confirm_query = User::find_by_sql("UPDATE nacoss.private_discussions SET status='1' WHERE rnumber = '$accept' AND discussion_id = '$grp_id' ");
    } 
}
if(isset($_GET['decline'])){
    $decline = $_GET['decline'];
    $grp_id = $_SESSION['details_id'];
    $query = User::find_by_sql("SELECT * FROM nacoss.discussions WHERE id = '$grp_id' AND rnumber='$rnumber'");
    if(mysqli_num_rows($query)>0){
        $decline_query = User::find_by_sql("UPDATE nacoss.private_discussions SET status='10' WHERE rnumber = '$decline' AND discussion_id = '$grp_id' ");
    }
}

if(isset($_GET['leave'])){
    $discussion_id = $_GET['leave'];
    $q[1] = "DELETE FROM nacoss.joined_members WHERE rnumber='$rnumber' AND discussion_id = '$discussion_id'";
    $q[2] = "DELETE FROM nacoss.discussion_logs WHERE rnumber='$rnumber' AND discussion_id = '$discussion_id'";
    $q[3] = "DELETE FROM nacoss.read_messages WHERE rnumber='$rnumber' AND discussion_id = '$discussion_id'";
    for($query=1; $query<=3; $query++){
        $result_set = User::find_by_sql($q[$query]);
    }
}
if(isset($_GET['details'])){
    $details_id = $_GET['details'];
    $creator = $_GET['alpha'];
    $_SESSION['details_id'] = $details_id;
    if($rnumber == $creator){
        $query = User::find_by_sql("SELECT * FROM nacoss.discussions WHERE rnumber = '$creator' AND id = '$details_id'");
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
                $discussion_type = $row['discussion_type'];
                $discussion_topic = $row['topic'];
            }
            if($discussion_type == 'private'){
?>
<!-- <div class="panel-heading"> -->
<?php
$counter = 1;               
$query_set = User::find_by_sql("SELECT * FROM nacoss.private_discussions WHERE discussion_id = '$details_id' AND status = '0'");
    if(mysqli_num_rows($query_set)>0){
?>
    <table class="table table-responsive" id="dataTables-example">
         <thead class="panel-heading">
            <tr>
                <th class="no-border">S/N</th>
                <th class="no-border">Discussion Name</th>
                <th class="no-border">Username</th>
                <th class="no-border">Reg No:</th>
                <th class="no-border">ACTION</th>
                <th class="no-border">ACTION</th>
            </tr>
        </thead>
</div>
<div>
    <!-- <table class="table table-responsive"> -->
        <tbody class="panel-body">
<?php
// $counter = 1;               
// $query_set = User::find_by_sql("SELECT * FROM nacoss.private_discussions WHERE discussion_id = '$details_id' AND status = '0'");
//     if(mysqli_num_rows($query_set)>0){
        while($table_row=mysqli_fetch_assoc($query_set)){
?>        
            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $discussion_topic; ?></td>
                <td><?php echo $table_row['uname']; ?></td>
                <td><?php echo $table_row['rnumber']; ?></td>
                <td><a href="?accept=<?php echo $table_row['rnumber']; ?>" class="nacoss-btn" style="text-decoration:none">Accept</a>
                </td>
                <td><a href="?decline=<?php echo $table_row['rnumber']; ?>" class="nacoss-btn border-warning" style="text-decoration:none">Decline</a>
                </td>
    
            </tr>    
<?php    
    
    
        $counter++;
        }    
    }else{
        echo "<script> alert('No user found!'); </script>";
    }
    

              }
        }
    }
    
}

?>
<!-- <div class="panel-heading"> -->
    <table class="table table-responsive" id="dataTables-example">
         <thead class="panel-heading">
            <tr>
                <th class="no-border">S/N</th>
                <th class="no-border">Discussion Name</th>
                <th class="no-border">Discussion Type</th>
                <th class="no-border">Number Of Participants</th>
                <th class="no-border">Created</th>
                <th class="no-border">Joined</th>
                <th class="no-border">Action</th>
            </tr>
        </thead>
</div>
<!-- <div class="panel-body"> -->
<!-- <table class="table table-responsive"> -->
    <tbody class="panel-body">
<?php
    $result_set = User::find_by_sql("SELECT * FROM nacoss.joined_members WHERE rnumber='$rnumber' GROUP BY discussion_id");
    $counter = 1;
    while($row=mysqli_fetch_assoc($result_set)){
        $discussion_id = $row['discussion_id'];
        $query = User::find_by_sql("SELECT * FROM nacoss.discussions WHERE id='$discussion_id' LIMIT 1");
        while($r=mysqli_fetch_assoc($query)){
            $creator = $r['rnumber'];
            $query2 = User::find_by_sql("SELECT * FROM nacoss.joined_members WHERE discussion_id='$discussion_id' ");
            $count_members = mysqli_num_rows($query2);
        ?>
            <tr>
                <td><?php echo $counter;?></td>
                <td><?php echo $r['topic'];?></td>
                <td><?php echo $r['discussion_type'];?></td>
                <td><?php echo $count_members;?></td>
                <td><?php echo $r['date']?></td>
                <td><?php echo $row['date']?></td>
<?php if($r['rnumber'] == $rnumber && $r['discussion_type'] == 'private'){} ?>
                <td>
        <a href="?<?php if($r['rnumber'] == $rnumber && $r['discussion_type'] == 'private'){ echo 'alpha='.$creator.'&details'; }else{ echo 'leave'; } ?>=<?php echo $discussion_id; ?>" ><button class="nacoss-btn <?php if($r['rnumber'] == $rnumber && $r['discussion_type'] == 'private'){ echo ''; }else{ echo 'border-warning'; } ?>"><?php if($r['rnumber'] == $rnumber && $r['discussion_type'] == 'private'){ echo 'Requests'; }else{ echo 'Leave'; } ?></button></a>
                </td>
            </tr>

                <?php
        }
        
    $counter++;    
    }

?>
          </tbody>
    </table>
</div>
</div>
</div>