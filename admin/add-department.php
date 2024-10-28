<?php
include("header.php");
include("config.php");
if (isset($_POST['btnup'])) {
    $name = $_POST['dname'];
    $des = $_POST['ddes'];
    $status = $_POST['dstatus'];
    $img = $_FILES['d_img']['name'];
    $imgloc = $_FILES['d_img']['tmp_name'];

    if (move_uploaded_file($imgloc,"images/" . $img)) {
        // Prepare and execute SQL statement
        $query = "INSERT INTO department (dname, ddes, dimg, dstatus) VALUES ('$name', '$des', '$img', '$status')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('added Successfully')</script>";
        } else {
            echo "<script>alert('Department Not Added')</script>";
        }

    } else {
        echo "File Not Moved";
    }
}
?>
<div class="container mt-5 pt-5">
    <div class="row">
    <div class="col-md-12 text-right">
          <a href="departments.php"><input type="submit" value="Show Department" class="btn btn-primary"></a>  
        </div>
    </div>
</div>
    <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Department</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label>Department Name</label>
								<input class="form-control" name="dname" type="text">
							</div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" name="ddes" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control form-control-lg" id="exampleInputEmail1"
                                name="d_img">
                        </div>
                            <div class="form-group">
                        <label class="display-block">Department Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dstatus" id="product_active" value="Active" checked>
                            <label class="form-check-label" for="product_active">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dstatus" id="product_inactive" value="Inactive">
                            <label class="form-check-label" for="product_inactive">Inactive</label>
                        </div>
                    </div>
                            <div class="m-t-20 text-center">
                            <input type="submit" value="Create Department" class="btn btn-primary" name="btnup">
                            </div>
                        </form>
                        <div class="col-md-6 text-success">
                    <h4>
                        <?php echo @$message ?>
                    </h4>
                </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include("footer.php");
?>