<div id="home" class="slider-area">
    <div class="owl-carousel owl-theme">
<?php
        $query = User::find_by_sql("SELECT * FROM gallery WHERE status='1' LIMIT 1");
        while($row=mysqli_fetch_assoc($query)){
            $num_of_displayed_images = $row['no_of_images'];
        $x = 1;
        while($x<=$num_of_displayed_images){
            $active_image = $row["image$x"];
            $active_imagepath = "galleryphotos/".$active_image;
            $active_message = $row["imageMessage$x"];


            if(!empty($active_image) && !empty($active_message)){
                if(empty($active_image)){
                    $active_imagepath = "galleryphotos/nacoss.png";
                }
?>    
    <div class="item">
        <img src="<?php echo $active_imagepath; ?>" alt="'">
        <div class="slider-txt-block wow slideInUp">
        <p class="text-center"><?php echo $active_message; ?></p>
            </div>
        
   </div>
   <?php                
            }
        $x++;
        }
        }
?>
</div>
</div>