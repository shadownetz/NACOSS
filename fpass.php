<?php include('html_include/fpass_header.php'); ?>

<!--Embedded Custom Style -->
<style>
#nacoss{display:none}
</style>
<div class="row fpass_block">
    <div class="overlay"></div>
    <div class="col-md-7 col-md-offset-3 col-sm-12 fpass_body">
        <form role="form" enctype="multipart/form-data" method="post">
            <label>School Email or Unique ID</label>
            <input type="text" placeholder="Enter email or ID Here !" name="fpass" class="form-control f-input">
            <button type="submit" class="nacoss-btn f-btn b-wh" name="re_fpass">Request New Password</button>
        </form>
    </div>
</div>
<?php include('html_include/footer.php'); ?>