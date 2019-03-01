<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <div class="result-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Select</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                            <fieldset>
                                
                                
                                <div class="form-group">
                                    <label>Academic Level:</label>
                                    <select name="level" class="form-control" required>
                                        <option value="">Select Level</option>
                                        <option value="first">First Year</option>
                                        <option value="second">Second Year</option>
                                        <option value="third">Third Year</option>
                                        <option value="final">Final Year</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Semester:</label>
                                    <select name="semester" class="form-control" required>
                                        <option value="">Select Semester</option>
                                        <option value="first">First</option>
                                        <option value="second">Second</option>
                                    </select>
                                </div>
                    
                                <button class="nacoss-btn" name="next">Next</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>