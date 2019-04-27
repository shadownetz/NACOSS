<?php 
require_once ("../../../../includes/initialize.php");

    $user_rnumber = $_SESSION['user_rnumber'];
    $user_full_name = $_SESSION['user_full_name'];
    $post = $_SESSION['user_post'];
    $registrar = $_SESSION['rnumber'];

    $update_query = User::update_candidate_query($user_rnumber, $user_full_name, $post, $registrar);

if($update_query){
   ?>
       <script type="text/javascript">
    alert("Registration Updated Successful");

    window.location="../../voting_system.php";
    </script>
    <?php

     die();
}else{
   ?>
       <script type="text/javascript">
    alert("Registration Update Failed");

    window.location="../../voting_system.php";
    </script>
    <?php

     die();   
}
?>