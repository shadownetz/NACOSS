        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php
require_once('includes/php/assign_variables.php');
$id = 0;
if ($user_type == "super_admin" && isset($_GET['user'])) {
		$id = $_GET['user'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET user_type ='user' WHERE id=$id");
		}
if ($user_type == "super_admin" && isset($_GET['admin'])) {
		$id = $_GET['admin'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET user_type ='admin' WHERE id=$id");
		}
if ($user_type == "super_admin" && isset($_GET['super_admin'])) {
		$id = $_GET['super_admin'];
		$result_set = User::find_by_sql("UPDATE nacoss.all_students SET user_type ='super_admin' WHERE id=$id");
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
                    <div class="col-md-12">
                        <h3 class="page-header">Admins And Super Admins </h3>
                        </div>

<div class="col-md-12 nacoss-all-discuss nacoss-my-discuss overf">
<div class="panel document-panel">
<?php
$query = "SELECT * FROM nacoss.all_students WHERE user_type = 'admin' OR user_type = 'super_admin' AND uname !='$uname' ORDER BY user_type ";
$result_set = User::find_by_sql($query);
if(mysqli_num_rows($result_set)>0){
?>
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
                                <th>Type</th>
                                <th>Control</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody class="panel-body">

<?php
 $counter=1;
       	while ( $row = mysqli_fetch_array($result_set) ) {
                $picture = $row['picture'];
                $imagepath = "../../photos/".$picture;
            $u_type = $row['user_type'];
            if($u_type=='admin'){$usertype = 'Admin';}elseif($u_type='super_admin'){$usertype='Super Admin';}

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
                        <td><?php echo $usertype; ?></td>
                        
                        <td>
				<a href="?<?php if($row['user_type']=='super_admin'){echo 'admin';}elseif($row['user_type']=='admin'){echo 'super_admin';} ?>=<?php echo $row['id']; ?>"><button class="nacoss-btn border-grass" style="width:100%"><?php if($row['user_type']=='super_admin'){echo 'Make Admin';}elseif($row['user_type']=='admin'){echo 'Make Super Admin';} ?></button></a>
						</td>
                        <td>
				<a href="?user=<?php echo $row['id']; ?>"><button class="nacoss-btn border-grass" style="width:100%">Make User</button></a>
						</td>
						</tr>


                <?php
                $counter++;
           }
        
        ?>
          </tbody>
                                </table>
         <?php
            }else{
            //echo "NO LOGS";
        }
        ?>
                                </div>
                            </div>
                        
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