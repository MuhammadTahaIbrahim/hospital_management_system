<?php
include("header.php");
?>
<?php
if (isset($_GET['del_id'])) {
    include('config.php');
    $id = $_GET['del_id'];

    $del_query = "DELETE FROM department where did='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        header("Location:departments.php");
    } else {
        echo "Not Deleted";
    }
}
?>
<div class="page-wrapper">
    <div class="content">
    <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Departments</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="add-department.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Department</a>
            </div>
        </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Department Name</th>
                            <th>Department Image</th>
                            <th class="">Department Description</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("config.php");
                        $query = "SELECT * FROM department";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['did']; ?></td>
                                <td><?php echo $row['dname']; ?></td>
                                <td><img width="120" height="50" src="<?php echo "images/" . $row['dimg'] ?>" class="" alt=""></td>
                                <td style="width: 320px;"><?php echo $row['ddes']; ?></td>
                                <td class="text-end">
                                    <?php
                                    if ($row['dstatus'] == 'Active') {
                                        echo '<span class="custom-badge status-green ">' . $row['dstatus'] . '</span>';
                                    } else {
                                        echo '<span class="custom-badge status-red">' . $row['dstatus'] . '</span>';
                                    }
                                    ?>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a class="btn btn-success" href="editdepartment.php?edit_id=<?php echo $row['did']; ?>">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#delete_d_detail_<?php echo $row['did']; ?>">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
<div id="delete_d_detail_<?php echo $row['did']; ?>" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Department?</h3>
                <div class="m-t-20">
                    <a href="departments.php" class="btn btn-white" data-dismiss="modal">Close</a> <!-- Corrected the link here -->
                    <a class="btn btn-danger" href="departments.php?del_id=<?php echo $row['did']; ?>">Delete</a>
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

<?php
include("footer.php");
?>
