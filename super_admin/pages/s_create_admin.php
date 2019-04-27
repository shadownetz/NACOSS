        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php
require_once('includes/php/assign_variables.php');
$id = 0;
if ($user_type == "super_admin" && isset($_GET['activate'])) {
		$id = $_GET['activate'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET user_type ='admin', a_activator = '$rnumber' WHERE id=$id");
		}
if ($user_type == "super_admin" && isset($_GET['deactivate'])) {
		$id = $_GET['deactivate'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET user_type ='user', a_deactivator = '$rnumber' WHERE id=$id");
		}
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Admin Center</h2>
<?php
$query = "SELECT * FROM nacoss.all_students WHERE user_type = 'user_admin' ";
$result_set = User::find_by_sql($query);
if(mysqli_num_rows($result_set)>0){
?>
 <div class="nacoss-all-discuss nacoss-my-discuss overf">
                        <table class="table table-responsive">
                            <thead class="panel-heading">
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
                                <th>Activator</th>
                                <th>Control</th>
                                <th>Control</th>
                            </tr>
                            </thead>
                            <tbody class="panel-body">
<?php 
}
?>
<?php
// $query = "SELECT * FROM nacoss.all_students WHERE user_type = 'user_admin' ";
//  $result_set = User::find_by_sql($query);
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
                        <td><?php echo $row['a_activator']?></td>
                        
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
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <?php include('includes/footer.php'); 