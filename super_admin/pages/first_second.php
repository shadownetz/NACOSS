<?php include('includes/php/process_upload_result.php'); ?>
<?php
//$submit = array();
$old_course_codes_fs = array("cos102","cos104","mth122","mth132","phy116","phy118","phy122","sta112","sta132","sta172","gsp102","chm111","bio152","engr102");
$old_course_tiltles_fs = array("COS 102 ( Introduction to Computer System )", "COS 104 ( Computing Practice )", "MTH 122 ( Elementary Mathematics III )", "MTH 132 (Elementary Mathematics IV)","PHY 116 ( General Physics II )","PHY 118 ( General Physics III )", "PHY 122 ( Fundamentals Of Physics II )", "STA 112 ( Probability II )", "STA 132 ( Inference II )","STA 172 ( Statistical Computing I )", "GSP 102 ( Use of English II )", "CHM 111 (Basic Priciples of Chemistry)", "BIO 152 (General Biology II)", "ENG 102 (Applied Mechanics)");

$new_course_titles_fs = array("COS 102 (Computing Practice)", "COS 104 (Introduction to Database Systems)","MTH 122 ( Elementary Mathematics III )", "MTH 132 (Elementary Mathematics IV)","PHY 116 ( General Physics II )","PHY 118 ( General Physics III )","PHY 122 ( Fundamentals Of Physics II )","PHY 124 (Fundamental of Physics III)","PHY 196 (Practical Physics III)","CHM 112 (Basic Principle of Physical Chemistry)","STA 112 ( Probability II )","STA 132 (Inference II)","STA 172 (Statistical Computing I)","GSP 102 (The use of English II)");
$new_course_codes_fs = array("cos102","cos104","mth122","mth132","phy116","phy118","phy122","phy124","phy196","chm112","sta112","sta132","sta172","gsp102");

$result_type = explode_my_year();
if($result_type <= 2017){
    $type = "old";
}else{
    $type = "new";
}
$_SESSION['type'] = $type.'_first_yr_second_semester_results';
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
                                            <h3 class="panel-title">Select All Your <span><b>(2<sup>nd</sup>&nbsp;Semester)</b></span> Courses</h3>
                                        </div>
                                        <form action="add_grades_<?php echo $type; ?>.php" method="POST" role="form" enctype="multipart/form-data">
                                            <fieldset>

<?php
                                    if($result_type <= 2017){   //OLD REG NOs
                                        $count = 0;
                                        while($count < count($old_course_codes_fs)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $old_course_tiltles_fs[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $old_course_codes_fs[$count]; ?>" type="checkbox" value="<?php echo $old_course_codes_fs[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }
                                    }else{  //NEW REG NOs
                                        $count = 0;
                                        while($count < count($new_course_codes_fs)){
?>
                                            <div class="col-sm-6">
                                                <label style="float:left;"><?php echo $new_course_titles_fs[$count]; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <input name="<?php echo $new_course_codes_fs[$count]; ?>" type="checkbox" value="<?php echo $new_course_codes_fs[$count]; ?>">
                                            </div>

                                                
<?php
                                        $count++;
                                        }                           
                                    }
    ?>
                                                <div>
                                                    <button class="nacoss-btn" name="proceed_fs">Proceed</button>
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