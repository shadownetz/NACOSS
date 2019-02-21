<?php
require_once ("../../includes/initialize.php");
    

if(isset($_POST['update'])){
    
    $fname = $database->escape_value($_POST ['fname']);
    $lname = $database->escape_value($_POST ['lname']);
    $oname = $database->escape_value($_POST ['oname']);
    $oemail = $database->escape_value($_POST ['oemail']);
    $level = $database->escape_value($_POST ['level']);
    $pnumber = $database->escape_value($_POST ['pnumber']);
    $gender = $database->escape_value($_POST ['gender']);
    //$pword = $database->escape_value($_POST ['pword']);
    //$repass = $database->escape_value($_POST ['repass']);
    $bio = $database->escape_value($_POST ['bio']);
   


$result_set = User::edit_student_profile($fname, $lname, $oname, $oemail, $level, $pnumber, $gender, /*$pword,*/ $bio, $session->user_id);

if ($result_set){
	
	 ?>
   <script type="text/javascript">
alert("Changes Saved successfully");

window.location="profile.php";
</script>
<?php

die();
   
   }else{

?> 
<script type="text/javascript">
alert("Unable to Save Changes");
window.location="profile.php";
</script>

<?php
}
}


if(isset($_POST['upload'])){
    
$file = $_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];

$folder ="../photo/";
$new_size =  $file_size/1024;
$new_file_name = strtolower($file);
$final_file = str_replace(' ', '-', $new_file_name);

move_uploaded_file($file_loc, $folder.$final_file);
    
    $result_set = User::edit_student_profile_picture($session->user_id, $final_file);
    
    
    if ($result_set){
	
	 ?>
   <script type="text/javascript">
alert("Changes Saved successfully");

window.location="profile.php";
</script>
<?php

die();
   
   }else{

?> 
<script type="text/javascript">
alert("Unable to Save Changes");
window.location="profile.php";
</script>

<?php
}
}



?>