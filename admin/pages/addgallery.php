        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php

	if (isset($_POST['submit'])) {

		$album = $_POST['album'];

		$message1 = $_POST['img1-msg'];$message2 = $_POST['img2-msg'];$message3 = $_POST['img3-msg'];
        $message4 = $_POST['img4-msg'];$message5 = $_POST['img5-msg'];$message6 = $_POST['img6-msg'];
        $message7 = $_POST['img7-msg'];$message8 = $_POST['img8-msg'];$message9 = $_POST['img9-msg'];
        $message10 = $_POST['img10-msg'];

	// Image validation: ensure that the form is correctly filled image files
	if (empty($album)) {
		array_push($errors, "Album is required");
	}
	$fileName = $_FILES['file1']['name'];
		$fileType = $_FILES['file1']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot1");
		}
	$fileName = $_FILES['file2']['name'];
		$fileType = $_FILES['file2']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot2");
		}
	$fileName = $_FILES['file3']['name'];
		$fileType = $_FILES['file3']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot3");
		}
	$fileName = $_FILES['file4']['name'];
		$fileType = $_FILES['file4']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot4");
		}
	$fileName = $_FILES['file5']['name'];
		$fileType = $_FILES['file5']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot5");
		}
	$fileName = $_FILES['file6']['name'];
		$fileType = $_FILES['file6']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot6");
		}
	$fileName = $_FILES['file7']['name'];
		$fileType = $_FILES['file7']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot7");
		}
	$fileName = $_FILES['file8']['name'];
		$fileType = $_FILES['file8']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot8");
		}
	$fileName = $_FILES['file9']['name'];
		$fileType = $_FILES['file9']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot9");
		}
	$fileName = $_FILES['file10']['name'];
		$fileType = $_FILES['file10']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
		if (!in_array($fileActualExt, $allowed)){
			array_push($errors, "Another file type used in Image Slot10");
		}

  


	if (count($errors) == 0) {
        $img_type = 'jpg';
            
        for($x=1; $x<=10; $x++){
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
            
            move_uploaded_file($_FILES["file$x"]["tmp_name"],"../../galleryphotos/".$main_picture);
            
            $my_files[] = $main_picture;
            
        }

		$myfiles1 = $my_files[0];
		$myfiles2 = $my_files[1];
		$myfiles3 = $my_files[2];
		$myfiles4 = $my_files[3];
		$myfiles5 = $my_files[4];
		$myfiles6 = $my_files[5];
		$myfiles7 = $my_files[6];
		$myfiles8 = $my_files[7];
		$myfiles9 = $my_files[8];
		$myfiles10 = $my_files[9];

        
		$sql = User::find_by_sql("INSERT INTO gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4', image5='$myfiles5', image6='$myfiles6', image7='$myfiles7', image8='$myfiles8', image9='$myfiles9', image10='$myfiles10',imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4',imageMessage5='$message5',imageMessage6='$message1',imageMessage7='$message7',imageMessage8='$message8',imageMessage9='$message9',imageMessage10='$message10', no_of_images=5, status=0, date=NOW() ");

		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Upload Successful! ");
		window.location="addgallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Upload! ");
		window.location="addgallery.php";
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


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid nacoss-new-discuss">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-4">
                        <div class="result-panel panel panel-default">
                            <div class="panel-heading text-center"><strong>Add Gallery</strong></div>
                            <?php //echo display_error(); ?>
                        <div class="panel-body">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Album Name</label>
                                        <div class="col-md-12 input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Album Name" name="album">
                                        </div>
                                    </div>
                                <div class="col-md-12 col-md-offset-5"><strong>IMAGES</strong></div>
                                <div class="column">
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">1</span>
                                            <input name="file1"  type="file" class="form-control" required>
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img1-msg" required></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">2</span>
                                            <input name="file2" type="file" class="form-control" required>
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img2-msg" required></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">3</span>
                                            <input name="file3" type="file" class="form-control" required>
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img3-msg" required></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">4</span>
                                            <input name="file4" type="file" class="form-control" required>
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img4-msg" required></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">5</span>
                                            <input name="file5" type="file" class="form-control" >
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img5-msg" ></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">6</span>
                                            <input name="file6" type="file" value="" class="form-control"/>
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img6-msg" ></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">7</span>
                                            <input name="file7" type="file" value="" class="form-control">
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img7-msg" ></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">8</span>
                                            <input name="file8" type="file" value="" class="form-control" >
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img8-msg" ></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">9</span>
                                            <input name="file9" type="file" value="" class="form-control" >
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img9-msg" ></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">10</span>
                                            <input name="file10" type="file" value="" class="form-control" >
                                            <label>Message</label>
                                            <span><input type="text" class="form-control" placeholder="message" name="img10-msg" ></span>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-6 col-md-offset-5"><button type="submit" name="submit" class="btn btn-info" required>Upload</button>   </div>
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