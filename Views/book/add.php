<?php  
  include "dashboard/dashboard.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Student Information Form</h2>
                </div>
                <form action="index.php?action=form_data" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Title:</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="desp">Description:</label>
                                <input type="text" name="desp" id="desp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="type">Type:</label>
                                <input type="text" name="type" id="type" class="form-control">
                            </div>
                            
                    </div>
                    <div class="card-footer">
                        <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                        <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>