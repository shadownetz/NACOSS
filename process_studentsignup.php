<?php
require_once ("includes/initialize.php");
if(isset($_POST['signup'])){

    $uname = $database->escape_value(htmlentities($_POST ['uname']));
    $fname = $database->escape_value(htmlentities($_POST ['fname']));
    $lname = $database->escape_value(htmlentities($_POST ['lname']));
    $semail = $database->escape_value(htmlentities($_POST ['semail']));
    $level = $database->escape_value(htmlentities($_POST ['level']));
    $pnumber = $database->escape_value(htmlentities($_POST ['pnumber']));
    $rnumber = $database->escape_value(htmlentities($_POST ['rnumber']));
    $gender = $database->escape_value(htmlentities($_POST ['gender']));
    $pword = $database->escape_value(htmlentities($_POST ['pword']));
    $repass = $database->escape_value(htmlentities($_POST ['repass']));
    $skills = $database->escape_value(htmlentities($_POST ['skills']));
    $aim = $database->escape_value(htmlentities($_POST ['aim']));
    
    
    
    function generate_unique_id(){
        $explode = uniqid('', true);
        $exp = explode('.', $explode);
        $unique_id = end($exp);
        return $unique_id;
    }
    
    $go = false;
    while($go == false){
        $unique_id = generate_unique_id();
        $query = User::find_by_sql("SELECT unique_id FROM all_students WHERE unique_id='$unique_id'");
        if(mysqli_num_rows($query)>0){
            $unique_id = generate_unique_id();
        }else{
            $go = true;
        }
    }
	if( strlen($pword) < 6  )
   { ?>
   <script type="text/javascript">
alert("Passwords must be greater than 6 characters.");
window.location="sign-up.php";
</script>
<?php
die();

   }
	if( $pword !=$repass  )
   { ?>
   <script type="text/javascript">
alert("Passwords are not identical.");
window.location="sign-up.php";
</script>
<?php
die();
   }
   	
	$query = "SELECT * ";
$query .= "FROM all_students ";
$query .= "WHERE semail = '$semail' ";         
          //$index = 0;
 $mresult = $database->query($query);

 if(mysqli_num_rows($mresult)> 0)
   {

	?>
	<script type="text/javascript">
alert("School Email address has already been used.");
window.location="account.php";
</script>
<?php
		
        redirect_to('account.php');
die();
			}     
    	$query = "SELECT * ";
$query .= "FROM all_students ";
$query .= "WHERE uname = '$uname' ";         
          //$index = 0;
 $mresult = $database->query($query);

 if(mysqli_num_rows($mresult)> 0)
   {

	?>
	<script type="text/javascript">
alert("Username has already been used.");
window.location="account.php";
</script>
<?php
		
        redirect_to('account.php');
die();
			}
    
    	$query = "SELECT * ";
$query .= "FROM all_students ";
$query .= "WHERE rnumber = '$rnumber' AND verified = '1' ";
 $mresult = $database->query($query);

 if(mysqli_num_rows($mresult)> 0)
   {

	?>
	<script type="text/javascript">
alert("Reg Number has already been used.");
window.location="account.php";
</script>
<?php
		
        redirect_to('account.php');
die();
			}
    
    
$result_set = User::create_student($uname, $fname, $lname, $semail, $level, $pnumber, $rnumber, $gender, $pword, $unique_id, $skills, $aim);
   
       		if ($result_set){
                User::mailer($uname, $pword, $semail, $unique_id);
			?>
	<script type="text/javascript">
alert("Registration Successful, A verification message is sent to your school email address for you to verify before you can login!");
window.location="account.php";
</script>

<?php
   }
}
?>