<?php
include("header.php");

include("config.php");

if (isset($_GET['edit_id'])) {
    $emp_id = $_GET['edit_id'];
    $edit_query = "SELECT * FROM ew_view WHERE emp_id='" . $emp_id . "'";
    $result = mysqli_query($conn, $edit_query);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST['update'])) {
    $uid = $_POST["hideid"];
    $uename = $_POST['ename'];
    $uemail = $_POST['email'];
    $uphone = $_POST['phone'];
    $udate = $_POST['edate'];
    $uworker = $_POST['wname'];

    $up_query = "UPDATE employee SET emp_name='$uename', emp_doj='$udate', emp_phone='$uphone',
    emp_email='$uemail', w_id='$uworker' WHERE emp_id='$uid'";
    $result1 = mysqli_query($conn, $up_query);

    if ($result1) {
        echo "<script>location.href='employees.php';</script>";
    } else {
        echo "Data was not Updated ";
    }
}
?>

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="employees.php"><input type="submit" value="Show Employee" class="btn btn-primary" name=""></a>
        </div>
    </div>
</div>

<div class="page-wrapper mt-0 pt-0">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Employee</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post">
                    <input type="hidden" id="name" name="hideid" value="<?php echo $row['emp_id'] ?>">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="ename" value="<?php echo $row['emp_name'] ?>" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Email<span class="text-danger">*</span></label>
                                <input class="form-control" type="email" value="<?php echo $row['emp_email'] ?>" name="email" placeholder="" min="0" max="120" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone <span class="text-danger">*</span></label>
                                <input class="form-control" name="phone" value="<?php echo $row['emp_phone'] ?>" type="phone" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Role <span class="text-danger">*</span></label>
                                <select class="select form-control" name="wname">
                                    <option value="" disabled>Select Role</option>
                                    <?php
                                    $q = "SELECT * FROM workers";
                                    $result2 = mysqli_query($conn, $q);
                                    while ($row1 = mysqli_fetch_array($result2)) {
                                        ?>
                                        <option value="<?php echo $row1['worker_id']; ?>">
                                            <?php echo $row1['worker_name']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date of Joining <span class="text-danger">*</span></label>
                                <input type="datetime-local" class="form-control" value="<?php echo isset($row['emp_doj']) ? $row['emp_doj'] : ''; ?>" name="edate" id="datetimepicker4">
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <input type="submit" value="Update Employee" class="btn btn-success" name="update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
