<?php
include("header.php");

if (isset($_POST['pbtn'])) {
    include('config.php');

    $name = $_POST['pname'];
    $age = $_POST['p_age'];
    $dis = $_POST['pdis'];
    $gen = $_POST['pgender'];
    $address = $_POST['paddress'];
    $phone = $_POST['pphone'];
    $email = $_POST['pemail'];
    // $city_id =$_POST['p_city'];

    $query = "INSERT INTO patient (p_name,p_age,p_disease,p_gender,p_add,p_phone,p_email) VALUES ('$name', '$age', '$dis', '$gen', '$address', '$phone', '$email')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Patient added Successfully')</script>";
    } else {
        $message = "Patient not Added: " . mysqli_error($conn);
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
                <h4 class="page-title">Add Patient</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Patient Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="pname" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Patient Age <span class="text-danger">*</span></label>
                                <input class="form-control" name="p_age" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Disease<span class="text-danger">*</span></label>
                                <input class="form-control" name="pdis" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" name="pemail" type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
    <div class="form-group gender-select">
        <label class="gen-label">Gender:</label>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" name="pgender" value="Male" class="form-check-input">Male
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" name="pgender" value="Female" class="form-check-input">Female
            </label>
        </div>
    </div>
</div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="paddress" class="form-control ">
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
                                <input class="form-control" name="pphone" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <input type="submit" value="Create Patient" name="pbtn" class="btn btn-primary">
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