<?php
include("header.php");
?>  
<?php

if (isset($_POST['btna'])) {
    $name = $_POST['aname'];
    $title = $_POST['atitle'];
    $img = $_POST['aimg'];

    $img = $_FILES['aimg']['name'];
    $imgloc = $_FILES['aimg']['tmp_name'];

    if (move_uploaded_file($imgloc, $folder = "images/" . $img)) {
    // echo "<script>alert('$name')</script>";
    $query = "INSERT INTO aboutus(a_name,a_title,a_img) values('" . $name . "','" . $title . "','" . $img . "')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $message = "File Inserted";
    } else {
        $message = "File not Inserted";
    }

}
}
?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12 text-right">
          <a href="aboutus.php"><input type="submit" value="Show About" class="btn btn-primary btn-rounded" name=""></a>  
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Here</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="aname" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="atitle" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Image<span class="text-danger">*</span></label>
                            <input type="file" class="form-control form-control-lg" id="exampleInputEmail1"
                                name="aimg">
                        </div>
                    <div class="m-t-20 text-center">
                        <input type="submit" value="Inserted" class="btn btn-primary" name="btna">
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