<!-- Header -->
<?php include('includes/header.php'); ?>
<?php
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$result = User::find_by_sql("DELETE FROM nacoss_news WHERE id=$id");
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
                        <h1 class="page-header center-text">Manage News</h1>
<?php
                
$query = User::find_by_sql("SELECT * FROM nacoss.nacoss_news WHERE status = '1'");
if(mysqli_num_rows($query)>0){                       
?>
                         <div class="nacoss-all-discuss nacoss-my-discuss">
                            <div class="panel document-panel">
                                    <!-- <div class="panel-heading"></div> -->
                                    <!-- <div class="panel-body"> -->
                                    <table class="table table-responsive" id="dataTables-example">
                                        <thead class="panel-heading">
                                            <tr>
                                                <td class="no-border">News Title</td>
                                                <td class="no-border">News Content</td>
                                                <td class="no-border">News Image</td>
                                                <td class="no-border">Control</td>
                                                <td class="no-border">Control</td>
                                            </tr>
                                        </thead>
                                        <tbody class="panel-body">
<?php
    while ( $row = mysqli_fetch_array($query) ) {
                $news_id =$row['id'];
                $news_title = $row['title'];
                $news_image = $row['picture'];
                $news_details = $row['details'];
                $news_imagepath = "../../newsphotos/".$news_image;
        $trunc = wordwrap($row["details"], 60, "[{@}]");
        $exp = explode("[{@}]",$trunc);
        $news_details = $exp[0]."...";
?>
                                            <!-- List of all news -->
                                            <tr>
                                                <td><?php echo $news_title; ?></td>
                                                <td><?php echo $news_details; ?></td>
                                                <td>
                                                    <div style="background-color:rgb(200,200,200);text-align:center;border-radius:10px">
                                                        <img src="<?php echo $news_imagepath; ?>" width="50px">
                                                        </div>
                                                    </td>
                                                <td><a href="add_news.php?update=<?php echo $news_id ?>"><button class="nacoss-btn">Update&nbsp;<i class="fa fa-clone"></i></button></a></td>
                                                <td><a href="?delete=<?php echo $news_id ?>"><button class="nacoss-btn border-danger">Delete&nbsp;<i class="fa fa-close"></i></button></a></td>
                                            </tr>
<?php
    }
?>
                                        </tbody>

                                        </table>
                            </div>
                        </div>
<?php
}
?>
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