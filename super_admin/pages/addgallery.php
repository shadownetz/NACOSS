         <!-- Header -->
         <?php include('includes/header.php'); ?>
<?php
$errors = array();

function display_error(){
    global $errors;
    if(count($errors)!=0){
        foreach($errors as $error){
            echo $error."<br>";
        }
    }
}
	if (isset($_POST['submit'])) {
        $errors = array();

		$album = htmlentities($_POST['album']);
        if (empty($album)) {
            array_push($errors, "Album is required");
        }
        
        $count = 1;
        while($count <= $_SESSION['gallery_num']){
            $message[] = $_POST['img'.$count.'-msg'];
        $count++;
        }
        
        $count=1;
        while($count <= $_SESSION['gallery_num']){
            $fileName = $_FILES['file'.$count]['name'];
                $fileType = $_FILES['file'.$count]['type'];
                            $fileExt = explode('.',$fileName);
                                $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpeg','jpg','png');
                if (!in_array($fileActualExt, $allowed)){
                    array_push($errors, "Another file type used in Image Slot".$count);
                }
        $count++;
        }
        if (count($errors) == 0) {
            $img_type = 'jpg';
            $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); 
            if(strlen($current_month)==1){
                $current_new_month = '0'.$current_month;
            }else{
                $current_new_month = $current_month;
            }
            
            $count=1;
            while($count <= $_SESSION['gallery_num']){
                $current_sec = date('s');
                $generate = uniqid('', true);
                $explode = explode('.', $generate);
                $array1 = $explode[0];
                $array2 = $explode[1];
                $img_initial = "IMG-".$current_year.$current_new_month.$current_day.$current_hour.$current_min.$current_sec."-";
                $main_picture = $img_initial.$array2.".".$img_type;
                
                move_uploaded_file($_FILES["file".$count]["tmp_name"],"../../galleryphotos/".$main_picture);
            
                $my_files[] = $main_picture;
                
            $count++;   
            }
            if(!empty($my_files[0])){   $myfiles1 = $my_files[0];   }
            if(!empty($my_files[1])){   $myfiles2 = $my_files[1];   }
            if(!empty($my_files[2])){   $myfiles3 = $my_files[2];   }
            if(!empty($my_files[3])){   $myfiles4 = $my_files[3];   }
            if(!empty($my_files[4])){   $myfiles5 = $my_files[4];   }
            if(!empty($my_files[5])){   $myfiles6 = $my_files[5];   }
            if(!empty($my_files[6])){   $myfiles7 = $my_files[6];   }
            if(!empty($my_files[7])){   $myfiles8 = $my_files[7];   }
            if(!empty($my_files[8])){   $myfiles9 = $my_files[8];   }
            if(!empty($my_files[9])){   $myfiles10 = $my_files[9];  }
            
            if(!empty($message[0])){   $message1 = $message[0];   }
            if(!empty($message[1])){   $message2 = $message[1];   }
            if(!empty($message[2])){   $message3 = $message[2];   }
            if(!empty($message[3])){   $message4 = $message[3];   }
            if(!empty($message[4])){   $message5 = $message[4];   }
            if(!empty($message[5])){   $message6 = $message[5];   }
            if(!empty($message[6])){   $message7 = $message[6];   }
            if(!empty($message[7])){   $message8 = $message[7];   }
            if(!empty($message[8])){   $message9 = $message[8];   }
            if(!empty($message[9])){   $message10 = $message[9];  }
            
            
            if(count($my_files)==1){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1',imageMessage1='$message1', no_of_images=1 status=0, date=NOW() ");
            }elseif(count($my_files)==2){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2',imageMessage1='$message1',imageMessage2='$message2', no_of_images=2, status=0, date=NOW() ");
            }elseif(count($my_files)==3){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3', no_of_images=3, status=0, date=NOW() ");
            }elseif(count($my_files)==4){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4',imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4', no_of_images=4, status=0, date=NOW() ");
            }elseif(count($my_files)==5){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4', image5='$myfiles5',imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4',imageMessage5='$message5', no_of_images=5, status=0, date=NOW() ");
            }elseif(count($my_files)==6){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4', image5='$myfiles5', image6='$myfiles6', imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4',imageMessage5='$message5',imageMessage6='$message6', no_of_images=6, status=0, date=NOW() ");
            }elseif(count($my_files)==7){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4', image5='$myfiles5', image6='$myfiles6', image7='$myfiles7', imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4',imageMessage5='$message5',imageMessage6='$message6',imageMessage7='$message7', no_of_images=7, status=0, date=NOW() ");
            }elseif(count($my_files)==8){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4', image5='$myfiles5', image6='$myfiles6', image7='$myfiles7', image8='$myfiles8', imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4',imageMessage5='$message5',imageMessage6='$message6',imageMessage7='$message7',imageMessage8='$message8', no_of_images=8, status=0, date=NOW() ");
            }elseif(count($my_files)==9){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4', image5='$myfiles5', image6='$myfiles6', image7='$myfiles7', image8='$myfiles8', image9='$myfiles9', imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4',imageMessage5='$message5',imageMessage6='$message6',imageMessage7='$message7',imageMessage8='$message8',imageMessage9='$message9', no_of_images=9, status=0, date=NOW() ");
            }elseif(count($my_files)==10){
                $sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4', image5='$myfiles5', image6='$myfiles6', image7='$myfiles7', image8='$myfiles8', image9='$myfiles9', image10='$myfiles10',imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4',imageMessage5='$message5',imageMessage6='$message6',imageMessage7='$message7',imageMessage8='$message8',imageMessage9='$message9',imageMessage10='$message10', no_of_images=5, status=0, date=NOW() ");
            }
            
            if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Upload Successful! ");
		window.location="select_gallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Upload now! ");
		window.location="select_gallery.php";
			</script>
		<?php
		die();
				}
            
        }
        
    }

?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>

    <?php $gallery_num = $_SESSION['gallery_num']; ?>
        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid nacoss-new-discuss nacoss-addgallery">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-4">
                        <div class="result-panel panel panel-default">
                            <div class="panel-heading text-center">Add New Info</div>
                            <?php echo display_error(); ?>
                        <div class="panel-body">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                
                            <div class="row">
                                    <div class="col-md-12">
                                        <label>Album Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Album Name" name="album">
                                    </div>

                                    <div class="col-md-12">

                                        <!-- Gallery List One -->
                                        <div class="row gallery-add-list">
                                        <?php for($x=1; $x<=$gallery_num; $x++){ ?> 
                                            <div class="col-md-3 img-block">
                                                <div class="gallery-img-block" onmouseover="displayImageOverlay(this)" onmouseout="hideImageOverlay(this)">
                                                    <div class="img-overlay animated fadeIn" >
                                                        <label class="inner-n-vsble">
                                                        Change Image<br><i class="fa fa-camera"></i>
                                                        <input class="profile-img form-control " name="file<?php echo $x; ?>" type="file" required>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 gallery-img-input">
                                            <textarea class="form-control" placeholder="Enter Message Here" name="img<?php echo $x; ?>-msg" required></textarea>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <!-- End of Gallery List One -->

                                    </div>

                                    <div class="col-md-6 col-md-offset-5 margin-top-15x"><button type="submit" name="submit" class="nacoss-btn" >Upload</button>   </div>
                                    
                            </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>