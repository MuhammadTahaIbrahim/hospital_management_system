<?php
include("header.php");
?>
<?php

include("config.php");

if (isset($_GET['edit_id'])) {
    $eid = $_GET['edit_id'];
    $edit_query = "SELECT * FROM patient WHERE p_id='" . $eid . "'";
    $result = mysqli_query($conn, $edit_query);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST["btnup"])) {
    $up_id = $_POST["hideid"];
    $up_name = $_POST["pname"];
    $up_age = $_POST["p_age"];
    $up_pdis = $_POST["pdis"];
    $up_gen = $_POST["pgen"];
    $up_add = $_POST["padd"];
    $up_phone = $_POST["pphone"];
    $up_email = $_POST["pemail"];

    $up_query = "UPDATE patient SET p_name='$up_name', p_age='$up_age', p_disease='$up_pdis',
                  p_gender='$up_gen', p_add='$up_add',p_phone='$up_phone',p_email='$up_email' WHERE p_id='$up_id'";
    $result1 = mysqli_query($conn, $up_query);

    if ($result1) {
        echo "<script>location.href='patients.php';</script>";
    } else {
        echo "Data was not Updated ";
    }
}


?>
<div class="container mt-5 pt-2 mb-0">
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="patients.php"><input type="submit" value="Patients Detail" class="btn btn-primary" name=""></a>
        </div>
    </div>
</div>
<div class="page-wrapper mt-0 pt-0">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Patient</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" action="">
                    <input type="hidden" id="name" name="hideid" value="<?php echo $row['p_id'] ?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Patient Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="pname" value="<?php echo $row['p_name'] ?>"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Patient Age <span class="text-danger">*</span></label>
                                <input class="form-control" name="p_age" value="<?php echo $row['p_age'] ?>"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Disease<span class="text-danger">*</span></label>
                                <input class="form-control" name="pdis" value="<?php echo $row['p_disease'] ?>"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" name="pemail" value="<?php echo $row['p_email'] ?>"
                                    type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group gender-select">
                                <label class="gen-label">Gender:</label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="pgen" value="Male" class="form-check-input" <?php echo ($row['p_gender'] == 'Male') ? 'checked' : ''; ?>>Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="pgen" value="Female" class="form-check-input" <?php echo ($row['p_gender'] == 'Female') ? 'checked' : ''; ?>>Female
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="padd" value="<?php echo $row['p_add'] ?>"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <!-- <div class="form-group">
                                <label>City<span class="text-danger">*</span></label>
                                <select class="form-control" name="p_city" required>
                                    <option value="" disabled selected>Select City</option>
                                </select>
                            </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone <span class="text-danger">*</span></label>
                                <input class="form-control" name="pphone" value="<?php echo $row['p_phone'] ?>"
                                    type="text">
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <input type="submit" value="Update Patient" name="btnup" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>