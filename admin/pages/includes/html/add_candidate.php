<?php
$post = array("President", "Vice President", "Secretary General", "Financial Secretary", "Director Of Social I", "Director Of Social II", "Director Of Software I", "Director Of Software II", "Director Of Academics I", "Director Of Academics II", "Librarian", "Provost");

$post_insert = array("president", "vice_president", "secretary_general", "financial_secretary", "social_1", "social_2", "software_1", "software_2", "academics_1", "academics_2", "librarian", "provost");
?>


<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <div class="result-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ADD CANDIDATE</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                            <fieldset>
                                
                                
                                <div class="form-group">
                                    <label>Candidate's Reg No:</label>
                                    <input class="form-control" placeholder="Reg Number" name="rnumber" type="text" value="">
                                </div>
                                
                                <div class="form-group">
                                    <label>Going For:</label>
                                    <select name="post" class="form-control" required>
                                        <option value="">Select Post</option>
                                        <?php
                                            for($x = 0; $x < count($post); $x++){
                                               echo "<option value=".$post_insert[$x].">".$post[$x]."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                    
                                <button class="btn btn-lg btn-success btn-block" name="submit">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>