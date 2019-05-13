  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Recent News</h2>
            </div>
          </div>
        </div>
        <div class="row">
 <?php
  $query_news = User::find_by_sql("SELECT * FROM nacoss_news WHERE status='1' ORDER BY id DESC LIMIT 3");
  if(mysqli_num_rows($query_news)>0){
    $index = 1;
    while($news_rows=mysqli_fetch_assoc($query_news)){
      $id = $news_rows["id"];
      $title = $news_rows["title"];
      $picture = $news_rows["picture"];
      $date = date('jS F, Y | h:ia', strtotime($news_rows["date"]));

      $trunc = wordwrap($news_rows["details"], 120, "[{@}]");
      $exp = explode("[{@}]",$trunc);
      $detail = $exp[0]."...";
        
    $explode = uniqid('', true);
    $exp = explode('.', $explode);
    $end = end($exp);
    $start = $exp[0];
            
  ?>
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
            <a href="news-details.php?news_token=<?php echo $end.$id.$start; ?>&tk=<?php echo $start; ?>&key=<?php echo $end; ?>">
              <div class="single-blog-img news-index" style='background:url("newsphotos/<?php echo $picture; ?>") no-repeat center center;background-size:cover'>
              </div>
              </a>
              <div class="blog-meta">
                <!-- <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">13 comments</a>
									</span> -->
                <span class="date-type">
										<i class="fa fa-calendar"></i><?php echo $date; ?>
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="news-details.php?news_token=<?php echo $end.$id.$start; ?>&tk=<?php echo $start; ?>&key=<?php echo $end; ?>"><?php echo $title; ?></a>
									</h4>
                <p>
                <?php echo $detail; ?>
                </p>
              </div>
              <span>
									<a href="news-details.php?news_token=<?php echo $end.$id.$start; ?>&tk=<?php echo $start; ?>&key=<?php echo $end; ?>" class="ready-btn">Read more</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
  <?php  
      }
    }else{
      echo('
      <div class="col-md-12" style="text-align:center;color:rgb(50,130,20);font-weight:bold">No News available at this time !</div>
      ');
    }
  ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->