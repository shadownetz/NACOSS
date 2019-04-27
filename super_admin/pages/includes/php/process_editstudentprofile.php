<?php
require_once ("../../includes/initialize.php");
    

if(isset($_POST['update'])){
    
    $fileName = $_FILES['file']['name'];
		$fileType = $_FILES['file']['type'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','jpg','png');
		if (!in_array($fileActualExt, $allowed)){
			echo "<script> alert('File Type Not Allowed!'); window.location='profile.php'; </script>";
        die();
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
            
            move_uploaded_file($_FILES["file"]["tmp_name"],"../../photos/".$main_picture);
            
    $fname = $database->escape_value($_POST ['fname']);
    $lname = $database->escape_value($_POST ['lname']);
    $oname = $database->escape_value($_POST ['oname']);
    $oemail = $database->escape_value($_POST ['oemail']);
    $level = $database->escape_value($_POST ['level']);
    $pnumber = $database->escape_value($_POST ['pnumber']);
    $gender = $database->escape_value($_POST ['gender']);
    $skills = $database->escape_value($_POST ['skills']);
    $aim = $database->escape_value($_POST ['aim']);
   


$result_set = User::edit_student_profile($fname, $lname, $oname, $oemail, $level, $pnumber, $gender, $skills, $aim, $session->user_id, $main_picture);

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
    

}



?>