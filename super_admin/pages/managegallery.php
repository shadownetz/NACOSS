        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php
$errors = array();


	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$result = User::find_by_sql("DELETE FROM gallery WHERE id=$id");
		}


	if (isset($_GET['activate'])) {
        $id = $_GET['activate'];
        $query = User::find_by_sql("SELECT * FROM gallery WHERE id=$id");
        while($row=mysqli_fetch_assoc($query)){
            $record_counts = $row["no_of_images"];
            $x = 1;
            while($x<=$record_counts){
                $image = $row["image$x"];
                $message = $row["imageMessage$x"];
                
                if(empty($image) && empty($message)){
                    array_push($errors, "Empty Message!");
                }
            $x++;   
            }
            if(count($errors)>2){
                echo "<script> alert('You can not activate this data!'); </script>";
            }else{
                $change = User::find_by_sql("UPDATE gallery SET status='0' WHERE status='1' ");
                if($change){
                    $result = User::find_by_sql("UPDATE gallery SET status='1' WHERE id=$id");

                }   
            }
        }
	}

    if (isset($_POST['remove'])){
        $row_id = htmlentities($_POST['row_id']);
        if (empty($row_id)){
                    array_push($errors, "Error getting the records!");
                }
        if(count($errors)==0){
            $sql = User::find_by_sql("UPDATE gallery SET imageMessage$row_id='', image$row_id='' WHERE status='1' ");
            if($sql){
                echo "<script> alert('Record removed successfully!'); </script>";
            }else{
                echo "<script> alert('Unabe to remove record!'); </script>";
            }
        }
        
    }


	if (isset($_POST['submit'])){
        
		$img_msg = htmlentities($_POST['img_msg']);
        $row_id = htmlentities($_POST['row_id']);
        //$active_id = $_SESSION["active_id"];  //31 119
        
        if (empty($img_msg)){
                    array_push($errors, "Image Message must be filled!");
                }
        if (empty($row_id)){
                    array_push($errors, "Error getting the records!");
                }
        
        
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
                
                move_uploaded_file($_FILES["file"]["tmp_name"],"../../galleryphotos/".$main_picture);

            $myfiles1 = $main_picture;
            
            $sql = User::find_by_sql("UPDATE gallery SET imageMessage$row_id='$img_msg', image$row_id='$myfiles1' WHERE status='1' ");
            if($sql) {
             ?>
               <script type="text/javascript">
            alert("Update Successful! ");
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
        
        
		
?>
	
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid nacoss-new-discuss nacoss-addgallery nacoss-managegallery">
                <div class="row">
                 <div class="col-md-12">
                    <div class="result-panel panel panel-default">
<?php             
$query = User::find_by_sql("SELECT * FROM nacoss.gallery WHERE status = '1' LIMIT 1");
if(mysqli_num_rows($query)>0){    
       	while ( $row = mysqli_fetch_array($query) ) {
                $active_id =$row['id'];
            //$_SESSION["active_id"] = $active_id; //31 119
                $active_album = $row['album'];
                $number_of_image = $row['no_of_images'];
?>
						<div class="panel-heading text-center">Active Gallery (<?php echo $active_album; ?>)</div>
                        <div class="panel-body">
								<div class="row">
<?php             
            $x = 1;
            while($x<=$number_of_image){
                $active_image = $row["image$x"];
                $active_imagepath = "../../galleryphotos/".$active_image;
                $active_message = $row["imageMessage$x"];
                
                
                if(!empty($active_image) && !empty($active_message)){
                    if(empty($active_image)){
                        $active_imagepath = "../../galleryphotos/default_news.png";
                    }
                ?>
									
								<!-- Active Gallery List -->
									<div class="col-md-12">
                                        <div class="row manage-block">
                                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
											<div class="col-md-3 img-block" style='background-image:url("<?php echo $active_imagepath; ?>");background-size:cover' onmouseover="displayImageOverlay(this)" onmouseout="hideImageOverlay(this)">
                                                
													<div class="img-overlay animated fadeIn" >
                                                        <label class="inner-n-vsble">
                                                        Change Image<br><i class="fa fa-camera"></i>
                                                            <input class="profile-img form-control " name="file" type="file">
                                                            <input class="" name="row_id" type="hidden" value="<?php echo $x; ?>">
                                                        </label>
                                                    </div>
                                                    
											</div>
                                            
											<div class="col-md-7 gallery-img-input">
												<textarea placeholder="Image Message" class="form-control" name="img_msg"><?php echo $active_message; ?></textarea>
											</div>
											<div class="col-md-2">
												<div>
												<button type="submit" name="submit" class="nacoss-btn" style="width:100%">Update&nbsp;<i class="fa fa-check"></i></button>
												</div>
                                                <div>
                                                <button type="submit" name="remove" class="nacoss-btn border-danger" style="width:100%">Remove&nbsp;<i class="fa fa-close"></i></button>
												</div>
											</div>
                                            </form>
										</div>
									</div>
									<!-- End of Active Gallery List -->      
                
            <?php                     
            }   
            $x++;    
            }
        
?>
									

								</div>
                        </div>
<?php
        }
?>          
<?php
}
?>                        
                    </div>   
              </div>
        </div>
            
                
<?php
$result = User::find_by_sql("SELECT * FROM nacoss.gallery WHERE status = '0' ");
if(mysqli_num_rows($result)>0){                       
?>
		<div class="row">
			<div class="col-md-12">
                    <div class="result-panel panel panel-default">
						<div class="panel-heading text-center">Inactive Gallery</div>
						<div class="panel-body" style="overflow:auto">
								<!-- InActive Gallery List -->
								<table class="table table-responsive">
         							<thead>
            							<tr>
                							<th class="no-border">ID</th>
               								<th class="no-border">Album Name</th>
											<th class="no-border">Image 1</th>
											<th class="no-border">Control</th>
											<th class="no-border">Control</th>
            							</tr>
									</thead>
<?php
 $counter=1;
       	while ( $row = mysqli_fetch_array($result) ) {
		//$row_count =  mysql_num_rows($result);
                $id =$row['id'];
                $album = $row['album'];
                $image1 = $row['image1'];
                $imagepath1 = "../../galleryphotos/".$image1;
?>
										<tbody>
											<!-- Inactive Gallery List -->
											<tr>
												<td><?php echo $counter; ?></td>
												<td><?php echo $album; ?></td>
												<td>
											<div class="col-md-12 img-block" style='background-image:url("<?php echo $imagepath1; ?>");height:70px' >
											</div>
												</td>
												<td>
												<a href="?activate=<?php echo $id; ?>"><button class="nacoss-btn" style="width:100%">Activate&nbsp;<i class="fa fa-check"></i></button></a>
												</td>
												<td>
												<a href="?delete=<?php echo $id; ?>"><button class="nacoss-btn border-danger" style="width:100%">Delete&nbsp;<i class="fa fa-close"></i></button></a>
												</td>
											</tr>
										</tbody>
<?php
 $counter++;           
    }
?>
										<!-- End of Inactive Gallery List -->
										
								</table>
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