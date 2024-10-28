<?php
include("header.php");
?>
<?php
if (isset($_POST['docbtn'])) {
    $name = $_POST['docname'];
    $age = $_POST['docage'];
    $email = $_POST['docemail'];
    $pass = $_POST['docpass'];
    $spe = $_POST['docdep'];
    $city = $_POST['city'];
    $des = $_POST['docdes'];
    //-------------img
    $img = $_FILES['docimg']['name'];
    $imgloc = $_FILES['docimg']['tmp_name'];


    if (move_uploaded_file($imgloc, $folder = "images/" . $img)) {
        $query = "INSERT INTO doctor (doc_name,doc_age,doc_email,doc_pass,doc_img,doc_des,doc_didfk,doc_cityid)
    VALUES('" . $name . "','" . $age . "','" . $email . "','" . $pass . "','" . $img . "','".$des."','".$spe."','".$city."')";

$result = mysqli_query($conn,$query);

if ($result) {
    echo "<script>alert('Added Successfully')</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
}


    } else {
        echo "File Not Moved";
    }
}

?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Doctor</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="docname" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Age<span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="docage" placeholder="" min="0"
                                    max="120" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" name="docemail" type="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password<span class="text-danger">*</span></label>
                                <input class="form-control" name="docpass" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control form-control-lg" id="exampleInputEmail1"
                                name="docimg">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Department<span class="text-danger">*</span></label>
                                <select class="form-control" name="docdep" required>
                                    <option value="" disabled selected>Select Department</option>
                                    <?php
                                    $q1 = "SELECT * FROM Department";
                                    $result = mysqli_query($conn, $q1);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['did'] ?>">
                                            <?php echo $row['dname'] ?>
                                           
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>City<span class="text-danger">*</span></label>
                                <select class="form-control" name="city" required>
                                    <option value="" disabled selected>Select City</option>
                                    <?php
                                    $q = "SELECT * FROM city";
                                    $result1 = mysqli_query($conn, $q);
                                    while ($row1 = mysqli_fetch_array($result1)) {
                                        ?>
                                        <option value="<?php echo $row1['c_id'] ?>">
                                            <?php echo $row1['c_name'] ?>
                                           
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
                                    max="120" required>
                            </div>
                        <div class="m-t-20 text-center">
                            <input type="submit" value="Create Doctor" class="btn btn-success" name="docbtn">
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