<!-- Header -->
<?php include('includes/header.php'); ?>
<?php

$news_title = "";
$news_details = "";
$news_imagepath = "";
$news_details = "";
?>
<?php
$errors = array();
if (isset($_POST['submit'])){
    $file = $_FILES['file']['name'];
    $title = htmlentities($_POST['title']);
    $news_content = htmlentities($_POST['news_content']);
    
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
                
                move_uploaded_file($_FILES["file"]["tmp_name"],"../../newsphotos/".$main_picture);

            $myfiles1 = $main_picture;
            $sql = User::find_by_sql("INSERT INTO nacoss_news SET title='$title', details='$news_content', picture='$myfiles1', status=1, date=NOW() ");
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
    $title = htmlentities($_POST['title']);
    $news_content = htmlentities($_POST['news_content']);
    
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
                
                move_uploaded_file($_FILES["file"]["tmp_name"],"../../newsphotos/".$main_picture);

            $myfiles1 = $main_picture;
            $target_id = $_GET['update'];
            $sql = User::find_by_sql("UPDATE nacoss_news SET title='$title', details='$news_content', picture='$myfiles1' WHERE id=$target_id ");
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
    $news_id = $_GET['update'];
    $query_db = User::find_by_sql("SELECT * FROM nacoss_news WHERE id='$news_id'");
    if(mysqli_num_rows($query_db)>0){
        while($news_row=mysqli_fetch_assoc($query_db)){
            $news_title = $news_row['title'];
            $news_image = $news_row['picture'];
            $news_details = $news_row['details'];
            $news_imagepath = "../../newsphotos/".$news_image;
            /*$trunc = wordwrap($news_row["details"], 60, "[{@}]");
            $exp = explode("[{@}]",$trunc);
            $news_details = $exp[0]."...";*/
            
            $news_details = $news_row["details"];
        }
    }
}
?>
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
                        <h1 class="page-header center-text">Add News</h1>

                         <div class="nacoss-all-discuss nacoss-my-discuss news">
                            <div class="panel document-panel">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">
                                        <form class="nacoss-profile" method="POST" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
                                        <div class="row form-content">
                            <?php if(isset($_GET['update'])){ $path=$news_imagepath; }else{ $path="../../newsphotos/default_news.png"; } ?>
                                            <div class="col-md-12 blk" style='background-image:url("<?php echo $path; ?>")' onmouseover="displayImageOverlay(this)" onmouseout="hideImageOverlay(this)">
                                            <div class="img-overlay animated fadeIn" >
                                                        <label class="inner-n-vsble">
                                                        Change Image<br><i class="fa fa-camera"></i>
                                                            <input class="profile-img form-control " name="file" type="file" value="<?php echo $news_image; ?>">
                                                        </label>
                                                    </div>
                                            
                                            </div>
                                            <div class="col-md-12 txt">
                                                <label>News Title:</label>
                                                <input type="text" class="form-control" name="title" placeholder="Enter title here" value="<?php echo $news_title; ?>">
                                            </div>
                                            <div class="col-md-12 txt">
                                                <textarea class="form-control" name="news_content" placeholder="Enter news content"><?php echo $news_details; ?></textarea>
                                            </div>
                                        </div>
                            <?php if(isset($_GET['update'])){ ?>
                                        <div class="col-md-3 col-md-offset-4">
                                            <button type="submit" name="update" class="nacoss-btn">Update&nbsp;<i class="fa fa-plus"></i></button>
                                        </div>
                            <?php }else{ ?>
                                        <div class="col-md-3 col-md-offset-4">
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