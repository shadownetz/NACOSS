 <?php include('includes/php/process_discussions.php'); ?>
<!-- Header -->
        <?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>
        <?php
        $result = User::find_by_sql("SELECT * FROM  nacoss.joined_members WHERE rnumber='$session_student' GROUP BY discussion_id ");
    if(mysqli_num_rows($result) < 10){

        ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        
                        <?php include('includes/html/chat_discussions.php'); ?>
                        
                        <!--<iframe src="includes/html/chat_discussions.php" name="chat">
                            
                        </iframe>-->
                        <div class="col-md-11">

                          <form name="contact-form" class="chat-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" target="chat">
                            <div class="row">
                                <div class="col-xs-12 send-area">
                                          <textarea name="message" id="message" cols="100" rows="" class="form-control" required autofocus></textarea>
                                </div>
                                <div class="col-md-1 col-sm-1" >
                                    <button id="send" type="submit" name="send_message"><i class="fa fa-send fa-2x"></i></button>
                                </div>
                            </div>
                          </form>
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
<?php
    }else{
        ?> 
            <script type="text/javascript">
            alert("Maximum Number of Joined Groups reached!");
            window.location="all_discussions.php";
            </script>

        <?php
    }
?>
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>