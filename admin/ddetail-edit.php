<?php
include("header.php");

include("config.php");

if (isset($_GET['edit_id'])) {
    $eid = $_GET['edit_id'];
    $edit_query = "SELECT * FROM doctor WHERE doc_id='" . $eid . "'";
    $result = mysqli_query($conn, $edit_query);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST["btnup"])) {
    $up_id = $_POST["hideid"];
    $up_name = $_POST['docname'];
    $up_age = $_POST['docage'];
    $up_email = $_POST['docemail'];
    $up_pass = $_POST['docpass'];
    $spe = $_POST['docdep'];
    $des = $_POST['docdes'];

    // File upload handling
    $target_dir = "images/";
    $up_img = $_FILES['docimg']['name'];
    $target_file = $target_dir . basename($_FILES['docimg']['name']);

    if (!empty($_FILES["docimg"]["tmp_name"]) && move_uploaded_file($_FILES["docimg"]["tmp_name"], $target_file)) {
        // Update the image only if a new one is uploaded
        $up_query = "UPDATE doctor SET doc_name='$up_name', doc_age='$up_age', doc_email='$up_email',
                      doc_pass='$up_pass', doc_img='$up_img', doc_des='$des', doc_didfk='$spe' WHERE doc_id='$up_id'";
    } else {
        // Keep the existing image if no new image is uploaded
        $up_query = "UPDATE doctor SET doc_name='$up_name', doc_age='$up_age', doc_email='$up_email',
                      doc_pass='$up_pass', doc_des='$des', doc_didfk='$spe' WHERE doc_id='$up_id'";
    }

    $result1 = mysqli_query($conn, $up_query);

    if ($result1) {
        echo "<script>location.href='doctor-detail.php';</script>";
    } else {
        echo "Data was not Updated ";
    }
}
?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Doctor</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" id="name" name="hideid" value="<?php echo $row['doc_id'] ?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="docname" value="<?php echo $row['doc_name'] ?>"
                                    type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Age<span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="docage"
                                    value="<?php echo $row['doc_age'] ?>" placeholder="" min="0" max="120" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" name="docemail" type="email"
                                    value="<?php echo $row['doc_email'] ?>" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password<span class="text-danger">*</span></label>
                                <input class="form-control" name="docpass" value="<?php echo $row['doc_pass'] ?>"
                                    type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="docimg">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Department<span class="text-danger">*</span></label>
                                <select class="form-control" name="docdep" required>
                                    <option value="" disabled>Select Department</option>
                                    <?php
                                    $q = "SELECT * FROM department";
                                    $result2 = mysqli_query($conn, $q);
                                    while ($row1 = mysqli_fetch_array($result2)) {
                                        ?>
                                        <option value="<?php echo $row1['did']; ?>">
                                            <?php echo $row1['dname']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                                <label>Description<span class="text-danger">*</span></label>
                                <input style = "height:100px;" class="form-control" type="text" name="docdes" placeholder="" min="0"
                                    max="120" required value="<?php echo $row['doc_des'] ?>">
                            </div>
                        <!-- ...  ... -->
                        <div class="m-t-20 text-center">
                            <input type="submit" value="Update Doctor" class="btn btn-success" name="btnup">
                        </div>
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