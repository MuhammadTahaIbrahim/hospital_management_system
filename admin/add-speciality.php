<?php
include("header.php");
?>
<?php

if (isset($_POST['btnspe'])) {
    $name = $_POST['sname'];
    // echo "<script>alert('$name')</script>";
    $query = "INSERT INTO speciality(s_name) values('" . $name . "')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $message = "Speciality Inserted";
    } else {
        $message = "Speciality not Inserted";
    }

}



?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12 text-right">
          <a href="show-speciality.php"><input type="submit" value="Show Speciality" class="btn btn-primary" name=""></a>  
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Speciality</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post">
                    <div class="form-group">
                        <label>Speciality</label>
                        <input type="text" class="form-control" name="sname" placeholder="Enter Speciality">
                    </div>
                    <div class="m-t-20 text-center">
                        <input type="submit" value="Create Speciality" class="btn btn-primary" name="btnspe">
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