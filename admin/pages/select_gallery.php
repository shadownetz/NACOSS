<?php include('includes/header.php') ?>

<body>

    <div id="wrapper">

<?php include('includes/navigation.php') ?>
<?php
require_once("../../includes/initialize.php");
if(isset($_POST['select_gallery'])){
    $gallery_num = $_POST['gallery_num'];
    if($gallery_num > 1 && $gallery_num <= 10){
        $_SESSION['gallery_num'] = $gallery_num;
        echo "<script> window.location='addgallery.php'; </script>";
    }else{
        echo "<script> alert('Invalid Number, It must range from 2 to 10 numbers'); </script>";
    }
    
    
}    

    
?>

<!-- Page Content -->
 <div id="page-wrapper" class="nacoss-form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Upload Information</h1>
                        <?php include('includes/html/select_num_gallery.php'); ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

</div>
</body>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>