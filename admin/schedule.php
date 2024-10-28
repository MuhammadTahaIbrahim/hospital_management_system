<?php
include("header.php");
?>
<?php
if (isset($_GET['del_id'])) {
    include('config.php');
    $id = $_GET['del_id'];

    $del_query = "DELETE FROM schedule WHERE s_docfk='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        echo "<script>location.href='schedule.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);  
    }
}

?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Schedule</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="doctor-schedule.php" class="btn btn btn-primary btn-rounded float-right"><i
                        class="fa fa-plus"></i> Add Schedule</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-border table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Department</th>
                                <th>Available Days</th>
                                <th>Available Time</th>
                                <!-- <th>Status</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php
    include("config.php");
    $query = "SELECT doctor.doc_id, doctor.doc_name, department.dname, doctor.doc_img, GROUP_CONCAT(schedule.s_day) as available_days, GROUP_CONCAT(CONCAT(schedule.s_stime, ' - ', schedule.s_etime)) as available_time, schedule.s_status
    FROM doctor 
    INNER JOIN schedule ON doctor.doc_id = schedule.s_docfk
    LEFT JOIN department ON doctor.doc_didfk = department.did
    GROUP BY doctor.doc_id";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><img width="28" height="28" src="<?php echo "images/" . $row['doc_img'] ?>"
                    class="rounded-circle m-r-5" alt="">
                <?php echo $row['doc_name'] ?>
            </td>
            <td>
                <?php echo $row['dname'] ?>
            </td>
<td>
    <?php 
    $availableDays = explode(',', $row['available_days']);

    foreach ($availableDays as $day) {
        echo " " . trim($day) . '<br>';
    }
    ?>
</td>
            <td>
    <?php 
    $availableTime = explode(',', $row['available_time']);
    foreach ($availableTime as $time) {
        $timeRange = explode(' - ', $time);
        $formattedStartTime = date('h:i A', strtotime($timeRange[0]));
        $formattedEndTime = date('h:i A', strtotime($timeRange[1]));
        echo $formattedStartTime . ' - ' . $formattedEndTime . '<br>';
    }
    ?>
</td>

            <td class="">
                <div class="dropdown dropdown-action">
                    <a class="btn btn-danger text-light" data-toggle="modal" data-target="#delete_schedule_<?php echo $row['doc_id']; ?>">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </div>
            </td>
        </tr>
        <div id="delete_schedule_<?php echo $row['doc_id']; ?>" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Schedule?</h3>
                        <div class="m-t-20">
                            <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <a class="btn btn-danger" href="schedule.php?del_id=<?php echo $row['doc_id']; ?>">Delete</a>
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
