<?php include('includes/php/process_upload_result.php'); ?>
<?php
//$submit = array();
$old_course_tiltles_sf = array("COS 201 (Computer Programming I)","COS 251 ( Machine and Assembly Language )","MTH 211 (Set Logic And Algebra)","MTH 215 ( Linear Algebra I )","MTH 221 (Real Analysis I)","MTH 207 (Advanced Mathematics VII)","STA 205 ( Statistics for Physical Sc. & Engr. I )","STA 211 (Probability III)","STA 231 (Inference III)","GSP 201 ( Basic Concepts & Theory of Peace )","GSP 207 ( Humanities I )", "EE 211 (Basic Electrical Engineering)","PHY 211 (Structure Of Matter)", "PHY 221 (Mechanics)", "PHY 241 (Waves)");
$old_course_codes_sf = array("cos201", "cos251", "mth211", "mth215", "mth221", "mth207", "sta205", "sta211", "sta231", "gsp201", "gsp207", "eee211", "phy211", "phy221", "phy241");

$new_course_codes_sf = array("cos201","cos203","cos231","mth211","mth215","mth221","mth311","mth207","sta205","sta211","sta231","gsp201","gsp207","eee211","phy211","phy221");
$new_course_tiltles_sf = array("COS 201 (Computer Programming I)","COS 203 (Introduction to Microcomputer Systems)","COS 231 (Assembly Language Programming)","MTH 211 (Sets, Logic and Algebra)","MTH 215 ( Linear Algebra I )","MTH 221 (Real Analysis I)","MTH 311 (Abstract Algebra I)","MTH 207 (Advanced Mathematics VII)","STA 205 ( Statistics for Physical Sc. & Engr. I )","STA 211 (Probability III)","STA 231 (Inference III)","GSP 201 ( Basic Concepts & Theory of Peace )","GSP 207 ( Humanities I )","EEE 211 (Basic Electrical Engineering)","PHY 211 (Structure Of Matter)","PHY 221 (Mechanics)");

$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}
$_SESSION['type'] = $type.'_second_yr_first_semester_results';
?>
<!-- Header -->
<?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form nacoss-new-discuss nacoss-upload">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Upload your result</h1>
                               
                        <div class="container" class="nacoss-new-discuss">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="result-panel panel panel-default">
                                        <div class="column">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Select All Your Second Year <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span> Courses</h3>
                                        </div>
                                        <form action="add_grades_<?php echo $type; ?>.php" method="POST" role="form" enctype="multipart/form-data">
                                            <fieldset>

<?php
                                    if($result_type <= 2017){   //OLD REG NOs
                                        $count = 0;
                                        while($count < count($old_course_codes_sf)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $old_course_tiltles_sf[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $old_course_codes_sf[$count]; ?>" type="checkbox" value="<?php echo $old_course_codes_sf[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }else{  //NEW REG NOs
                                        $count = 0;
                                        while($count < count($new_course_codes_sf)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $new_course_tiltles_sf[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $new_course_codes_sf[$count]; ?>" type="checkbox" value="<?php echo $new_course_codes_sf[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        } 
                                    }
    ?>
                                                <div>
                                                    <button class="nacoss-btn" name="proceed_sf">Proceed</button>
                                                </div>
                                            </fieldset>
                                            </form>
                                        </div>

                                        
                                    </div>
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