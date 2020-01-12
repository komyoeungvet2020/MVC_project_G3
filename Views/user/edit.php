
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center bg-primary">
                    <h3><b>Form Edit</b></h3>
                </div>
                <div class="card-body">
                    <?php
                    if (isset( $data['detail'])) {
                        foreach ( $data['detail'] as $rows) {
                    ?>
                            <form action="index1.php?action=edit_data=<?php echo $rows['user_id'];?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Username:</label>
                                    <input type="text" name="username" value="<?php echo $rows['Username'] ?>" class="form-control" placeholder="Username...">
                                </div>
                                <div class="form-group">
                                    <label for="">Gender:</label>
                                    <select name="gender" id="dender" class="form-control">
                                        <option <?php if ($rows['gender'] == "Male") { ?> checked="checked" <?php } ?> value="Male" name="sex">Male</option>
                                        <option <?php if ($rows['gender'] == "Female") { ?> checked="checked" <?php } ?> value="Female" name="sex">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">E-mail:</label>
                                    <input type="email" name="email" id="email" value="<?php echo $rows['email'] ?>" class="form-control" placeholder="E-mail...">
                                </div>
                                <?php
                                if(isset($data['get_book'])){
                                foreach ($data['get_book'] as $row) {
                                ?>
                                    <div class="form-group">
                                        <label for="">Book Name</label>
                                        <input type="hidden" name="id" value="<?php echo $row['book_id']; ?>">
                                        <input type="text" name="book" id="book" value="<?php echo $row['title'] ?>" class="form-control">
                                    </div>
                                <?php
                                   }
                                 }
                                ?>
                                <div class="form-group">
                                    <label for="">Start Date:</label>
                                    <input type="date" name="startdate" value="<?php echo $rows['startdate'] ?>" class="form-control" placeholder="Start Date...">
                                </div>
                                <div class="form-group">
                                    <label for="">End Date:</label>
                                    <input type="date" name="enddate" value="<?php echo $rows['enddate'] ?>" class="form-control" placeholder="end Date...">
                                </div>
                                <a href="index1.php?action=view" class="btn btn-warning">Go Back</a>
                                <button type="submit" class="btn btn-success float-right">Submit</button>
                            </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>