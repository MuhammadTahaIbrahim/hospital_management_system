<?php
include("header.php");
include("config.php");
if (isset($_POST['addm'])) {
    $name = $_POST['mname'];
    $role = $_POST['mrole']; 
    $img = $_FILES['mimg']['name'];
    $imgloc = $_FILES['mimg']['tmp_name'];

    if (move_uploaded_file($imgloc,"images/" . $img)) {

        $query = "INSERT INTO member(m_name, m_role, m_img) values('" . $name . "','" . $role . "','" . $img . "')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Member Added')</script>";
        } else {
            echo "<script>alert('Member Not Added')</script>";
        }

    } else {
        echo "File Not Moved";
    }
}
?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Add Member</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="member.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>Show Member</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mt-5">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="">
                            <div class="form-group">
                                <label>Member Name <span class="text-danger">*</span></label>
                                <input name="mname" class="form-control" type="text">
                            </div>
                        </div>
                        <br>
                        <div class="">
                            <div class="form-group">
                                <label>Member Role <span class="text-danger">*</span></label>
                                <input name="mrole" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control form-control-lg" id="exampleInputEmail1" name="mimg">
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button name="addm" type="submit" value="Add Member" class="btn btn-primary submit-btn">Add Member</button>
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
