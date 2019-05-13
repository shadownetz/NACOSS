<div class="col-md-4 col-sm-3 col-xs-12">
<div class="blog-page area-padding" style="padding-bottom:0">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-3 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
<?php 
$explode = explode(' ', $discussion_topic);
$count = count($explode);
for($x=0; $x<$count; $x++){                    
$query = User::find_by_sql("SELECT topic, id FROM discussions WHERE topic LIKE '%$explode[$x]%'");
    while($c=mysqli_fetch_assoc($query)){
        $related_topics[] = $c['topic'];
        $realated_ids[] = $c['id'];
    }

}
if(mysqli_num_rows($query)>1){
?>
<h4>Related groups</h4>
<div class="recent-post">
<?php
}else{
  ?>
  <div class="recent-post">
  <?php
  }
$new_id_array = array();
$num = count($realated_ids);
    for($y=0; $y<$num; $y++){
        $new_id = $realated_ids[$y];
        if(!in_array($new_id, $new_id_array)){
            array_push($new_id_array, $new_id);
        }
    }
$newid_array = array();
    for($a=0; $a<count($new_id_array); $a++){
        $newid = $new_id_array[$a];
        if($discussion_id != $newid){
            array_push($newid_array, $newid);
        }
    }
//echo $num;
//print_r($new_id_array);
//print_r($realated_ids);
//print_r($related_topics);
        $explode = uniqid('', true);
        $explodeid = explode('.', $explode);
        $new_end = end($explodeid);
        $new_start = $explodeid[0]; 
                    
                    
for($z=0; $z<count($newid_array); $z++){
    $result_set = User::find_by_sql("SELECT * FROM discussions WHERE id = '$newid_array[$z]' ");                
    while($row=mysqli_fetch_assoc($result_set)){
        

        if(isset($_SESSION['id'])){
                //initialize variables here
                require_once('../../admin/pages/includes/php/assign_variables.php');
                $find_my_discussion_id = User::find_by_sql("SELECT * FROM nacoss.joined_members WHERE rnumber='$rnumber' GROUP BY discussion_id");
                $counter = 1;
                while($rw=mysqli_fetch_assoc($find_my_discussion_id)){
                    $my_discussion_id[] = $rw['discussion_id'];
                }
                    $_SESSION['id_array'] = $my_discussion_id;
            }//SET OTHER LOCATIONS  
                    
            if(isset($_SESSION['id'])){
                 if(in_array($newid_array[$z], $my_discussion_id)){  
?>
                  <!-- start single post -->
                  <div class="recent-single-post" style="height:100px">
                    <div class="post-img">
                      <a href="#">
												   <img src="../img/<?php echo $row['display_picture']; ?>" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="?omega=none&status=zigma&alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$newid_array[$z].$new_start;?>"><?php echo $row['topic']; ?></a></p>
                    </div>
                  </div>
             <?php
                      //$_SESSION['discussion_member'] = $discussion_id;
                  }else{
                      ?>
                   <!-- start single post -->
                  <div class="recent-single-post" style="height:100px">
                    <div class="post-img">
                      <a href="#">
												   <img src="../img/<?php echo $row['display_picture']; ?>" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="?omega=none&status=delta&alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$newid_array[$z].$new_start;?>"><?php echo $row['topic']; ?></a></p>
                    </div>
                  </div> 
            <?php  
                  } 
                $_SESSION['check'] = "no";
            }else{
                $_SESSION['check'] = "yes";
                ?>
                 <!-- start single post -->
                  <div class="recent-single-post" style="height:100px">
                    <div class="post-img">
                      <a href="#">
												   <img src="../img/<?php echo $row['display_picture']; ?>" alt="">
												</a>
                    </div>
                    <div class="pst-content">
                      <p><a href="?omega=none&status=alpha&alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$newid_array[$z].$new_start;?>"><?php echo $row['topic']; ?></a></p>
                    </div>
                  </div>
                    <?php  
            }
            ?>
                    
<?php } } ?>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>
            <!-- <div class="single-blog-page">
              <div class="left-blog">
                <h4>categories</h4>
                <ul>
                  <li>
                    <a href="#">Portfolio</a>
                  </li>
                  <li>
                    <a href="#">Project</a>
                  </li>
                  <li>
                    <a href="#">Design</a>
                  </li>
                  <li>
                    <a href="#">wordpress</a>
                  </li>
                  <li>
                    <a href="#">Joomla</a>
                  </li>
                  <li>
                    <a href="#">Html</a>
                  </li>
                  <li>
                    <a href="#">Website</a>
                  </li>
                </ul>
              </div>
            </div> -->
            <!-- <div class="single-blog-page">
              <div class="left-blog">
                <h4>archive</h4>
                <ul>
                  <li>
                    <a href="#">07 July 2016</a>
                  </li>
                  <li>
                    <a href="#">29 June 2016</a>
                  </li>
                  <li>
                    <a href="#">13 May 2016</a>
                  </li>
                  <li>
                    <a href="#">20 March 2016</a>
                  </li>
                  <li>
                    <a href="#">09 Fabruary 2016</a>
                  </li>
                </ul>
              </div>
            </div> -->
            <!-- <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>popular tags</h4>
                  <ul>
                    <li>
                      <a href="#">Portfolio</a>
                    </li>
                    <li>
                      <a href="#">Project</a>
                    </li>
                    <li>
                      <a href="#">Design</a>
                    </li>
                    <li>
                      <a href="#">wordpress</a>
                    </li>
                    <li>
                      <a href="#">Joomla</a>
                    </li>
                    <li>
                      <a href="#">Html</a>
                    </li>
                    <li>
                      <a href="#">Masonry</a>
                    </li>
                    <li>
                      <a href="#">Website</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <!-- End left sidebar -->
      </div>
    </div>
  </div>
        </div>