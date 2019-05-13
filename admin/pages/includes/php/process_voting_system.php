<?php 

require_once ("../../includes/initialize.php");

$session_student = $_SESSION['rnumber'];
    
if(isset($_POST['submit'])){
    global $session_student;
        
    $rnumber = $database->escape_value($_POST['rnumber']);
    $post = $database->escape_value($_POST['post']);


        $check_query = User::find_by_sql("SELECT * FROM `all_students` WHERE rnumber='$rnumber' ");
        $result = $database->num_rows($check_query);
        
        if(empty($result)){
            ?>
               <script type="text/javascript">
            alert("Student not yet registered in the system!");

            window.location="voting_system.php";
            </script>
            <?php

            die();
        }else{
            while ( $row = mysqli_fetch_array($check_query) ) {	
            $user_fname = $row['fname'];
            $user_lname = $row['lname'];
            $user_oname = $row['oname'];
            $user_semail = $row['semail'];
            $user_oemail = $row['oemail'];
            $user_level = $row['level'];
            $user_rnumber = $row['rnumber'];
            $user_gender = $row['gender'];
                
            $user_full_name = $user_fname." ".$user_lname;
            }
                
            $create_table_query = User::find_by_sql("
            CREATE TABLE IF NOT EXISTS `voting_system` (
              `id` int(11) NOT NULL auto_increment,
              `rnumber` varchar(50) NOT NULL,
              `full_name` varchar(100) NOT NULL,
              `post` varchar(50) NOT NULL,
              `eligibility` int(11) NOT NULL,
              `ineligibility` int(11) NOT NULL,
              `registrar` varchar(50) NOT NULL,
              `date` timestamp NOT NULL,
            PRIMARY KEY  (`id`)
            ) ENGINE=InnoDB ");
            
        $check_query = User::find_by_sql("SELECT * FROM `voting_system` WHERE rnumber='$user_rnumber' ");
        if($database->num_rows($check_query)>0){
            ?>
               <script type="text/javascript">
            alert("Candidate Already registered");
                 var x = confirm("Would you want to override the previous registration?");
                   if(x){
                       <?php
                        $_SESSION['user_rnumber'] = $user_rnumber;
                        $_SESSION['user_full_name'] = $user_full_name;
                        $_SESSION['user_post'] = $post;
                        $_SESSION['user_rnumber'] = $user_rnumber; 
                       ?>
                       
                       window.location="includes/php/confirm_voting_system.php";
                   }else{
            window.location="voting_system.php";
                   }
            </script>
            <?php

            //die();
        }else{
            
            //$insert_query = User::create_candidate_query($user_rnumber, $user_full_name, $post);
            $insert_query = User::find_by_sql("INSERT INTO `voting_system` SET  registrar='$session_student', rnumber='$user_rnumber', full_name='$user_full_name', post='$post', date=NOW()");

                if($insert_query){

                     ?>
                   <script type="text/javascript">
                alert("Registration Successful");

                window.location="voting_system.php";
                </script>
                <?php

                die();

                   }else{

                    ?> 
                    <script type="text/javascript">
                    alert("Unable to Register user at this moment");
                    window.location="voting_system.php";
                    </script>

                    <?php


                }
        }
        }
        }
?>