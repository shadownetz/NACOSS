
        <div class="row">

<!-- Start Signin rap -->
<div class="col-md-6 col-sm-6 col-xs-12">

    <div class="col-sm-12 div-center">
        <span >
            <img class="animated zoomIn" src="images/Login-Text.png" width="100%" height="100%">
        </span>
    </div>

</div>
<!-- End Signin rap -->

<!-- Start  contact -->
<div class="col-md-6 col-sm-6 col-xs-12">
  <div class="form contact-form">
  <h3 style="text-align: center;">Admin Login</h3>
    <div id="sendmessage">Your message has been sent. Thank you!</div>
    <div id="errormessage"></div>
    <form role="form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
    
      <div class="col-md-12 form-content ">
          <label for="uname">UserName:</label>
          <input type="text" class="form-control" placeholder="username" name="uname" value="" autofocus>
      </div>

      <div class="col-md-12 form-content">
          <label for="pass">Password:</label>
          <input type="password" class="form-control" placeholder="password" name="pword">
      </div>
      <div class="column">
          <div class="col-md-6 re col-sm-6"> <label><strong><a href="signup.php">Not yet registered ? </a><strong></label></div>
          <div class="col-md-6 re"> <label><strong><a href="fpass.php">Forgotten password ? </a><strong></label></div>
      </div>
      
      
      
      <div class="text-center"><button type="submit" name="signin">Signin</button></div>

  </form>
  </div>
</div>
<!-- End Left contact -->
</div>
</div>
</div>
</div>
<!-- End Contact Area -->