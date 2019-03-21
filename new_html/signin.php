
  <!-- Start Bottom Header -->
  <div class="header-bg page-area" style="background-size:cover;height:100%;background-position:fixed">
    <div class="home-overly"></div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12" >
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2">
                <h1 class="title2">Login Page</h1>
              </div>
              <!-- <div class="layer3" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3"># TeamSDC</h2>
              </div> -->
            </div>
          </div>
        </div>
        <!-- Start  contact -->
        <div class="col-md-6 col-sm-6 col-xs-12" style="background-color:rgba(255,255,255,0.6);margin-top:1.5%;margin-bottom:1%;box-shadow:-1px -1px 1px #000,-1px -1px 1px #fff,-1px -1px 1px #000">
            <div class="form contact-form contact">
            <h3 style="text-align: center; ">Student Login</h3>
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
                  <div class="col-md-6 re col-sm-6"> <label><strong><a href="sign-up.php" style="color:rgb(11,99,11)">Not yet registered ? </a><strong></label></div>
                  <div class="col-md-6 re"> <label><strong><a href="fpass.php" style="color:rgb(11,99,11)">Forgotten password ? </a><strong></label></div>
              </div>
                
                
                
                <div class="text-center"><button type="submit" name="signin">Signin</button></div>

            </form>
            </div>
          </div>
          <!-- End Left contact -->
      </div>
  </div>

  <!-- End Contact Area -->