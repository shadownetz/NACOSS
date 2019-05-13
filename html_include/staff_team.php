  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
<?php
                
$query = User::find_by_sql("SELECT * FROM nacoss.staff WHERE status = '1'");
if(mysqli_num_rows($query)>0){                       
?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Current Staffs</h2>
          </div>
        </div>
      </div>
      <!-- Row -->
      <div class="row">
        <div class="team-top">
<?php
    while ( $row = mysqli_fetch_array($query) ) {
                $staff_id =$row['id'];
                $staff_fullname = $row['fullname'];
                $staff_phone = $row['phone'];
                $staff_email = $row['email'];
                $staff_cert = $row['cert'];
                $staff_office = $row['office'];
                $staff_courses = $row['courses'];
                $staff_picture = $row['picture'];
?>      
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img" style='background:url("staffphotos/<?php echo $staff_picture; ?>") no-repeat center center;background-size:cover'>
                <div class="team-social-icon text-center">
                  <!-- <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul> -->
                </div>
              </div>
              <div class="team-content text-center">
              <h4><?php echo $staff_fullname; ?></h4>
                <p><?php echo $staff_cert; ?></p>
                <div style="text-align:left;padding:2%">
                <h6>Office No:&nbsp;<span style="font-weight:400;"><?php echo $staff_office; ?></span></h6>
                <h6>Courses:&nbsp;<span style="font-weight:400;"><?php echo $staff_courses; ?></span></h6>
                <h6>Tel No:&nbsp;<span style="font-weight:400;"><?php echo $staff_phone; ?></span></h6>
                <h6>Email Address:&nbsp;<span style="font-weight:400;"><?php echo $staff_email; ?></span></h6>
              </div>
              </div>
            </div>
          </div>
          <!-- End column -->
<?php
    }
?>      
            
        </div>
      </div>
      <!-- End Row -->
<?php
}else{
  echo('<div class="col-md-12 text-center"><em>No Staff Recorded Yet!</em></div>');
}
?>
    </div>
  </div>
  <!-- End Team Area -->