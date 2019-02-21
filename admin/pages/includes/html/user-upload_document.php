<div class="container nacoss-new-discuss">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <div class="result-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Select File</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label class="nacoss-select-file">
                                        <div>select document <i class="fa fa-hand-pointer-o"></i></div>
                                        <input class="form-control" name="file" type="file" >
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Name" name="document_name" type="text" value="">
                                </div>
                                
                                <button class="nacoss-btn" name="upload_document" style="width:100%">Upload Document</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>