<?php include_once('../html_include/faq-nav.php'); ?>
<style>
#nacoss{display:none}
</style>

<div class="row" style="padding-top:3%">
                  <!-- Start Faq -->
          <?php include_once('../html_include/faqs-head.php'); ?>
            <?php include_once('../html_include/faqs-body.php'); ?> 
            </div>
          </div>

         <!--Start Side news -->
          <?php include_once('../html_include/faqs-side.php'); ?>
          <!--End Side news-->

<!-- End Faq-->
        </div>

         <?php include('../html_include/footer.php'); ?>
         <script>
        /*function moveWin(){
            window.scroll(0, 10000);
            setTimeout('moveWin();', 100);
        }*/
        $(function(){
          setInterval(function(){
                $("#messageLogs").load("messageLogs.php");
            }, 1000);
        })
       
    </script>