<?php
require_once("includes/initialize.php");
if(isset($_POST['signin'])){
        if(isset($_POST['signin'])){
            
        $uname  = $database->escape_value($_POST ['uname']);
		$pword = $database->escape_value($_POST ['pword']);
       
		
	 $epassword = md5($pword);;
$result_set = User::student_login($uname, $epassword);
while ( $row = $database->fetch_array($result_set)) {
    $session->login($row['id']);
    $_SESSION['id'] = $row['id'];
if($row['user_type'] == "user"){
    $_SESSION['user_location'] = "user";
    $_SESSION['my_portal_location'] = 'user/pages/dashboard.php';
    redirect_to("user/pages/dashboard.php");
}else if($row['user_type'] == "admin"){
    $_SESSION['user_location'] = "admin";
    $_SESSION['my_portal_location'] = 'admin/pages/dashboard.php';
    redirect_to("admin/pages/dashboard.php?admin_test");
}if($row['user_type'] == "super_admin"){
    $_SESSION['user_location'] = "super_admin";
    $_SESSION['my_portal_location'] = 'super_admin/pages/dashboard.php';
    redirect_to("super_admin/pages/dashboard.php");
}

die();
}}else{
    redirect_to("account.php"); 
                }

		
		?>	

   <script type="text/javascript">
alert("Username or password is incorrect or Account yet to be activated by the Admin.");

window.location="account.php";
</script>
<?php

die();
            } 
        

?>
		