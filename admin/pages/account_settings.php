        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php
if(isset($_POST['update_my_picture'])){
    
    $fileName = $_FILES['file']['name'];
		$fileType = $_FILES['file']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			echo "<script> alert('File Type Not Allowed!'); window.location='account_settings.php'; </script>";
        die();
		}else{
    
            $picture = $database->escape_value($_FILES['file']['name']);
            $epicture = explode(".", $picture);
            $img_type = end($epicture);
            
            $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); $current_sec = date('s');
            if(strlen($current_month)==1){
                $current_new_month = '0'.$current_month;
            }else{
                $current_new_month = $current_month;
            }

            $generate = uniqid('', true);
            $explode = explode('.', $generate);
            $array1 = $explode[0];
            $array2 = $explode[1];
            $img_initial = "IMG-".$current_year.$current_new_month.$current_day.$current_hour.$current_min.$current_sec."-";
            $main_picture = $img_initial.$array2.".".$img_type;
            
            move_uploaded_file($_FILES["file"]["tmp_name"],"../../photos/".$main_picture);
            
            $update = User::find_by_sql("UPDATE all_students SET picture = '$main_picture' WHERE id = '$session->user_id' ");
            if($update){
                echo "<script> alert('Picture Update Successful!'); window.location='account_settings.php'; </script>";
            }
        }
}

if(isset($_POST['update_my_status'])){
    $status = $database->escape_value($_POST['my_status']);
    $update = User::find_by_sql("UPDATE all_students SET my_status = '$status' WHERE id = '$session->user_id' ");
    $_SESSION['my_status'] = $status;
}
if(isset($_POST['update_my_password'])){
    $password = $database->escape_value($_POST['password']);
    if(strlen($password) < 6){
        echo "<script> alert('Password can not be less than six!'); window.location='account_settings.php'; </script>";
        die();
    } 
    $epass = md5($password);
    $update = User::find_by_sql("UPDATE all_students SET pword = '$epass' WHERE id = '$session->user_id' ");
    if($update){
        echo "<script> alert('Password Update Successful!'); window.location='account_settings.php'; </script>";
    }
}
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid nacoss-all-discuss nacoss-my-discuss">
                <div class="row panel-body">
                    <div class="col-md-12">
                        <h2 class="page-header text-center">Account Settings</h2>
                    </div>
                            <div class="col-md-12 text-center" style="margin-bottom:30px" >
                                <img src="<?php echo $imagepath; ?>" class="img-circle" alt="user image" height="100" class="...col-lg-offset-5 img-rounded ">
                            </div>
                            
                        <!-- <div class="col-sm-4">
                            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" role="form" enctype="multipart/form-data">
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class='fa fa-file-picture-o fa-fw' style=""></i>Profile Picture</span>
                                        <input name="file" type="file" value="" class="form-control" required="required"/>
                                    <span class="input-group-addon"><button type="submit" name="update_my_picture"><img src="../../images/select.png"></button></span>
                                </div>
                            </form>
                        </div> -->
                        <div class="row">
                        <div class="col-sm-6">
                            <form class="nacoss-profile" action="<?php $_SERVER['PHP_SELF']?>" method="POST" role="form" enctype="multipart/form-data">
                                <div class="form-content ">
                                <label>Change Online Status</label>
                                    <!-- <span class="input-group-addon"><i class='fa fa-user fa-fw' style="color: <?php if($my_status=="online"){ echo "green"; }else{ echo "gray"; } ?>"></i>Change Status</span> -->
                                    <select name="my_status" class="form-control" required>
                                        <!--<option value="<?php echo $my_status; ?>">Select</option>-->
                                        <?php
                                        if($my_status=="online"){ 
                                            echo "<option value='online'>Online</option>"; 
                                            echo "<option value='offline'>Offline</option>";                               
                                                                }else{
                                            echo "<option value='offline'>Offline</option>";
                                            echo "<option value='online'>Online</option>";
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" class="nacoss-btn" name="update_my_status" >change&nbsp;<i class="fa fa-user" style="color: <?php if($my_status=="online"){ echo "green"; }else{ echo "gray"; } ?>"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <form class="nacoss-profile" action="<?php $_SERVER['PHP_SELF']?>" method="POST" role="form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                        <input name="password" type="password" value="" class="form-control" placeholder="Enter new password" required>
                                    <button type="submit" class="nacoss-btn" name="update_my_password">update&nbsp;<i class="fa fa-key"></i></button>
                                </div>
                            </form>
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
    <?php include('includes/footer.php'); ?>