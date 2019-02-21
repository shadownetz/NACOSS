        <!-- Header -->
        <?php include('includes/header.php'); ?>
<?php

if (isset($_GET['add'])) {
		$id = $_GET['add'];
		$result = User::find_by_sql("UPDATE gallery SET status='0' WHERE id=$id");
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

						<center><h3>In-Active Gallery</h3></center>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                            <tr>
                                <th>id</th>
                                <th>Album</th>
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


                            </tr>
                        </thead>
                        <tbody>
<?php
$query = "SELECT * ";
$query .= "FROM nacoss.gallery ";
$query .= "WHERE status = '2' ";
          $index = 0;
 $result = User::find_by_sql($query);
 $counter=1;
       	while ( $row = mysqli_fetch_array($result) ) {
		//$row_count =  mysql_num_rows($result);
                $id1 =$row['id'];
		$_SESSION['album'] =$row['album'];
                $fname = $_SESSION['fname'];
                $_SESSION['message'] =$row['message'];
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
				<a href="removedgallery.php?add=<?php echo $row['id']; ?>" class="add_btn" style="color:blue;"><button class="btn btn-warning">Add Again</button></a>
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
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>