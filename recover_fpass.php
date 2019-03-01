<?php include('html_include/fpass_header.php'); ?>

<!--Embedded Custom Style -->
<style>
#nacoss{display:none}
</style>
<div class="row fpass_block">
    <div class="overlay"></div>
    <div class="col-md-7 col-md-offset-3 col-sm-12 fpass_body">
        <form role="form" enctype="multipart/form-data" method="post" class="recover-f">
            <label>Enter New Password</label>
            <input type="password" placeholder="Enter Password" name="pass"  class="form-control f-input">
            <label style="margin-top:2%">Re-enter Password</label>
            <input type="password" placeholder="Re-enter Password" name="re-pass"  class="form-control f-input">
            <button type="submit" class="nacoss-btn f-btn" name="update_pass">Update</button>
        </form>
    </div>
</div>
<?php include('html_include/footer.php'); ?>