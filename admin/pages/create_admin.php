        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php
require_once('includes/php/assign_variables.php');
if($user_type == 'admin' || $user_type == 'super_admin' && isset($_POST['submit'])){
    $activator = $_SESSION['rnumber'];
    $user = $database->escape_value($_POST ['user']);
    $update = User::find_by_sql("UPDATE all_students SET user_type = 'user_admin', a_activator = '$activator' WHERE rnumber = '$user' ");
    if($update){
        echo "<script> alert('Admin created successfully!'); window.location='create_admin.php'; </script>";
    }
}
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container nacoss-new-discuss">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin Center</h1>

<?php
$query = User::find_by_sql("SELECT rnumber FROM nacoss.all_students WHERE verified = '1' AND status = '1' AND user_type = 'user' ");
while($r=mysqli_fetch_assoc($query)){
    $rnumber_array[] = $r['rnumber'];
}
?>


<div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <div class="result-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Create Admin</h2>
                    </div>
                    <div class="panel-body">
                        <form class="nacoss-profile" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                            <fieldset class="form-content">
                                
                                <div class="form-group">
                                    <label>REG NUMBER:</label>
                                    <select name="user" class="form-control" required>
                                        <option value="">Select Reg No</option>
                                        <?php
                                            for($x = 0; $x < count($rnumber_array); $x++){
                                               echo "<option value=".$rnumber_array[$x].">".$rnumber_array[$x]."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                    
                                <button class="nacoss-btn" style="width:100%" name="submit">Make Admin</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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