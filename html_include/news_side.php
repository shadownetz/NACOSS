<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <!-- <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                </div>
              </form> -->
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
<?php
$count_all = User::find_by_sql("SELECT id FROM nacoss_news WHERE status='1'");
    if(mysqli_num_rows($count_all)>0){
        $total_count = mysqli_num_rows($count_all);
    }
                
    if(isset($_SESSION['limit'])){
        $limit = $_SESSION['limit'];
    }else{
        $limit = 10;
        $_SESSION['limit'] = $limit;
    }
if(isset($_POST['more_news'])){
    $limit = 10 + $_SESSION['limit'];
    $_SESSION['limit'] = $limit;
}
?> 
<?php
$query = User::find_by_sql("SELECT * FROM nacoss_news WHERE status='1' ORDER BY id DESC LIMIT $limit");
  if(mysqli_num_rows($query)>0){
      $remaining = $total_count - $limit;
      if($remaining > 0){
          if($remaining >= 10){//continuue
              $limit = 10 + $limit;
              $more = true;
          }else{//last__ends
              $more = false;
          }
      }else{//last__ends
         $more = false; 
      }
?>
              <!-- recent start -->
              <form action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="POST">
              <div class="left-blog">
                <h4>recent news</h4>
                <div class="recent-post">
                  <!-- start single post -->                   
<?php
      while($rows=mysqli_fetch_assoc($query)){
          $id = $rows["id"];
          $title = $rows["title"];
          $picture = $rows["picture"];
          
          $trunc = wordwrap($title, 120, "[{@}]");
          $exp = explode("[{@}]",$trunc);
          $title_detail = $exp[0].".";
          
          $explode = uniqid('', true);
          $exp = explode('.', $explode);
          $end = end($exp);
          $start = $exp[0];
?>
                  <div class="recent-single-post">
                    <div class="post-img">
												   <img src="newsphotos/<?php echo $picture; ?>" alt="">
                    </div>
                    <div class="pst-content">
                      <p><a href="?news_token=<?php echo $end.$id.$start; ?>&tk=<?php echo $start; ?>&key=<?php echo $end; ?>"> <?php echo $title; ?></a></p>
                    </div>
                  </div>
                  <!-- End single post -->
<?php
      }
?> 
                </div>
                  
            <?php if($more == true){ ?>      
              <div class="col-md-12 text-center"><button type="submit" name="more_news" class="ready-btn">view more <i class="fa fa-arrow-circle-down"></i></button></div>
            <?php } ?>      
                  
              </div>
              </form>
<?php
  }
?>                
              <!-- recent end -->
            </div>
          </div>
        </div>


        </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>