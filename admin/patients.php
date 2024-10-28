<?php
include("header.php");

if (isset($_GET['del_id'])) {
    include('config.php');
    $id = $_GET['del_id'];

    $del_query = "DELETE FROM patient where p_id='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        header("Location:patients.php");
    } else {
        echo "Not Deleted";
    }
}

?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Patients</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="add-patient.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-border table-striped custom-table datatable mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Disease</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");
                            $query = "SELECT * FROM patient";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['p_id'] ?></td>
                                    <td><?php echo $row['p_name'] ?></td>
                                    <td><?php echo $row['p_age'] ?></td>
                                    <td><?php echo $row['p_disease'] ?></td>
                                    <td><?php echo $row['p_gender'] ?></td>
                                    <td><?php echo $row['p_add'] ?></td>
                                    <td><?php echo $row['p_phone'] ?></td>
                                    <td><?php echo $row['p_email'] ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-success"
                                                href="patientedit.php?edit_id=<?php echo $row['p_id'] ?>"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="#" data-toggle="modal"
                                                data-target="#delete_p_detail_<?php echo $row['p_id']; ?>"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Delete Patient Modal -->
                                <div id="delete_p_detail_<?php echo $row['p_id']; ?>" class="modal fade delete-modal"
                                    role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="assets/img/sent.png" alt="" width="50" height="46">
                                                <h3>Are you sure want to delete this Patient?</h3>
                                                <div class="m-t-20">
                                                    <a href="patients.php" class="btn btn-white" data-dismiss="modal">Close</a>
                                                    <a class="btn btn-danger"
                                                        href="patients.php?del_id=<?php echo $row['p_id'] ?>" class="btn btn-danger">Delete</a>
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
