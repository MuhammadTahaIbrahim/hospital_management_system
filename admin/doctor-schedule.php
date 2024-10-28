<?php
include("config.php");
include("header.php");

if (isset($_POST['btnsc'])) {
    $selectedDoctorName = $_POST['docname'];

    // Get the selected doctor's doc_id
    $docIdQuery = "SELECT doc_id FROM doctor WHERE doc_name = ?";
    $stmt = $conn->prepare($docIdQuery);
    $stmt->bind_param("s", $selectedDoctorName);
    $stmt->execute();
    $docIdResult = $stmt->get_result();
    $docIdRow = $docIdResult->fetch_assoc();
    $docId = $docIdRow['doc_id'];

    // Build the $day string based on checked checkboxes
    $days = ['docday1', 'docday2', 'docday3', 'docday4', 'docday5', 'docday6', 'docday7'];
    $day = '';

    foreach ($days as $checkbox) {
        if (isset($_POST[$checkbox]) && $_POST[$checkbox] != '') {
            $day .= $_POST[$checkbox] . ', ';
        }
    }

    // Remove trailing comma and space
    $day = rtrim($day, ', ');

    $start_time = $_POST['docstime'];
    $end_time = $_POST['docetime'];

$query = "INSERT INTO schedule (s_day, s_stime, s_etime, s_docfk)
          VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssi", $day, $start_time, $end_time, $docId);
$result = $stmt->execute();


    if ($result) {
        echo "<script>alert('Schedule Added Successfully')</script>";
    } else {
        $message = "Schedule not Added: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var docNameSelect = document.querySelector('select[name="docname"]');
        var docIdInput = document.querySelector('input[name="docid"]');

        docNameSelect.addEventListener('change', function () {
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
                <h4 class="page-title">Add Schedule</h4>
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
    <input class="form-check-input" type="checkbox" name="docday1" value="Sunday" id="sunday">
    <label class="form-check-label" for="sunday">Sunday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday2" value="Monday" id="monday">
    <label class="form-check-label" for="monday">Monday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday3" value="Tuesday" id="tuesday">
    <label class="form-check-label" for="tuesday">Tuesday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday4" value="Wednesday" id="wednesday">
    <label class="form-check-label" for="wednesday">Wednesday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday5" value="Thursday" id="thursday">
    <label class="form-check-label" for="thursday">Thursday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday6" value="Friday" id="friday">
    <label class="form-check-label" for="friday">Friday</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="docday7" value="Saturday" id="saturday">
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
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" name="btnsc">Create Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
include("footer.php");
?>