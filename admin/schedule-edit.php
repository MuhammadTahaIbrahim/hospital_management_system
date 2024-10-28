<?php
include("header.php");

include("config.php");

if (isset($_GET['edit_id'])) {
    $eid = $_GET['edit_id'];
    $edit_query = "SELECT * FROM schedule WHERE s_id='" . $eid . "'";
    $result = mysqli_query($conn, $edit_query);
    $row = mysqli_fetch_array($result);
}

if (isset($_POST['btnup'])) {
    $upday = $_POST['docday'];
    $upstart_time = $_POST['docstime'];
    $upend_time = $_POST['docetime'];
    $ups_status = $_POST['docstatus'];

    // Insert into schedule table using the obtained doc_id
    $query = "INSERT INTO schedule (s_day, s_stime, s_etime, s_status, s_docfk)
              VALUES ('$day', '$start_time', '$end_time', '$s_status', '$docId')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Schedule Added Successfully')</script>";
} else {
    $message = "Schedule not Added: " . mysqli_error($conn);
}
}

?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var docNameSelect = document.querySelector('select[name="docname"]');
        var docIdInput = document.querySelector('input[name="docid"]');

        docNameSelect.addEventListener('change', function() {
            docIdInput.value = this.options[this.selectedIndex].getAttribute('data-docid');
        });
    });
</script>


<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12 text-right">
          <a href="schedule.php"><input type="submit" value="Show Schedule" class="btn btn-primary" name=""></a>  
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Schedule</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <select class="select form-control" name="docname">
                                    <option value="" disabled selected>Select Name</option>
                                    <?php
                                    $q = "SELECT * FROM doctor";
                                    $result = mysqli_query($conn, $q);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['doc_name']; ?>">
                                            <?php echo $row['doc_name']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <fieldset>
                            <legend>Available Days</legend>

<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday" value="Sunday" id="sunday">
    <label class="form-check-label" for="sunday">Sunday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday" value="Monday" id="monday">
    <label class="form-check-label" for="monday">Monday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday" value="Tuesday" id="tuesday">
    <label class="form-check-label" for="tuesday">Tuesday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday" value="Wednesday" id="wednesday">
    <label class="form-check-label" for="wednesday">Wednesday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday" value="Thursday" id="thursday">
    <label class="form-check-label" for="thursday">Thursday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday" value="Friday" id="friday">
    <label class="form-check-label" for="friday">Friday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday" value="Saturday" id="saturday">
    <label class="form-check-label" for="saturday">Saturday</label>
</div>
</fieldset>
</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="datetime-local" class="form-control" name="docstime" id="datetimepicker3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>End Time</label>
                                <input type="datetime-local" class="form-control" name="docetime" id="datetimepicker4">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Schedule Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sstatus" id="product_active" value="Active" checked>
                            <label class="form-check-label" for="product_active">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sstatus" id="product_inactive" value="Inactive">
                            <label class="form-check-label" for="product_inactive">Inactive</label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" name="btnup">Updated Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
include("footer.php");
?>