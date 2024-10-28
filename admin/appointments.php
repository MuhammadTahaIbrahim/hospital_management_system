<?php
include('config.php');
include("header.php");
?>

<?php
if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];

    $del_query = "DELETE FROM appointment WHERE app_id='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        header("Location: appointments.php");
    } else {
        echo "Not Deleted";
    }
}
?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">View Appointment</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-border table-striped custom-table mb-0">
                        <thead class="bg-info text-white">
                            <tr class="">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>City</th>
                                <th>Email</th>
                                <th>Doctor Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");
                            $query = "SELECT app_id, app_name, app_phone, app_date, app_city, app_email, doc_name 
                            FROM appointment 
                            INNER JOIN doctor ON doctor.doc_id = appointment.app_docfk";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['app_id']; ?></td>
                                    <td><?php echo $row['app_name']; ?></td>
                                    <td><?php echo $row['app_phone']; ?></td>
                                    <td><?php echo $row['app_date']; ?></td>
                                    <td><?php echo $row['app_city']; ?></td>
                                    <td><?php echo $row['app_email']; ?></td>
                                    <td><?php echo $row['doc_name']; ?></td>
                                    <td>
                                    <div class="btn-group">
                                            <a class="btn btn-danger" href="#" data-toggle="modal"
                                                data-target="#delete_app_detail_<?php echo $row['app_id']?>"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </div>
                                        </td>
                                    <!-- <td class="pl-0">
                                        <a href="appointments.php?del_id=<?php echo $row['app_id']?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td> -->
                                </tr>
                                <!-- Modal outside the loop -->
<div id="delete_app_detail_<?php echo $row['app_id']; ?>" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure you want to delete this?</h3>
                <div class="m-t-20 row">
                    <div class="col-md-6 text-right">
                        <a href="doctor-detail.php" class="btn btn-white" data-dismiss="modal">Close</a>
                    </div>
                    <div class="col-md-6 text-left">
                        <form method="post" action="doctor-detail.php?del_id=<?php echo $row['app_id']; ?>"
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
