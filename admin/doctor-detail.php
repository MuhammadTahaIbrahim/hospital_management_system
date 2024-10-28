<?php
 include('config.php');
include("header.php");
?>
<?php
if (isset($_GET['del_id'])) {
   
    $id = $_GET['del_id'];

    $del_query = "DELETE FROM doctor WHERE doc_id='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        header("Location: doctor-detail.php");
    } else {
        echo "Not Deleted";
    }
}
?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Doctor Details</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="add-doctor.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i>
                    Add Doctor</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-border table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Department</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");
                            $query = "SELECT doc_id, doc_name,doc_des, doc_age, doc_email,doc_pass, doc_img, dname FROM doctor INNER JOIN department ON did=doc_didfk";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><img width="28" height="28" src="<?php echo "images/" . $row['doc_img'] ?>"
                                            class="rounded-circle m-r-5" alt="">
                                        <?php echo $row['doc_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['doc_age'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['doc_email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['doc_pass'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['dname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['doc_des'] ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success"
                                                href="ddetail-edit.php?edit_id=<?php echo $row['doc_id'] ?>"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="#" data-toggle="modal"
                                                data-target="#delete_doctor_detail_<?php echo $row['doc_id']; ?>"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
<!-- Modal outside the loop -->
<div id="delete_doctor_detail_<?php echo $row['doc_id']; ?>" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure you want to delete this Detail?</h3>
                <div class="m-t-20 row">
                    <div class="col-md-6 text-right">
                        <a href="doctor-detail.php" class="btn btn-white" data-dismiss="modal">Close</a>
                    </div>
                    <div class="col-md-6 text-left">
                        <form method="post" action="doctor-detail.php?del_id=<?php echo $row['doc_id']; ?>"
                            class="d-inline" id="deleteForm">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include("footer.php");
?>