        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php

	if (isset($_GET['no'])) {
		$no = $_GET['no'];
	$result = User::find_by_sql("UPDATE gallery SET no_of_images='$no' WHERE status='1' ");
	if ($result){
		?>
		   <script type="text/javascript">
		alert("Number Of Displayed Image Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php
	}
	}

//	if (isset($_GET['deactivate'])) {
//		$id = $_GET['deactivate'];
//		$result = mysqli_query($db, "UPDATE gallery SET status='0' WHERE id=$id");
//		}



	if (isset($_GET['remove'])) {
		$id = $_GET['remove'];
		$result = User::find_by_sql("UPDATE gallery SET status='2' WHERE id=$id");
		}



	if (isset($_GET['activate'])) {

		$change = User::find_by_sql("UPDATE gallery SET status='0' WHERE status='1' ");
		if($change){
			$id = $_GET['activate'];
			$result = User::find_by_sql("UPDATE gallery SET status='1' WHERE id=$id");

		}


	}







	if (isset($_POST['album1'])) {
		$album = $_POST['album'];

		$sql = User::find_by_sql("UPDATE gallery SET album='$album' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Album Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['msg1'])) {
		$message = $_POST['img1-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage1='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg2'])) {
		$message = $_POST['img2-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage2='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg3'])) {
		$message = $_POST['img3-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage3='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg4'])) {
		$message = $_POST['img4-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage4='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg5'])) {
		$message = $_POST['img5-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage5='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg6'])) {
		$message = $_POST['img6-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage6='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg7'])) {
		$message = $_POST['img7-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage7='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg8'])) {
		$message = $_POST['img8-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage8='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg9'])) {
		$message = $_POST['img9-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage9='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}
	if (isset($_POST['msg10'])) {
		$message = $_POST['img10-msg'];

		$sql = User::find_by_sql("UPDATE gallery SET imageMessage10='$message' WHERE status='1' ");
		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Message Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}


    $img_type = 'jpg';
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
            


	if (isset($_POST['image1'])) {
        
        move_uploaded_file($_FILES["file1"]["tmp_name"],"../../galleryphotos/".$main_picture);
        
		//move_uploaded_file($_FILES["file1"]["tmp_name"],"../../galleryphotos/".$_FILES["file1"]["name"]);
		//$myfiles1 = $_FILES["file1"]["name"];
        
        $myfiles1 = $main_picture;

		$sql1 = User::find_by_sql("UPDATE gallery SET image1='$myfiles1' WHERE status='1' ");
		if($sql1) {
         ?>
		   <script type="text/javascript">
		alert("Image1 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image2'])) {
		move_uploaded_file($_FILES["file2"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles2 = $main_picture;

		$sql2 = User::find_by_sql("UPDATE gallery SET image2='$myfiles2' WHERE status='1' ");
		if($sql2) {
         ?>
		   <script type="text/javascript">
		alert("Image2 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image3'])) {
		move_uploaded_file($_FILES["file3"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles3 = $main_picture;

		$sql3 = User::find_by_sql("UPDATE gallery SET image3='$myfiles3' WHERE status='1' ");
		if($sql3) {
         ?>
		   <script type="text/javascript">
		alert("Image3 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image4'])) {
		move_uploaded_file($_FILES["file4"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles4 = $main_picture;

		$sql4 = User::find_by_sql("UPDATE gallery SET image4='$myfiles4' WHERE status='1' ");
		if($sql4) {
         ?>
		   <script type="text/javascript">
		alert("Image4 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image5'])) {
		move_uploaded_file($_FILES["file5"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles5 = $main_picture;

		$sql5 = User::find_by_sql("UPDATE gallery SET image5='$myfiles5' WHERE status='1' ");
		if($sql5) {
         ?>
		   <script type="text/javascript">
		alert("Image5 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image6'])) {
		move_uploaded_file($_FILES["file6"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles6 = $main_picture;

		$sql6 = User::find_by_sql("UPDATE gallery SET image6='$myfiles6' WHERE status='1' ");
		if($sql6) {
         ?>
		   <script type="text/javascript">
		alert("Image6 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image7'])) {
		move_uploaded_file($_FILES["file7"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles7 = $main_picture;

		$sql7 = User::find_by_sql("UPDATE gallery SET image7='$myfiles7' WHERE status='1' ");
		if($sql7) {
         ?>
		   <script type="text/javascript">
		alert("Image7 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image8'])) {
		move_uploaded_file($_FILES["file8"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles8 = $main_picture;

		$sql8 = User::find_by_sql("UPDATE gallery SET image8='$myfiles8' WHERE status='1' ");
		if($sql8) {
         ?>
		   <script type="text/javascript">
		alert("Image8 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image9'])) {
		move_uploaded_file($_FILES["file9"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles9 = $main_picture;

		$sql9 = User::find_by_sql("UPDATE gallery SET image9='$myfiles9' WHERE status='1' ");
		if($sql9) {
         ?>
		   <script type="text/javascript">
		alert("Image9 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}

	if (isset($_POST['image10'])) {
		move_uploaded_file($_FILES["file10"]["tmp_name"],"../../galleryphotos/".$main_picture);
        $myfiles10 = $main_picture;

		$sql10 = User::find_by_sql("UPDATE gallery SET image10='$myfiles10' WHERE status='1' ");
		if($sql10) {
         ?>
		   <script type="text/javascript">
		alert("Image10 Updated Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
			</script>
		<?php
		die();
				}
	}



?>
<?php
//include ("../connect.php");
//session_start();
$admin_id = $_SESSION['id'];

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
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
        
        
		/*move_uploaded_file($_FILES["file1"]["tmp_name"],"../../galleryphotos/".$_FILES["file1"]["name"]);
		move_uploaded_file($_FILES["file2"]["tmp_name"],"../../galleryphotos/".$_FILES["file2"]["name"]);
		move_uploaded_file($_FILES["file3"]["tmp_name"],"../../galleryphotos/".$_FILES["file3"]["name"]);
		move_uploaded_file($_FILES["file4"]["tmp_name"],"../../galleryphotos/".$_FILES["file4"]["name"]);
		move_uploaded_file($_FILES["file5"]["tmp_name"],"../../galleryphotos/".$_FILES["file5"]["name"]);
		move_uploaded_file($_FILES["file6"]["tmp_name"],"../../galleryphotos/".$_FILES["file6"]["name"]);
		move_uploaded_file($_FILES["file7"]["tmp_name"],"../../galleryphotos/".$_FILES["file7"]["name"]);
		move_uploaded_file($_FILES["file8"]["tmp_name"],"../../galleryphotos/".$_FILES["file8"]["name"]);
		move_uploaded_file($_FILES["file9"]["tmp_name"],"../../galleryphotos/".$_FILES["file9"]["name"]);
		move_uploaded_file($_FILES["file10"]["tmp_name"],"../../galleryphotos/".$_FILES["file10"]["name"]);

		$myfiles1 = $_FILES["file1"]["name"];
		$myfiles2 = $_FILES["file2"]["name"];
		$myfiles3 = $_FILES["file3"]["name"];
		$myfiles4 = $_FILES["file4"]["name"];
		$myfiles5 = $_FILES["file5"]["name"];
		$myfiles6 = $_FILES["file6"]["name"];
		$myfiles7 = $_FILES["file7"]["name"];
		$myfiles8 = $_FILES["file8"]["name"];
		$myfiles9 = $_FILES["file9"]["name"];
		$myfiles10 = $_FILES["file10"]["name"];*/

		$sql = User::find_by_sql("UPDATE gallery SET album='$album', image1='$myfiles1', image2='$myfiles2', image3='$myfiles3', image4='$myfiles4', image5='$myfiles5', image6='$myfiles6', image7='$myfiles7', image8='$myfiles8', image9='$myfiles9', image10='$myfiles10',imageMessage1='$message1',imageMessage2='$message2',imageMessage3='$message3',imageMessage4='$message4',imageMessage5='$message5',imageMessage6='$message1',imageMessage7='$message7',imageMessage8='$message8',imageMessage9='$message9',imageMessage10='$message10' WHERE id=$id");

		if($sql) {
         ?>
		   <script type="text/javascript">
		alert("Update Successful! ");
		window.location="managegallery.php";
			</script>
		<?php

				}else{
					?>
		   <script type="text/javascript">
		alert("Unable to Update! ");
		window.location="managegallery.php";
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
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">

                                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
					<?php //echo display_error(); ?>
                        <strong>Number Of Image To Be Displayed</strong>
                            </div>
							<div class="panel-body col-md-12" style="overflow:auto">
							<span class="input-group-addon"><a href="managegallery.php?no=1">1</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=2">2</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=3">3</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=4">4</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=5">5</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=6">6</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=7">7</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=8">8</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=9">9</a></span>
							<span class="input-group-addon"><a href="managegallery.php?no=10">10</a></span>
							</div>
							<br><br>
						<center><h3>Active Gallery</h3></center>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                            <tr>
                                <th>id</th>
                                <th>Album</th>
								<!--<th>Message</th>-->
								<th>Image1</th>
								<th>Image2</th>
								<th>Image3</th>
								<th>Image4</th>
								<th>Image5</th>
								<th>Image6</th>
								<th>Image7</th>
								<th>Image8</th>
								<th>Image9</th>
								<th>Image10</th>


                                <th>Date</th>

 <!--                               <th>Control</th>				-->
                            </tr>
                        </thead>
                        <tbody>
<?php
$query = "SELECT * ";
$query .= "FROM nacoss.gallery ";
$query .= "WHERE status = '1' ";
          $index = 0;
 $result = User::find_by_sql($query);
 $counter=1;
       	while ( $row = mysqli_fetch_array($result) ) {
		//$row_count =  mysql_num_rows($result);
                $id =$row['id'];
		$_SESSION['album'] =$row['album'];
                /*$fname = $_SESSION['fname'];
               $_SESSION['message'] =$row['message'];*/
		$_SESSION['date']= $row['date'];
                $image1 = $row['image1'];
                $imagepath1 = "../../galleryphotos/".$image1;
				$image2 = $row['image2'];
                $imagepath2 = "../../galleryphotos/".$image2;
				$image3 = $row['image3'];
                $imagepath3 = "../../galleryphotos/".$image3;
				$image4 = $row['image4'];
                $imagepath4 = "../../galleryphotos/".$image4;
				$image5 = $row['image5'];
                $imagepath5 = "../../galleryphotos/".$image5;
				$image6 = $row['image6'];
                $imagepath6 = "../../galleryphotos/".$image6;
				$image7 = $row['image7'];
                $imagepath7 = "../../galleryphotos/".$image7;
				$image8 = $row['image8'];
                $imagepath8 = "../../galleryphotos/".$image8;
				$image9 = $row['image9'];
                $imagepath9 = "../../galleryphotos/".$image9;
				$image10 = $row['image10'];
                $imagepath10 = "../../galleryphotos/".$image10;

                ?>
                <tr>
                        <td><?php echo $counter;?></td>
                        <td><?php echo $row['album'];?></td>
						<!--<td><php echo $row['message']></td>-->
						<td><img src="<?php echo $imagepath1; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage1'];?></td>
						<td><img src="<?php echo $imagepath2; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage2'];?></td>
						<td><img src="<?php echo $imagepath3; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage3'];?></td>
						<td><img src="<?php echo $imagepath4; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage4'];?></td>
						<td><img src="<?php echo $imagepath5; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage5'];?></td>
						<td><img src="<?php echo $imagepath6; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage6'];?></td>
						<td><img src="<?php echo $imagepath7; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage7'];?></td>
						<td><img src="<?php echo $imagepath8; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage8'];?></td>
						<td><img src="<?php echo $imagepath9; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage9'];?></td>
						<td><img src="<?php echo $imagepath10; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage10'];?></td>


                        <td><?php echo $row['date']?></td>

                </tr>


                <?php
                $counter++;
        }
        ?>
          </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>


        </div>
		<div class="row">
<div class="column">
	<center><strong><h3>Edit Active Gallery</h3></strong></center>
	<div class="col-sm-4">
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images1</label>
				<div class="form-group input-group">
					<span class="input-group-addon">1</span>
					<input name="file1" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image1"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage1</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message1" name="img1-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg1"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images4</label>
				<div class="form-group input-group">
					<span class="input-group-addon">4</span>
					<input name="file4" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image4"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage4</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message4" name="img4-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg4"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images7</label>
				<div class="form-group input-group">
					<span class="input-group-addon">7</span>
					<input name="file7" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image7"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage7</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message7" name="img7-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg7"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images10</label>
				<div class="form-group input-group">
					<span class="input-group-addon">10</span>
					<input name="file10" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image10"><i class="fa fa-check"></i></button></span>
				</div>
			</form>

		</div>
	</div>
	<div class="col-sm-4">
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images2</label>
				<div class="form-group input-group">
					<span class="input-group-addon">2</span>
					<input name="file2" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image2"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage2</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message2" name="img2-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg2"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images5</label>
				<div class="form-group input-group">
					<span class="input-group-addon">5</span>
					<input name="file5" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image5"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage5</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message5" name="img5-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg5"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images8</label>
				<div class="form-group input-group">
					<span class="input-group-addon">8</span>
					<input name="file8" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image8"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage8</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message8" name="img8-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg8"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage10</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message10" name="img10-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg10"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>

	</div>
	<div class="col-sm-4">

		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images3</label>
				<div class="form-group input-group">
					<span class="input-group-addon">3</span>
					<input name="file3" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image3"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage3</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message3" name="img3-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg3"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images6</label>
				<div class="form-group input-group">
					<span class="input-group-addon">6</span>
					<input name="file6" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image6"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage6</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message6" name="img6-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg6"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Images9</label>
				<div class="form-group input-group">
					<span class="input-group-addon">9</span>
					<input name="file9" type="file" value="" class="form-control" required="required"/>
					<span class="input-group-addon"><button type="submit" name="image9"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>ImageMessage9</label>
				<div class="form-group input-group">
					<span><input type="text" class="form-control" placeholder="message9" name="img9-msg" required></span>
					<span class="input-group-addon"><button type="submit" name="msg9"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
		<div class="panel-body">
			<form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
			<label>Album Name</label>
				<div class="form-group input-group">
					<input type="text" value="" class="form-control" placeholder="Album Name" name="album"/>
					<span class="input-group-addon"><button type="submit" name="album1"><i class="fa fa-check"></i></button></span>
				</div>
			</form>
		</div>
	</div>



		</div>
		</div>
		 <div class="row">

                                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
						<center><h3>In-Active Gallery</h3></center>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                            <tr>
                                <th>id</th>
                                <th>Album</th>
								<!--<th>Message</th>-->
								<th>Image1</th>
								<th>Image2</th>
								<th>Image3</th>
								<th>Image4</th>
								<th>Image5</th>
								<th>Image6</th>
								<th>Image7</th>
								<th>Image8</th>
								<th>Image9</th>
								<th>Image10</th>


                                <th>Date</th>

                                <th>Control</th>
								<th>Control</th>
								<th>Control</th>

                            </tr>
                        </thead>
                        <tbody>
<?php
$query = "SELECT * ";
$query .= "FROM nacoss.gallery ";
$query .= "WHERE status = 'O' ";
          $index = 0;
 $result = User::find_by_sql($query);
 $counter=1;
       	while ( $row = mysqli_fetch_array($result) ) {
		//$row_count =  mysql_num_rows($result);
                $id1 =$row['id'];
		$_SESSION['album'] =$row['album'];
              /*  $fname = $_SESSION['fname'];
                $_SESSION['message'] =$row['message'];*/
		$_SESSION['date']= $row['date'];
                $image1 = $row['image1'];
                $imagepath1 = "../../galleryphotos/".$image1;
				$image2 = $row['image2'];
                $imagepath2 = "../../galleryphotos/".$image2;
				$image3 = $row['image3'];
                $imagepath3 = "../../galleryphotos/".$image3;
				$image4 = $row['image4'];
                $imagepath4 = "../../galleryphotos/".$image4;
				$image5 = $row['image5'];
                $imagepath5 = "../../galleryphotos/".$image5;
				$image6 = $row['image6'];
                $imagepath6 = "../../galleryphotos/".$image6;
				$image7 = $row['image7'];
                $imagepath7 = "../../galleryphotos/".$image7;
				$image8 = $row['image8'];
                $imagepath8 = "../../galleryphotos/".$image8;
				$image9 = $row['image9'];
                $imagepath9 = "../../galleryphotos/".$image9;
				$image10 = $row['image10'];
                $imagepath10 = "../../galleryphotos/".$image10;

                ?>
                <tr>
                        <td><?php echo $counter;?></td>
                        <td><?php echo $row['album'];?></td>
						<!--<td><php echo $row['message']></td>-->

						<td><img src="<?php echo $imagepath1; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage1'];?></td>
						<td><img src="<?php echo $imagepath2; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage2'];?></td>
						<td><img src="<?php echo $imagepath3; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage3'];?></td>
						<td><img src="<?php echo $imagepath4; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage4'];?></td>
						<td><img src="<?php echo $imagepath5; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage5'];?></td>
						<td><img src="<?php echo $imagepath6; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage6'];?></td>
						<td><img src="<?php echo $imagepath7; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage7'];?></td>
						<td><img src="<?php echo $imagepath8; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage8'];?></td>
						<td><img src="<?php echo $imagepath9; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage9'];?></td>
						<td><img src="<?php echo $imagepath10; ?>" alt="user image" height="50" class="img-rounded"><?php echo $row['imageMessage10'];?></td>

						<td><?php echo $row['date']?></td>
						<td>
				<a href="managegallery.php?edit=<?php echo $row['id']; ?>" class="edit_btn" style="color:blue;"><button class="btn btn-info">Edit</button></a>
						</td>
						<td>
				<a href="managegallery.php?activate=<?php echo $row['id']; ?>" class="activate_btn" style="color:blue;"><button class="btn btn-success">Activate</button></a>
						</td>
						<td>
				<a href="managegallery.php?remove=<?php echo $row['id']; ?>" class="remove_btn" style="color:blue;"><button class="btn btn-danger">Remove</button></a>
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
                    </div>
                    <!--End Advanced Tables -->
                </div>


        </div>
<?php
    $idmain = 0;
	if (isset($_GET['edit'])) {
		$idmain = $_GET['edit'];
		$record = User::find_by_sql("SELECT * FROM nacoss.gallery WHERE id=$idmain");

		if (mysqli_num_rows($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$idmain = $n['id'];
			$image1 = $n['image1'];
			$image2 = $n['image2'];
			$image3 = $n['image3'];
			$image4 = $n['image4'];
			$image5 = $n['image5'];
			$image5 = $n['image6'];
			$image5 = $n['image7'];
			$image5 = $n['image8'];
			$image5 = $n['image9'];
			$image5 = $n['image10'];
			$album = $n['album'];
			$message1 = $n['imageMessage1'];
            $message2 = $n['imageMessage2'];
            $message3 = $n['imageMessage3'];
            $message4 = $n['imageMessage4'];
            $message5 = $n['imageMessage5'];
            $message6 = $n['imageMessage6'];
            $message7 = $n['imageMessage7'];
            $message8 = $n['imageMessage8'];
            $message9 = $n['imageMessage9'];
            $message10 = $n['imageMessage10'];

		}
        
?>
		<div class="panel panel-default">


		<div class="row">

                <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
					<marquee><?php //echo display_error(); ?></marquee>
                        <center><strong>Edit & Update Gallery</strong></center>
                            </div>



                            <div class="panel-body">
                                <form action="managegallery.php" method="POST" role="form" enctype="multipart/form-data">
<br/>
									<input type="hidden" value="<?php echo $idmain; ?>" name="id">

									<label>Album Name</label>
										<div class="form-group input-group">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" placeholder="Album Name" name="album"/>
										</div>
									<label>Images And Thier Message</label>
					<div class="column">
						<div class="col-sm-6">


										<div class="form-group input-group">
                                            <span class="input-group-addon">1</span>
                                            <input name="file1" type="file" value="<?php echo $image1; ?>" class="form-control" required="required"/>
											<span><input value="<?php echo $message1; ?>" type="text" class="form-control" placeholder="message1" name="img1-msg" required></span>
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">2</span>
                                            <input name="file2" type="file" value="<?php echo $image2; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message2; ?>" class="form-control" placeholder="message2" name="img2-msg" required></span>
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">3</span>
                                            <input name="file3" type="file" value="<?php echo $image3; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message3; ?>" class="form-control" placeholder="message3" name="img3-msg" required></span>
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">4</span>
                                            <input name="file4" type="file" value="<?php echo $image4; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message4; ?>" class="form-control" placeholder="message4" name="img4-msg" required></span>
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">5</span>
                                            <input name="file5" type="file" value="<?php echo $image5; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message5; ?>" class="form-control" placeholder="message5" name="img5-msg" required></span>
										</div>
						</div>
						<div class="col-sm-6">

										<div class="form-group input-group">
                                            <span class="input-group-addon">6</span>
                                            <input name="file6" type="file" value="<?php echo $image6; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message6; ?>" class="form-control" placeholder="message6" name="img6-msg" required></span>
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">7</span>
                                            <input name="file7" type="file" value="<?php echo $image7; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message7; ?>" class="form-control" placeholder="message7" name="img7-msg" required></span>
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">8</span>
                                            <input name="file8" type="file" value="<?php echo $image8; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message8; ?>" class="form-control" placeholder="message8" name="img8-msg" required></span>
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">9</span>
                                            <input name="file9" type="file" value="<?php echo $image9; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message9; ?>" class="form-control" placeholder="message9" name="img9-msg" required></span>
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon">10</span>
                                            <input name="file10" type="file" value="<?php echo $image10; ?>" class="form-control" required="required"/>
											<span><input type="text" value="<?php echo $message10; ?>" class="form-control" placeholder="message10" name="img10-msg" required></span>
										</div>
						</div>
						</div>

                                     <button type="submit" name="update" class="btn btn-info" required="required">Update</button>                                    <hr />
                                </form>
                            </div>

                        </div>
                    </div>


        </div>


</div>
<?php 
	}                
?>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>