<!-- Header -->
<?php include('includes/header.php'); ?>
<?php
$fullname = "";
$phone = "";
$email = "";
$office = "";
$cert = "";
$courses = "";
$staff_imagepath = "";
?>
<?php
$errors = array();
if (isset($_POST['submit'])){
    $file = $_FILES['file']['name'];
    $fullname = htmlentities($_POST['fullname']);
    $phone = htmlentities($_POST['phone']);
    $email = htmlentities($_POST['email']);
    $office = htmlentities($_POST['office']);
    $cert = htmlentities($_POST['cert']);
    $courses = htmlentities($_POST['courses']);
    
    $fileName = $_FILES['file']['name'];
                $fileType = $_FILES['file']['type'];
                            $fileExt = explode('.',$fileName);
                                $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpeg','jpg','png');
                if (!in_array($fileActualExt, $allowed)){
                    array_push($errors, "Another file type used in Image Slot");
                }
        if(count($errors)==0){
            $img_type = 'jpg';
            $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); 
            if(strlen($current_month)==1){
                $current_new_month = '0'.$current_month;
            }else{
                $current_new_month = $current_month;
            }
                $current_sec = date('s');
                $generate = uniqid('', true);
                $explode = explode('.', $generate);
                $array1 = $explode[0];
                $array2 = $explode[1];
                $img_initial = "IMG-".$current_year.$current_new_month.$current_day.$current_hour.$current_min.$current_sec."-";
                $main_picture = $img_initial.$array2.".".$img_type;
                
                move_uploaded_file($_FILES["file"]["tmp_name"],"../../staffphotos/".$main_picture);

            $myfiles1 = $main_picture;
            $sql = User::find_by_sql("INSERT INTO staff SET fullname='$fullname', phone='$phone', email='$email', office='$office', cert='$cert', courses='$courses', picture='$myfiles1', status=1, date=NOW() ");
            if($sql) {
             ?>
               <script type="text/javascript">
            alert("Uploaded Successfully! ");
                </script>
            <?php

                    }else{
                        ?>
               <script type="text/javascript">
            alert("Unable to Upload! ");
                </script>
            <?php
            die();
                    }
	   }else{
            echo "<script> alert('Another file type used in Image Slot'); </script>";
        }
    
}
if (isset($_POST['update'])){
    $file = $_FILES['file']['name'];
    $fullname = htmlentities($_POST['fullname']);
    $phone = htmlentities($_POST['phone']);
    $email = htmlentities($_POST['email']);
    $office = htmlentities($_POST['office']);
    $cert = htmlentities($_POST['cert']);
    $courses = htmlentities($_POST['courses']);
    
    $fileName = $_FILES['file']['name'];
                $fileType = $_FILES['file']['type'];
                            $fileExt = explode('.',$fileName);
                                $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpeg','jpg','png');
                if (!in_array($fileActualExt, $allowed)){
                    array_push($errors, "Another file type used in Image Slot");
                }
        if(count($errors)==0){
            $img_type = 'jpg';
            $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); 
            if(strlen($current_month)==1){
                $current_new_month = '0'.$current_month;
            }else{
                $current_new_month = $current_month;
            }
                $current_sec = date('s');
                $generate = uniqid('', true);
                $explode = explode('.', $generate);
                $array1 = $explode[0];
                $array2 = $explode[1];
                $img_initial = "IMG-".$current_year.$current_new_month.$current_day.$current_hour.$current_min.$current_sec."-";
                $main_picture = $img_initial.$array2.".".$img_type;
                
                move_uploaded_file($_FILES["file"]["tmp_name"],"../../staffphotos/".$main_picture);

            $myfiles1 = $main_picture;
            $target_id = $_GET['update'];
            $sql = User::find_by_sql("UPDATE staff SET fullname='$fullname', phone='$phone', email='$email', office='$office', cert='$cert', courses='$courses', picture='$myfiles1' WHERE id=$target_id ");
            if($sql) {
             ?>
               <script type="text/javascript">
            alert("Updated Successfully! ");
                </script>
            <?php

                    }else{
                        ?>
               <script type="text/javascript">
            alert("Unable to Update! ");
                </script>
            <?php
            die();
                    }
	   }else{
            echo "<script> alert('Another file type used in Image Slot'); </script>";
        }
    
}
if(isset($_GET['update'])){
    $staff_id = $_GET['update'];
    $query_db = User::find_by_sql("SELECT * FROM staff WHERE id='$staff_id'");
    if(mysqli_num_rows($query_db)>0){
        while($row=mysqli_fetch_assoc($query_db)){
            $fullname = $row['fullname'];
            $phone = $row['phone'];
            $email = $row['email'];
            $office = $row['office'];
            $cert = $row['cert'];
            $courses = $row['courses'];
            $staff_imagepath = '../../staffphotos/'.$row['picture'];
        }
    }
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
                        <h1 class="page-header center-text">Register Staff</h1>

                         <div class="nacoss-all-discuss nacoss-my-discuss news">
                            <div class="panel document-panel">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body" style="overflow:hidden">
                                        <form class="nacoss-profile" method="POST" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
                                        <div class="row form-content">
                            <?php if(isset($_GET['update'])){ $path=$staff_imagepath; }else{ $path="../../staffphotos/default_news.png"; } ?>
                            <div class="container" style="text-align:center; margin-bottom:20px">
  <div class="col-md-3 col-sm-3 col-xs-3 col-sm-offset-4  col-xs-offset-4 col-md-offset-4 img-block" style='background-image:url("<?php echo $path; ?>"); height:100px;width:100px;border-radius:50px;background-size:cover' onmouseover="displayImageOverlay(this)" onmouseout="hideImageOverlay(this)">
		<div class="img-overlay animated fadeIn" style="width:100px;width:100px;border-radius:50px;padding-top:20px;left:0">
            <label class="inner-n-vsble">
                Change Image<br><i class="fa fa-camera"></i>
                 <input class="profile-img form-control " name="file" type="file" value="<?php echo $news_image; ?>">
                     </label>
                        </div>
						</div>
</div>
                                             <div class="col-md-12 txt">
                                                <label>Full Name:</label>
                                                <input type="text" class="form-control" name="fullname" placeholder="enter fullname here" value="<?php echo $fullname; ?>">
                                            </div>
                                            <div class="col-md-12 txt">
                                                <label>Phone Number:</label>
                                                <input type="text" class="form-control" name="phone" placeholder="enter phone number" value="<?php echo $phone; ?>">
                                            </div>
                                            <div class="col-md-12 txt">
                                                <label>Email Address:</label>
                                                <input type="text" class="form-control" name="email" placeholder="example@mail.com" value="<?php echo $email; ?>">
                                            </div>
                                            <div class="col-md-12 txt">
                                                <label>Office Number:</label>
                                                <input type="text" class="form-control" name="office" placeholder="enter office number" value="<?php echo $office; ?>">
                                            </div>
                                            <div class="col-md-12 txt">
                                                <label>Qualification:</label>
                                                <input type="text" class="form-control" name="cert" placeholder="enter qualification" value="<?php echo $cert; ?>">
                                            </div>
                                            <div class="col-md-12 txt">
                                                <label>Courses:</label>
                                                <input type="text" class="form-control" name="courses" placeholder="enter courses in charge of" value="<?php echo $courses; ?>">
                                            </div>
                            <?php if(isset($_GET['update'])){ ?>
                                        <div class="col-md-3 col-md-offset-4" style="margin-top:15px">
                                            <button type="submit" name="update" class="nacoss-btn">Update&nbsp;<i class="fa fa-plus"></i></button>
                                        </div>
                            <?php }else{ ?>
                                        <div class="col-md-3 col-md-offset-4" style="margin-top:15px">
                                            <button type="submit" name="submit" class="nacoss-btn">Add&nbsp;<i class="fa fa-plus"></i></button>
                                        </div>
                            <?php } ?>
                                        </form>

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
    <?php include('includes/footer.php'); ?>