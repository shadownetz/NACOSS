<?php
require_once('includes/php/assign_variables.php');
$id = 0;
if ($user_type == "admin" || $user_type == "super_admin" && isset($_GET['activate'])) {
		$id = $_GET['activate'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET status='5', u_activator = '$rnumber' WHERE id=$id");
		}
if ($user_type == "admin" || $user_type == "super_admin" && isset($_GET['deactivate'])) {
		$id = $_GET['deactivate'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET status='10', u_deactivator = '$rnumber' WHERE id=$id");
		}
?>


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Reg No:</th>
                                <th>School Email</th>
                                <th>Phone Number</th>
                                <th>Gender</th>
                                <th>Picture</th>
                                <th>Date</th>
                                <th>User-Type</th>
                                <th>Status</th>
                                <th>Control</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
$query = "SELECT * FROM nacoss.all_students WHERE status != '1' AND status != '5' ORDER BY status";
 $result_set = User::find_by_sql($query);
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
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['user_type']?></td>
                        <td><?php if($row['status'] == '10'){ echo "Deactivated"; }else if($row['status'] == '0'){ echo "New"; } ?></td>
                        
                        <td>
				<a href="?activate=<?php echo $row['id']; ?>" class="activate_btn" style="color:blue;"><button class="btn btn-success">Activate</button></a>
						</td>
                        <td>
				<a href="?deactivate=<?php echo $row['id']; ?>" class="inactivate_btn" style="color:red;"><button class="btn btn-danger">Deactivate</button></a>
						</td>
						</tr>


                <?php
                $counter++;
        }
        ?>
          </tbody>
                                </table>
                            </div>