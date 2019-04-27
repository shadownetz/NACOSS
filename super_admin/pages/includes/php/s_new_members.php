<?php
require_once('includes/php/assign_variables.php');
$id = 0;
if ($user_type == "super_admin" && isset($_GET['activate'])) {
		$id = $_GET['activate'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET status ='1', u_activator = '$rnumber' WHERE id=$id");
		}
if ($user_type == "super_admin" && isset($_GET['deactivate'])) {
		$id = $_GET['deactivate'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET status='10', u_deactivator = '$rnumber' WHERE id=$id");
		}
?>
<?php
$query = "SELECT * FROM nacoss.all_students WHERE status = '5' ";
$result_set = User::find_by_sql($query);
if(mysqli_num_rows($result_set)>0){
?>

                            <div class="row nacoss-all-discuss nacoss-my-discuss overf">
                                <table class="table table-responsive">
                                     <thead class="panel-heading">
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Reg No:</th>
                                <th>School Email</th>
                                <th>Phone Number</th>
                                <th>Gender</th>
                                <th>Picture</th>
                                <th>Activator</th>
                                <th>User Type</th>
                                <th>User Mode</th>
                                <th>Control</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody class="panel-body">
<?php
}else{
    echo "<div style='font-weight:bold'>NO LOGS TO DISPLAY</div>";
}
?>
<?php
#$query = "SELECT * FROM nacoss.all_students WHERE status = '5' ";
#$result_set = User::find_by_sql($query);
 $counter=1;
       	while ( $row = mysqli_fetch_array($result_set) ) {
                $picture = $row['picture'];
                $imagepath = "../../photos/".$picture;

                ?>
                <tr>
                        <td><?php echo $counter;?></td>
                        <td><?php echo $row['fname']." ".$row['lname']; ?></td>
                        <td><?php echo $row['uname'];?></td>
                        <td><?php echo $row['level'];?></td>
                        <td><?php echo $row['rnumber'];?></td>
                        <td><?php echo $row['semail']?></td>
                        <td><?php echo $row['pnumber']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><img src="<?php echo $imagepath; ?>" alt="user image" height="50" class="img-rounded"></td>
                        <td><?php echo $row['u_activator']?></td>
                        <td><?php echo $row['user_type']?></td>
                        <td><?php if($row['status'] == '10'){ echo "Deactivated"; }else if($row['status'] == '5'){ echo "New User"; } ?></td>
                        
                        <td>
				<a href="?activate=<?php echo $row['id']; ?>"><button class="nacoss-btn">Activate</button></a>
						</td>
                        <td>
				<a href="?deactivate=<?php echo $row['id']; ?>"><button class="nacoss-btn border-warning">Deactivate</button></a>
						</td>
						</tr>


                <?php
                $counter++;
        }
        ?>
          </tbody>
                                </table>
                            </div>