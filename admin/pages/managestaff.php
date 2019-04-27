<!-- Header -->
<?php include('includes/header.php'); ?>
<?php
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$result = User::find_by_sql("DELETE FROM staff WHERE id=$id");
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
                        <h1 class="page-header center-text">Manage Staff</h1>
<?php
                
$query = User::find_by_sql("SELECT * FROM nacoss.staff WHERE status = '1'");
if(mysqli_num_rows($query)>0){                       
?>
                         <div class="nacoss-all-discuss nacoss-my-discuss">
                            <div class="panel document-panel">
                                    <!-- <div class="panel-heading"></div> -->
                                    <!-- <div class="panel-body"> -->
                                    <table class="table table-responsive" id="dataTables-example">
                                        <thead class="panel-heading">
                                            <tr>
                                                <td class="no-border">Fullname</td>
                                                <td class="no-border">Phone Number</td>
                                                <td class="no-border">Email Address</td>
                                                <td class="no-border">Qualification</td>
                                                <td class="no-border">Picture</td>
                                                
                                                
                                                <td class="no-border">Control</td>
                                                <td class="no-border">Control</td>
                                            </tr>
                                        </thead>
                                        <tbody class="panel-body">
<?php
    while ( $row = mysqli_fetch_array($query) ) {
                $staff_id =$row['id'];
                $staff_fullname = $row['fullname'];
                $staff_phone = $row['phone'];
                $staff_email = $row['email'];
                $staff_cert = $row['cert'];
                $staff_picture = $row['picture'];
                $staff_imagepath = "../../staffphotos/".$staff_picture;
?>
                                            <!-- List of all news -->
                                            <tr>
                                                <td><?php echo $staff_fullname; ?></td>
                                                <td><?php echo $staff_phone; ?></td>
                                                <td><?php echo $staff_email; ?></td>
                                                <td><?php echo $staff_cert; ?></td>
                                                <td> 
                                                    <div style="background-color:rgb(200,200,200);text-align:center;border-radius:10px">
                                                        <img src="<?php echo $staff_imagepath; ?>" width="50px">
                                                        </div>
                                                    </td>
                                                <td><a href="register_staff.php?update=<?php echo $staff_id ?>"><button class="nacoss-btn">Update&nbsp;<i class="fa fa-clone"></i></button></a></td>
                                                <td><a href="?delete=<?php echo $staff_id ?>"><button class="nacoss-btn border-danger">Delete&nbsp;<i class="fa fa-close"></i></button></a></td>
                                            </tr>
<?php
    }
?>
                                        </tbody>

                                        </table>
                            </div>
                        </div>
<?php
}
?>
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
    <?php include('includes/footer.php'); ?>