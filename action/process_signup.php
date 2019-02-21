<?php
require_once ("includes/initialize.php");

    $uname = $_POST ['uname'];
    $fname = $_POST ['fname'];
    $lname = $_POST ['lname'];
    $oname = $_POST ['oname'];
    $semail = $_POST ['semail'];
    $oemail = $_POST ['oemail'];
    $level = $_POST ['level'];
    $gender = $_POST ['gender'];
    $pnumber = $_POST ['pnumber'];
    $rnumber = $_POST ['rnumber'];
    $pword = $_POST ['pword'];
    $repass = $_POST ['repass'];
    
	if( strlen($pword) < 6  )
        { ?>
        <script type="text/javascript">
        alert("Passwords must be greater than 6 characters.");
        window.location="signin.php";
        </script>
        <?php
        die();

        }
	if( $pword !=$repass  )
        { ?>
        <script type="text/javascript">
        alert("Passwords are not identical.");
        window.location="signin.php";
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
        window.location="signin.php";
        </script>
        <?php
                
                redirect_to(signin.php);
        die();
        }
        
        
        $query = "SELECT * ";
        $query .= "FROM all_students ";
        $query .= "WHERE oemail = '$oemail' ";         
              //$index = 0; 
        $mresult = $database->query($query);
    
        if(mysqli_num_rows($mresult)> 0)
            {
    
                ?>
                <script type="text/javascript">
            alert("Other Email address has already been used.");
            window.location="signin.php";
            </script>
            <?php
                    
                    redirect_to(signin.php);
            die();
            }        

$result_set = User::create_student($uname, $pword, $fname, $lname, $oname, $semail, $oemail, $pnumber, $rnumber, $level, $gender);
   
    if ($result_set){ 		
		?>
            <script type="text/javascript">
        alert("Registration Successful. The student can now log into the system");
        window.location="signin.php";
            </script>

        <?php
        }
?>