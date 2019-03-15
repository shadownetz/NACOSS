
        <div class="row" id="nacoss-signup">

<!-- Start Signup rap -->
<div class="col-md-4">
    <div class="col-sm-12">

    </div>
</div>
<!-- End Signup rap -->

<!-- Start  contact -->

<div class="col-md-7 col-sm-12 nacoss-signup contact-form animated fadeIn" >
    <form role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
        <!-- to display error-->
        <div><?php //echo display_error(); ?></div>
        <div class="form-group col-sm-12">
            <div class="row form-content">
                <div class="col-md-6">
                    <label for="fname">First Name</label>
                    <input class="form-control" type="text" id="fname" name="fname" placeholder="firstname" autofocus required>
                </div>
                <div class="col-md-6">
                    <label for="lname">Last Name</label>
                    <input class="form-control" type="text" id="lname" placeholder="lastname" name="lname" required>
                </div>

        </div>
        <div class="row form-content">

                <div class="col-md-6">
                    <label for="lname">Username</label>
                    <input class="form-control" type="text" id="uname" placeholder="Username" name="uname" required>
                </div>

                <div class="col-md-6">
                    <label for="email">School Email</label>
                    <input class="form-control" type="email"  name="semail" placeholder="mail@example.com" required>
                </div>

        </div>
        <div class="row form-content">

                <div class="col-md-6">
                    <label for="phone">Phone Number</label>
                    <input class="form-control" type="text"  name="pnumber" placeholder="phone-number" required>
                </div>

                <div class="col-md-6">
                    <label for="phone">Reg. Number</label>
                    <input class="form-control" type="text"  name="rnumber" placeholder="Reg-number" required>
                </div>

        </div>
        <div class="row form-content">

                <div class="col-md-6">
                    <label>Gender:</label>
                                            <select name="gender" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>


                <div class="col-md-6">
                    <label for="level">Level of Study</label>
                    <select name="level" class="form-control" required>
                        <option value="">Select Level</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="left">Other</option>
                    </select>
                </div>

        </div>
        <div class="row form-content">
            <div class="col-md-6">
                <label for="pass">Password</label>
                <input type="password"  class="form-control" name="pword" placeholder="type password here" required>
            </div>
            <div class="col-md-6">
                <label for="repass">ReType Password</label>
                <input type="password" class="form-control" name="repass" placeholder="re-type password here" required>
            </div>
        </div>

        <div class="row form-content">

                <div class="col-md-12">
                <label for="bio">What do you aim to achieve with us&#63;</label>
                <textarea class="form-control form-text" rows=3 placeholder="Type Here" name="bio" required></textarea>
                </div>

        </div>    
    </div>
    

    <div class="text-center"><button type="submit" class="btn sm" name="signup">Signup</button></div>
</form>
</div>
<!-- End Left contact -->
</div>
</div>
</div>
</div>
<!-- End Contact Area -->