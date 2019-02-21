<?php

require_once ("../../includes/initialize.php");
require_once("assign_variables.php");
$session_student = $_SESSION['rnumber'];

    
if(isset($_POST['create'])){
    global $session_student;
    

        
    $topic = $database->escape_value($_POST['topic']);
    $discussion_type = $database->escape_value($_POST['discussion_type']);
    $aim = $database->escape_value($_POST['aim']);
    $display_picture = $_FILES['file']['name'];
        $fileExt = explode('.',$display_picture);
            $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpeg','JPEG','jpg','JPG','png','PNG');
                if (!in_array($fileActualExt, $allowed)){
                    echo "<script> alert('Another file type used in the image slot!'); window.location = 'new_discussion.php'; </script>";
                }else{
    $picture = $database->escape_value($_FILES['file']['name']);
            $epicture = explode(".", $picture);
            $img_type = end($epicture);
            
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
                    
                    
    $create_table_query = User::find_by_sql("
            CREATE TABLE IF NOT EXISTS `discussions` (
              `id` int(11) NOT NULL,
              `rnumber` varchar(15) NOT NULL,
              `topic` varchar(500) NOT NULL,
              `display_picture` varchar(100) NOT NULL,
              `discussion_aim` text NOT NULL,
              `discussion_type` varchar(15) NOT NULL,
              `date` timestamp NOT NULL,
            PRIMARY KEY  (`id`)
            ) ENGINE=InnoDB ");
    $insert_query =User::find_by_sql("INSERT INTO `discussions` SET rnumber='$session_student', topic='$topic', display_picture='$main_picture', discussion_aim='$aim', discussion_type='$discussion_type', date=NOW()");

        if($insert_query){
            move_uploaded_file($_FILES["file"]["tmp_name"],"../../faqs/img/".$main_picture);
            //move_uploaded_file($_FILES["file"]["tmp_name"],"../../faqs/img/".$_FILES["file"]["name"]);
            
            if($discussion_type == "private"){
                 $fetch_id_query = User::find_by_sql("SELECT * FROM discussions WHERE rnumber='$session_student' AND topic='$topic' AND discussion_type='$discussion_type' " );
                    while($row=mysqli_fetch_assoc($fetch_id_query)){
                        $fetch_id = $row['id'];
                    }
                $discussion_id = $fetch_id;
                $create_table_query = User::find_by_sql("
                        CREATE TABLE IF NOT EXISTS `private_discussions` (
                          `id` int(11) NOT NULL auto_increment,
                          `discussion_id` int(11) NOT NULL,
                          `uname` varchar(30) NOT NULL,
                          `rnumber` varchar(15) NOT NULL,
                          `status` int(11) NOT NULL,
                          `date` timestamp NOT NULL,
                        PRIMARY KEY  (`id`)
                        ) ENGINE=InnoDB ");
                $insert_query = User::find_by_sql("INSERT INTO private_discussions SET rnumber='$session_student', discussion_id='$discussion_id', uname='$uname', status='1', date=NOW() ");
            }

             ?>
           <script type="text/javascript">
        alert("Discussion Created Successfully");

        window.location="new_discussion.php";
        </script>
        <?php

        die();

           }else{

            ?> 
            <script type="text/javascript">
            alert("Unable to Create Discussion, Try again later");
            window.location="new_discussion.php";
            </script>

            <?php


        }
                }
}

/*        if (isset($_POST['send_message'])) {
            require_once ("assign_variables.php");
            
            $dbconnect = mydatabase();

        	$message = mysqli_real_escape_string($dbconnect, $_POST['message']);
            $discussion_id = $_SESSION['discussion_id'];
            
            $fetch_query = mysqli_query($dbconnect, "SELECT * FROM discussions WHERE id='$discussion_id' ");
            while($result = mysqli_fetch_assoc($fetch_query)){
                $topic = $result['topic'];
            }

        		$sql = mysqli_query($dbconnect, "INSERT INTO discussion_logs SET display_picture='$picture', rnumber='$rnumber', uname='$uname', discussion_id='$discussion_id', topic='$topic', message='$message', date=NOW()");
        		if($sql) {
                 ?>
        		   <script type="text/javascript">
        		//alert("message Sent ");
        		//window.location="discussion_topic.php?alpha=<?php //echo $_SESSION['alpha']; ?>&delta=<?php //echo $_SESSION['delta']; ?>&zigma=<?php //echo $_SESSION['zigma'];?>";																	//header location
        			</script>
        		<?php

        				}else{
        					?>
        		   <script type="text/javascript">
        		alert("Unable to send message!");
        		window.location="discussion_topic.php?alpha=<?php echo $_SESSION['alpha']; ?>&delta=<?php echo $_SESSION['delta']; ?>&zigma=<?php echo $_SESSION['zigma'];?>";																//header location
        			</script>
        		<?php
        		die();
        				}



        }*/
    ?>