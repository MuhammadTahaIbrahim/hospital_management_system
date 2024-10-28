<?php
include("header.php");
?>  
<?php

include("config.php");

if (isset($_GET['edit_id'])) {
    $eid = $_GET['edit_id'];
    $edit_query = "SELECT * FROM city WHERE c_id='" . $eid . "'";
    $result = mysqli_query($conn, $edit_query);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST["btnup"])) {
    $up_id = $_POST["hideid"];
    $up_name = $_POST["cname"];

    $up_query = "UPDATE city SET c_name='$up_name' WHERE c_id='$up_id'";
    $result1 = mysqli_query($conn, $up_query);

    if ($result1) {
        echo "<script>location.href='city.php';</script>";
    } else {
        echo "Data was not Updated ";
    }
}


?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12 text-right">
          <a href="city.php"><input type="submit" value="Show City" class="btn btn-primary" name=""></a>  
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update City</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post">
                <input type="hidden" id="name" name="hideid" value="<?php echo $row['c_id'] ?>">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="cname"  value="<?php echo $row['c_name'] ?>" placeholder="Enter Speciality">
                    </div>
                    <div class="m-t-20 text-center">
                        <input type="submit" value="Update City" class="btn btn-primary" name="btnup">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>  