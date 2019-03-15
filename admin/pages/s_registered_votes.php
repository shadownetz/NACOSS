<!-- Header -->
<?php include('includes/header.php'); ?>
<?php
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

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form">
            <!-- <div class="container-fluid"> -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="page-header" style="text-transform:capitalize">registered candidates for election</h2>
                        
                        <div class="nacoss-all-discuss nacoss-my-discuss">
        <div class="row">
                <div class="col-md-12">
                    <div class="panel document-panel">
                        <!-- /.panel-heading -->

<?php
$query = User::find_by_sql("SELECT * FROM nacoss.voting_system ORDER BY post");
#$result = mysqli_num_rows($query);
$counter_candidate=1;
if(mysqli_num_rows($query)>0){
?>
                            <table class="table table-responsive" style="text-align:left">
   
                                <thead class="panel-heading">
                                    <tr>
                                        <th>#</th>
                                        <th>Candidate's Name</th>
                                        <th>Reg No:</th>
                                        <th>Post</th>
                                        <th>Registrar</th>
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
    $registrar = $row['registrar'];
    $user_fullname = "";
    if($registrar != ""){
    $fetch_registra_query = User::find_by_sql("SELECT fname,lname FROM nacoss.all_students WHERE rnumber = '$registrar'");
    while($r=mysqli_fetch_assoc($fetch_registra_query)){
        $user_fname = $r["fname"];
        $user_lname = $r["lname"];
        $user_fullname = $user_fname." ".$user_lname;
    }
}
  ?> 
                               
                                    <tr>
                                        <td><?php echo $counter_candidate;?></td>
                                        <td><?php echo $candidate_full_name; ?></td>
                                        <td><?php echo $candidate_rnumber; ?></td>
                                        <td><?php $value = chechPost($candidate_post); echo $value; ?></td>
                                        <td><?php echo $user_fullname; ?></td>
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
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>