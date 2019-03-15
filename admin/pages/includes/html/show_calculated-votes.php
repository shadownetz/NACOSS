<?php
require_once ("../../includes/initialize.php");

$session_student = $_SESSION['rnumber'];

function chechPost($post=""){
    if($post=='president'){
        $value = 'President';
    }else if($post=='vice_president'){
        $value = 'Vice President';
    }else if($post=='secretary_general'){
        $value = 'Secretary General';
    }else if($post=='financial_secretary'){
        $value = 'Financial Secretary';
    }else if($post=='social_1'){
        $value = 'Director Of Social I';
    }else if($post=='social_2'){
        $value = 'Director Of Social II';
    }else if($post=='software_1'){
        $value = 'Director Of Software I';
    }else if($post=='software_2'){
        $value = 'Director Of Software II';
    }else if($post=='academics_1'){
        $value = 'Director Of Academics I';
    }else if($post=='academics_2'){
        $value = 'Director Of Academics II';
    }else if($post=='librarian'){
        $value = 'Librarian';
    }else if($post=='provost'){
        $value = 'Provost';
    }else{
        $value = "";
    }
    return $value;
}

?>

<div class="container">
        <div class="row">
                <div class="col-md-9  nacoss-all-discuss nacoss-my-discuss">
                    <div class="panel document-panel">
                        <!-- /.panel-heading -->
                        <!-- <div class="panel-body"> -->

<?php
$query = User::find_by_sql("SELECT * FROM nacoss.voting_system ORDER BY post");
$result = mysqli_num_rows($query);
$counter_candidate=1;
if(!empty($result)){
?>
                            <table class="table table-responsive">
   
                                <thead class="panel-heading">
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Reg No:</th>
                                        <th>Post</th>
                                        <th>Eligibility</th>
                                        <th>Ineligibility</th>
                                    </tr>
                                </thead>
                                 <tbody class="panel-body">        
<?php
}
while ( $row = mysqli_fetch_array($query) ) {
    $candidate_full_name = $row['full_name'];
    $candidate_rnumber = $row['rnumber'];
    $candidate_post = $row['post']; 
    $candidate_eligibility = $row['eligibility']; 
    $candidate_ineligibility = $row['ineligibility']; 
  ?> 
                               
                                    <tr>
                                        <td><?php echo $counter_candidate;?></td>
                                        <td><?php echo $candidate_full_name; ?></td>
                                        <td><?php echo $candidate_rnumber; ?></td>
                                        <td><?php $value = chechPost($candidate_post); echo $value; ?></td>
                                        <td><?php echo $candidate_eligibility; ?></td>
                                        <td><?php echo $candidate_ineligibility; ?></td>
                                    </tr>
                            
                                
	<?php
		$counter_candidate++;
}
    ?>

                                </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>