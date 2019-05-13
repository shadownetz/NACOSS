<?php require_once("includes/initialize.php"); ?>
<?php include('html_include/faq-nav.php'); ?>
<!-- Faq area start -->
<div class="faq-area area-padding">
      <div class="row faq-bg">
      <div style="position:absolute;height:125px;width:100%;background:rgba(0,0,0,0.5);right:0"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center" >
            <h2 style="color:#fff;text-shadow: 2px 2px 2px #000;padding-top:15px">FAQs</h2>
          </div>
        </div>
      </div>
      <div class="row" style="height:500px">
        <div class="col-md-12 col-sm-12 col-xs-12 faq-menu">
          <!-- Faq Topics list -->
          <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 faq-groups">
          <?php 
$_SESSION['id_array'] = array(0);
            // function cal($value=""){
            //     $split = str_split($value);
            //     $count = count($split);
            //     $val = $split[0];
            //     if($count==3){ $num = $val.'h'; }
            //     elseif($count==4){ $num = $val.'k'; }
            //     elseif($count==5){ $val2 = $split[1]; $num = $val.$val2.'k'; }
            //     elseif($count==6){ $val2 = $split[1]; $val3 = $split[2]; $num = $val.$val2.$val3.'k'; }else{$num = $value;}
            //     return $num;
            // }
            // function star($num=""){
            //     if($num < 100){ $progress = 1;}elseif($num >= 100 && $num < 200){$progress = 2;}elseif($num >= 200 && $num < 300){$progress = 3;}elseif($num >= 300 && $num < 400){$progress = 4;}elseif($num >= 400){ $progress = 5;}else{$progress = 0;}
            //     return $progress;
            // }
            if(isset($_SESSION['id']) /*&& $_SESSION['user_location'] == "super_admin"*/){
                //initialize variables here
                require_once('admin/pages/includes/php/assign_variables.php');
                $find_my_discussion_id = User::find_by_sql("SELECT * FROM nacoss.joined_members WHERE rnumber='$rnumber' GROUP BY discussion_id");
                $counter = 1;
                while($rw=mysqli_fetch_assoc($find_my_discussion_id)){
                    $my_discussion_id[] = $rw['discussion_id'];
                }
                    $_SESSION['id_array'] = $my_discussion_id;
            }//SET OTHER LOCATIONS  
     $result_set = User::find_by_sql("SELECT * FROM discussions");
     if(mysqli_num_rows($result_set)>0){
      while ( $row = mysqli_fetch_array($result_set) ) {

            $discussion_id =$row['id'];
            $discussion_topic =$row['topic'];
            $discussion_type =strtoupper($row['discussion_type']);
            $discussion_aim = $row['discussion_aim'];
            $discussion_creator =$row['rnumber'];
            $discussion_date =$row['date'];
                $members_query = User::find_by_sql("SELECT discussion_id FROM joined_members WHERE discussion_id = '$discussion_id'");
                    $no_of_members = mysqli_num_rows($members_query);
                $comments_query = User::find_by_sql("SELECT discussion_id FROM  discussion_logs WHERE discussion_id = '$discussion_id'");
                    $no_of_comments = mysqli_num_rows($comments_query);
                $progress = star($no_of_members);
                $num_of_users = cal($no_of_members);
                $num_of_comments = cal($no_of_comments);
            
            
            
            $creator_query = User::find_by_sql("SELECT fname, lname, uname FROM all_students WHERE rnumber = '$discussion_creator' LIMIT 1");
            while($r=mysqli_fetch_assoc($creator_query)){
                $creator = $r['fname'].' '.$r['lname'].'('.$r['uname'].')';
            }
            
        $D_date = date('dS F, Y', strtotime($discussion_date));
        $D_time = date('h:i:s a', strtotime($discussion_date));
            
        $explode = uniqid('', true);
        $explodeid = explode('.', $explode);
        $new_end = end($explodeid);
        $new_start = $explodeid[0]; 
            
            /*if(in_array($my_discussion_id, $discussion_id)){
                
            }*/
            
 ?>              
            <!--Discussion group -->
            <div class="row">
            <div class="col-md-1 col-sm-3 col-xs-3 faq-groups-icn"><i class="fa fa-users"></i> (<?php echo $num_of_users; ?>)</div>
            <div class="col-md-1 col-sm-3 col-xs-3 faq-groups-icn"><i class="fa fa-comment"></i> (<?php echo $num_of_comments; ?>)</div>
            <div class="col-md-1 col-sm-3 col-xs-3 faq-groups-icn"><i class="fa fa-star"></i> (<?php  echo $progress; ?>)</div>
            <div class="col-md-9 faq-groups-txt">
            <!--<a href="faqs/dev@hub/index.php">-->
              <div class="col-md-12 col-sm-12 col-xs-12 head"># <?php echo $discussion_topic;?></div>
              <div class="col-md-12 col-sm-12 col-xs-12 body">
                <p>
                    <b>TOPIC:</b>&nbsp; <?php echo $discussion_aim; ?>&nbsp;
                    
                    
                    <?php
            if(isset($_SESSION['id'])){
                /*//initialize variables here
                require_once('admin/pages/includes/php/assign_variables.php');
                $find_my_discussion_id = User::find_by_sql("SELECT * FROM nacoss.joined_members WHERE rnumber='$rnumber' GROUP BY discussion_id");
                $counter = 1;
                while($rw=mysqli_fetch_assoc($find_my_discussion_id)){
                    $my_discussion_id = $rw['discussion_id'];*/
                  if(in_array($discussion_id, $my_discussion_id)){      
            ?>
                    <div class="faq-flag"><a href="faqs/dev@hub/?status=zigma&alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$discussion_id.$new_start;?>" style="color: green;"><b class="fa fa-sign-in fa-fw"></b>View</a></div>
                <?php
                      //$_SESSION['discussion_member'] = $discussion_id;
                  }else{
                      ?>
                    <div class="faq-flag"><a href="faqs/dev@hub/?status=delta&alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$discussion_id.$new_start;?>" style="color: green;"><b class="fa fa-user-plus fa-fw"></b>Join</a></div>
                    <?php  
                  } 
                $_SESSION['check'] = "no";
            }else{
                $_SESSION['check'] = "yes";
                ?>
                    <span class="faq-flag"><a href="faqs/dev@hub/?status=alpha&alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$discussion_id.$new_start;?>" style="color: green;"><b class="fa fa-user-plus fa-fw"></b>Check-In</a></span>
                <?php  
            }
            ?>
                  </p>
              </div>
            <!--</a>-->
            </div>
          </div><hr />
              <?php } ?>
              <?php }else{ echo "<script>alert('No discussions created!'); window.location='index.php'; </script>"; } ?>
          <!-- End of Discussion group-->

          
          </div>
          <!-- End of topic list -->
        </div>
        
      </div>
      <!-- end Row -->
  </div>
  <!-- End Faq Area -->

   <!-- Start Footer bottom Area -->
   <footer style="">

    <div class="footer-area-bottom faq">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>NACOSSUNN</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Powered by <strong><a href="https://sdc.com/">SDC Group</a></strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>