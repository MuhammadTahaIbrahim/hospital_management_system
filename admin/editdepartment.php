<?php
include("header.php");
include("config.php");

if (isset($_GET['edit_id'])) {
    $eid = $_GET['edit_id'];
    $edit_query = "SELECT * FROM department WHERE did='" . $eid . "'";
    $result = mysqli_query($conn, $edit_query);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST["btnup"])) {
    $up_id = $_POST["hideid"];
    $up_name = $_POST["dname"];
    $up_desc = $_POST["ddes"];
    $up_status = $_POST["dstatus"];

    if ($_FILES["d_img"]["size"] > 0) {
        $target_dir = "images/";
        $up_img = $_FILES["d_img"]["name"];
        $target_file = $target_dir . basename($_FILES["d_img"]["name"]);

        if (move_uploaded_file($_FILES["d_img"]["tmp_name"], $target_file)) {
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        $up_img = $row['dimg'];
    }

    $up_query = "UPDATE department SET dname='$up_name', ddes='$up_desc', dstatus='$up_status', dimg='$up_img' WHERE did='$up_id'";
    $result1 = mysqli_query($conn, $up_query);

    if ($result1) {
        echo "<script>location.href='departments.php';</script>";
    } else {
        echo "Data was not Updated ";
    }
}
?>


<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="departments.php"><input type="submit" value="Show Department" class="btn btn-primary" name=""></a>
        </div>
    </div>
</div>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Department</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" id="name" name="hideid" value="<?php echo $row['did'] ?>">
                    <div class="form-group">
                        <label>Department Name</label>
                        <input class="form-control" name="dname" value="<?php echo $row['dname'] ?>" type="text">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea cols="30" rows="4" name="ddes" class="form-control"><?php echo $row['ddes'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image<span class="text-danger"></span></label>
                        <input type="file" class="form-control" name="d_img">
                    </div>
                    <div class="form-group">
                        <label class="display-block">Department Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dstatus" value="Active" id="product_active" <?php echo ($row['dstatus'] == 'Active') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="product_active">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dstatus" value="Inactive" id="product_inactive" <?php echo ($row['dstatus'] == 'Inactive') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="product_inactive">Inactive</label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <input type="submit" value="Update Department" class="btn btn-primary" name="btnup">
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