<?php
include("header.php");

if (isset($_GET['del_id'])) {
    include('config.php');
    $id = $_GET['del_id'];

    $del_query = "DELETE FROM speciality where s_id='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        header("Location:show-speciality.php");
    } else {
        echo "Not Deleted";
    }
}

?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Speciality</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="add-speciality.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add
                    Speciality</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Speciality Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");
                            $query = "SELECT * FROM speciality";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['s_id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['s_name'] ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success"
                                                href="editspeciality.php?edit_id=<?php echo $row['s_id'] ?>"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger" href="#" data-toggle="modal"
                                                data-target="#delete_s_detail_<?php echo $row['s_id']; ?>"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Delete Speciality Modal -->
                                <div id="delete_s_detail_<?php echo $row['s_id']; ?>" class="modal fade delete-modal"
                                    role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="assets/img/sent.png" alt="" width="50" height="46">
                                                <h3>Are you sure want to delete this Speciality?</h3>
                                                <div class="m-t-20">
                                                    <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                                    <a class="btn btn-danger"
                                                        href="show-speciality.php?del_id=<?php echo $row['s_id'] ?>">Delete</a>
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