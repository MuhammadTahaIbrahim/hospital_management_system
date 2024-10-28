<?php 
include("config.php");
include("header.php");

if (isset($_GET['del_id'])) {
    include('config.php');
    $id = $_GET['del_id'];

    $del_query = "DELETE FROM workers where worker_id='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        header("Location:workers.php");
    } else {
        echo "Not Deleted";
    }
}

?>


<!-- ------------------------------------ -->
<div class="page-wrapper">
    <div class="content">
    <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Workers</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-worker.php" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Worker</a>
                    </div>
                </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Worker Name</th>
                                <th>Worker Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");
                            $query = "SELECT * FROM workers";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['worker_id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['worker_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['worker_salary'] ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success"
                                                href="editworker.php?edit_id=<?php echo $row['worker_id'] ?>"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger" href="#" data-toggle="modal"
                                                data-target="#delete_worker<?php echo $row['worker_id']; ?>"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Delete worker Modal -->
                                <div id="delete_worker<?php echo $row['worker_id']; ?>" class="modal fade delete-modal"
                                    role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="assets/img/sent.png" alt="" width="50" height="46">
                                                <h3>Are you sure want to delete this Speciality?</h3>
                                                <div class="m-t-20">
                                                    <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                                    <a class="btn btn-danger"
                                                        href="workers.php?del_id=<?php echo $row['worker_id'] ?>">Delete</a>
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