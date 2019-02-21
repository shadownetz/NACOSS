
<form  method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">  
    <div class="container-fluid" style="text-align:center">
  <img src="<?php echo $imagepath; ?>" alt="user image" height="100" class="...col-lg-offset-5 img-rounded ">
<?php //echo display_error(); ?>
</div>

    <!-- to display error-->
    <div><?php //echo display_error(); ?></div>
    <div class="form-group col-sm-12 nacoss-profile">
        <div class="row form-content">

                <div class="col-md-6">
                    <label for="fname">First Name</label>
                    <input class="form-control" type="text" id="fname" name="fname" placeholder="firstname" value="<?php echo $fname; ?>" autofocus required>
                </div>
                <div class="col-md-6">
                    <label for="lname">Last Name</label>
                    <input class="form-control" type="text" id="lname" placeholder="lastname" name="lname" value="<?php echo $lname; ?>" required>
                </div>

        </div>
        <div class="row form-content">

                <div class="col-md-6">
                    <label for="fname">Other Name</label>
                    <input class="form-control" type="text" id="oname" name="oname" placeholder="Othername" value="<?php echo $oname; ?>" autofocus >
                </div>
                <div class="col-md-6">
                    <label for="lname">Username</label>
                    <input class="form-control" type="text" id="uname" placeholder="Username" name="uname" value="<?php echo $uname; ?>" required disabled>
                </div>

        </div>
        <div class="row form-content">

                <div class="col-md-6">
                    <label for="email">School Email</label>
                    <input class="form-control" type="email" id="email" name="semail" placeholder="mail@example.com" value="<?php echo $semail; ?>" required disabled>
                </div>
                <div class="col-md-6">
                    <label for="email">Other Email</label>
                    <input class="form-control" type="email" id="email" name="oemail" placeholder="mail@example.com" value="<?php echo $oemail; ?>" >
                </div>
        </div>
        <div class="row form-content">
                <div class="col-md-6">
                    <label for="phone">Phone Number</label>
                    <input class="form-control" type="tel" id="pnumber" name="pnumber" placeholder="phone-number" value="<?php echo $pnumber; ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="phone">Reg. Number</label>
                    <input class="form-control" type="text" id="pnumber" name="rnumber" placeholder="Reg-number" value="<?php echo $rnumber; ?>" required disabled>
                </div>

        </div>
        <div class="row form-content">

                <div class="col-md-6">
                    <label>Gender:</label>
                    <select name="gender" class="form-control" required>
                        <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>


                <div class="col-md-6">
                    <label for="level">Level of Study</label>
                    <select name="level" class="form-control" required>
                        <option value="<?php echo $level; ?>"><?php echo $level." "; ?>Level</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="left">Left</option>
                    </select>
                </div>

        </div>
        <div class="row form-content">
                <div class="col-md-12">
                <label for="bio">Tell us about you&#63;</label>
                <textarea class="form-control form-text" rows=3 placeholder="Type Here" name="bio" value="<?php echo $bio; ?>" ></textarea>
                </div>

        </div>    
    </div>
    

    <div class="text-center"><button class="nacoss-btn" type="update" name="update">Update</button></div>
</form>
<br>