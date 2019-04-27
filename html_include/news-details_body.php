<?php
$end = $database->escape_value($_GET['key']);
$start = $database->escape_value($_GET['tk']);
$news_token = $database->escape_value($_GET['news_token']);

$explode1 = explode($end, $news_token);
$explode2 = explode($start, $explode1[1]);
$news_id = $explode2[0];

if(isset($_SESSION['news_id'])){
    if($news_id != $_SESSION['news_id']){
        unset($_SESSION['limit']);
        $_SESSION['news_id'] = $news_id;
    }
}else{
    $_SESSION['news_id'] = $news_id;
}
if($_SESSION['news_id'] != $news_id){
    unset($_SESSION['limit']);
}
?>
<?php
$query_news = User::find_by_sql("SELECT * FROM nacoss_news WHERE status='1' AND id='$news_id' LIMIT 1");
  if(mysqli_num_rows($query_news)>0){
      while($news_rows=mysqli_fetch_assoc($query_news)){
          $title = $news_rows["title"];
          $picture = $news_rows["picture"];
          $details = $news_rows["details"];
          $date = date('F j, Y', strtotime($news_rows["date"]));
      }
      
?>
<!-- Start single blog -->
<div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                  <img src="newsphotos/<?php echo $picture; ?>" alt="" />
                </div>
                <div class="post-information">
                  <h2><?php echo $title; ?></h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                    <span><i class="fa fa-clock-o"></i> <?php echo $date; ?></span>
                  </div>
                  <div class="entry-content">
                    <p>
                    <?php echo $details; ?>  
                    </p>
                  </div>
                </div>
              </article>
              <div class="clear"></div>
            </div>
          </div>
        </div>
<?php
  }else{
      echo "<script> alert('Content unavailable!'); window.location='news.php'; </script>";
  }
?>