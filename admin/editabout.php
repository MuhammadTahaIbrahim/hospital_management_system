<?php
include("header.php");
include("config.php");

if (isset($_GET['edit_id'])) {
    $eid = $_GET['edit_id'];
    $edit_query = "SELECT * FROM aboutus WHERE a_id='" . $eid . "'";
    $result = mysqli_query($conn, $edit_query);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST["btnup"])) {
    $up_id = $_POST["hideid"];
    $up_name = $_POST['aname'];
    $up_title = $_POST['atitle'];

    if ($_FILES["aimg"]["size"] > 0) {
        $target_dir = "images/";
        $up_img = $_FILES["aimg"]["name"];
        $target_file = $target_dir . basename($_FILES["aimg"]["name"]);

        if (move_uploaded_file($_FILES["aimg"]["tmp_name"], $target_file)) {
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        $up_img = $row['a_img'];
    }

    $up_query = "UPDATE aboutus SET a_name='$up_name', a_title='$up_title', a_img='$up_img' WHERE a_id='$up_id'";
    $result1 = mysqli_query($conn, $up_query);

    if ($result1) {
        echo "<script>location.href='aboutus.php';</script>";
    } else {
        echo "Data was not Updated ";
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
                <h4 class="page-title">Update About Us</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" id="name" name="hideid" value="<?php echo $row['a_id'] ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['a_name'] ?>" name="aname" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" value="<?php echo $row['a_title'] ?>" name="atitle" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image<span class="text-danger"></span></label>
                        <input type="file" class="form-control" name="aimg">
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