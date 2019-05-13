<?php include('includes/php/process_upload_result.php'); ?>
<?php
//$submit = array();
$old_course_tiltles_ff = array("COS 101 ( Introduction to Computer Sci. )","MTH 111 ( Elementary Mathematics )","MTH 121 ( Elementary Mathematics II )","PHY 115 (General Physics I)","PHY 191 (Practical Physics)","PHY 121 (Fundamentals Of Physics)","STA 111 (Probability 1)","STA 131 (Inference)","GSP 101 ( Use of English I )","GSP 111 ( Use of Library )","CHM 101 (Basic Chemistry I)","BIO 151 (General Biology I)","ENGR 101 (Introduction to Engr I)");
$old_course_codes_ff = array("cos101","mth111","mth121","phy115","phy191","phy121","sta111","sta131","gsp101","gsp111","chm101","bio151","engr101");

$new_course_titles_ff = array("COS 103 (Computer Hardware Organization)","COS 105 (Intro. to Computer Sc. for Physical Sciences)","MTH 111 (Elementary Mathematics I)","MTH 121 (Elementary Mathematics II)","PHY 107 (Fundamental of Physics I)","PHY 115 (General Physics for Physical Sciences I)","STA 111 (Probability I)","STA 131 (Inference I)","GSP 101 (The use of English I)","GSP 111 (Use of Library)", "CHM 101 (Basic Principle of Chemistry I)");
$new_course_codes_ff = array("cos103","cos105","mth111","mth121","phy107","phy115","sta111","sta131","gsp101","gsp111","chm101");
$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}
$_SESSION['type'] = $type.'_first_yr_first_semester_results';
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
                                            <h3 class="panel-title">Select All Your <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span> Courses</h3>
                                        </div>
                                        <form action="add_grades_<?php echo $type; ?>.php" method="POST" role="form" enctype="multipart/form-data">
                                            <fieldset>

<?php
                                    if($result_type <= 2017){   //OLD REG NOs
                                        $count = 0;
                                        while($count < count($old_course_codes_ff)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $old_course_tiltles_ff[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $old_course_codes_ff[$count]; ?>" type="checkbox" value="<?php echo $old_course_codes_ff[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }else{  //NEW REG NOs
                                        $count = 0;
                                        while($count < count($new_course_codes_ff)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $new_course_titles_ff[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $new_course_codes_ff[$count]; ?>" type="checkbox" value="<?php echo $new_course_codes_ff[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }                           
                                    }
    ?>
                                                <div>
                                                    <button class="nacoss-btn" name="proceed_ff">Proceed</button>
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