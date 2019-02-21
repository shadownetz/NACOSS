<div class="container nacoss-new-discuss">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <div class="result-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Discussion</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                            <fieldset>
                                
                                
                                <div class="form-group">
                                    <label>TOPIC:</label>
                                    <input class="form-control" placeholder="Enter Topic" name="topic" type="text" value="" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>GROUP AIM:</label>
                                    <input class="form-control" placeholder="Enter Aim" name="aim" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <label>Discussion Type:</label>
                                    <select name="discussion_type" class="form-control" required>  
                                        <option value="classic">Classic(the-same-level)</option>
                                        <option value="public">Public(any-other-level)</option>
                                        <option value="private">Private(needs-approval)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>DISPLAY PICTURE:</label>
                                    <label class="nacoss-select-file">
                                        <div>select picture <i class="fa fa-hand-pointer-o"></i></div>
                                    <input class="form-control" name="file" type="file" value="">
                                    </label>
                                </div>
                    
                                <button class="nacoss-btn" name="create">Create</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>