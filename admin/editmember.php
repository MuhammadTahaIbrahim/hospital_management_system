<?php
include("header.php");
include("config.php");

if (isset($_GET['edit_id'])) {
    $eid = $_GET['edit_id'];
    $edit_query = "SELECT * FROM member WHERE m_id='" . $eid . "'";
    $result = mysqli_query($conn, $edit_query);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST["btnup"])) {
    $up_id = $_POST["hideid"];
    $up_name = $_POST['mname'];
    $up_role = $_POST['mrole'];


    if ($_FILES["mimg"]["size"] > 0) {
        $target_dir = "images/";
        $up_img = $_FILES["mimg"]["name"];
        $target_file = $target_dir . basename($_FILES["mimg"]["name"]);

        if (move_uploaded_file($_FILES["mimg"]["tmp_name"], $target_file)) {
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        $up_img = $row['m_img'];
    }

    $up_query = "UPDATE member SET m_name='$up_name', m_role='$up_role', m_img='$up_img' WHERE m_id='$up_id'";
    $result1 = mysqli_query($conn, $up_query);

    if ($result1) {
        echo "<script>location.href='member.php';</script>";
    } else {
        echo "Data was not Updated ";
    }
}
?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Member</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form method="post" enctype="multipart/form-data">
            <input type="hidden" id="name" name="hideid" value="<?php echo $row['m_id'] ?>">
                    <div class="form-group">
                        <label>Member</label>
                        <input type="text" class="form-control" name="mname" value="<?php echo $row['m_name'] ?>" placeholder="Enter Member Name">
                    </div>
                    <div class="">
                            <div class="form-group">
                                <label>Member Role <span class="text-danger">*</span></label>
                                <input name="mrole" class="form-control" value="<?php echo $row['m_role'] ?>" type="text">
                            </div>
                        </div>
<div class="form-group">
<label for="exampleInputEmail1">Image<span class="text-danger">*</span></label>
<input type="file" class="form-control" name="mimg">
</div>
                    <div class="m-t-20 text-center">
                        <input type="submit" value="Updated" class="btn btn-primary" name="btnup">
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