        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php
require_once('includes/php/assign_variables.php');

if($user_type == 'super_admin' && isset($_POST['submit'])){
    $sql = $_POST['sql'];
    //$user = $database->escape_value($_POST ['user']);
    $query = User::find_by_sql($sql);
    if($query){
        echo "<script> alert('Successful!'); window.location='s_admin_page.php'; </script>";
    }
}
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      
                        
                        
                        <h1 class="page-header text-center">Super Admin Master Page</h1>


<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <div class="result-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Super Admin</h3>
                    </div>
                    <div class="panel-body">
<?php
if($user_type == 'super_admin' && isset($_POST['check_details'])){
    $check_rnumber = $_POST['rnumber'];
    if($check_rnumber == "SUPER_ADMIN_QUERY"){
        ?>
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>My Query:</label>
                                    <input type="text" name="sql" class="form-control" required>
                                </div>
                    
                                <button class="btn btn-lg btn-success btn-block" name="submit">QUERY</button>
                            </fieldset>
                        </form>           
                        <?php
    }else{
    
        $query = User::find_by_sql("SELECT fname, lname, semail, pnumber, user_type, level FROM nacoss.all_students WHERE rnumber = '$check_rnumber' LIMIT 1 ");
        if($query){
            while($r=mysqli_fetch_assoc($query)){
                $user_fullname = $r['fname']." ".$r['lname'];
                $user_semail = $r['semail'];
                $user_pnumber = $r['pnumber'];
                $user_level = $r['level'];
                $u_type = $r['user_type'];
                
                if($u_type=='user'){ $usertype = 'User'; }elseif($u_type=='admin'){$usertype = 'Admin';}elseif($u_type='super_admin'){$usertype='Super Admin';}
                
                echo "<center><b>Registration Number: $check_rnumber</b></center>";
                echo "<h5>Full Nane: $user_fullname </h5>";
                echo "<h5>School Email: $user_semail</h5>";
                echo "<h5>Phone Number: $user_pnumber</h5>";
                echo "<h5>Level: $user_level</h5>";
                echo "<h5>User-Type: $usertype</h5>";
                echo "<br>";
            }

        }
        ?> 
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>User Reg No:</label>
                                    <input type="text" name="rnumber" class="form-control" required>
                                </div>
                    
                                <button class="btn btn-lg btn-success btn-block" name="check_details">CHECK DETAILS</button>
                            </fieldset>
                        </form>
    <?php
    }
}else{
   ?> 
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>User Reg No:</label>
                                    <input type="text" name="rnumber" class="form-control" required>
                                </div>
                    
                                <button class="btn btn-lg btn-success btn-block" name="check_details">CHECK DETAILS</button>
                            </fieldset>
                        </form>
    <?php
}
?>
                        
                        
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