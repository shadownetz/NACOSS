<?php
require_once('includes/php/assign_variables.php');
$id = 0;
if ($user_type == "admin" || $user_type == "super_admin" && isset($_GET['read'])) {
		$id = $_GET['read'];
		$result_set = User::find_by_sql("DELETE FROM nacoss.contact WHERE id=$id");
        }
        

$query = "SELECT * FROM nacoss.contact ORDER BY id DESC";
$result_set = User::find_by_sql($query);
if(mysqli_num_rows($result_set)>0){
?>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
}else{
    echo "N0 LOGS TO DISPLAY";
}
?>
<?php
 $counter=1;
       	while ( $row = mysqli_fetch_array($result_set) ) {

                ?>
                <tr>
                        <td><?php echo $counter;?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><a href="admin_mailer.php?address=<?php echo $row['email']; ?>" title="Send Mail"><?php echo $row['email']?></a></td>
                        <td><?php echo $row['subject']?></td>
                        <td><?php echo $row['message']?></td>
                        
                        
                        <td>
				<a href="?read=<?php echo $row['id']; ?>" class="read_btn" style="color:blue;"><button class="btn btn-warning">Mark as Seen&nbsp;<i class="fa fa-check"></i></button></a>
						</td>
						</tr>


                <?php
                $counter++;
        }
        ?>
          </tbody>
                                </table>
                            </div>