<?php
include("header.php");
?>  
<?php

if (isset($_POST['btncity'])) {
    $name = $_POST['cname'];
    // echo "<script>alert('$name')</script>";
    $query = "INSERT INTO city(c_name) values('" . $name . "')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $message = "City Inserted";
    } else {
        $message = "City not Inserted";
    }

}
?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12 text-right">
          <a href="city.php"><input type="submit" value="Show City" class="btn btn-primary btn-rounded" name=""></a>  
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add City</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="cname" placeholder="Enter City Name">
                    </div>
                    <div class="m-t-20 text-center">
                        <input type="submit" value="Create City" class="btn btn-primary" name="btncity">
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