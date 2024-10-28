<?php
include("header.php");
if (isset($_POST['empbtn'])) {
    $ename = $_POST['ename'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['etime'];
    $worker= $_POST['wname'];


    $insert = "INSERT INTO employee(emp_name,emp_doj,emp_phone,emp_email,w_id) VALUES('".$ename."', '".$date."', '".$phone."', '".$email."', '".$worker."')";
    $result = mysqli_query($conn,$insert);
    if($result) {
        echo "<script>alert('Added Successfully')</script>";
    } else {
        echo "<script>alert('Failed to add')</script>";
    }
}
?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12 text-right">
          <a href="employees.php"><input type="submit" value="Show Employee" class="btn btn-primary" name=""></a>  
        </div>
    </div>
</div>
<div class="page-wrapper mt-0 pt-0">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Employee</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="ename" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Email<span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email" placeholder="" min="0"
                                    max="120" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone <span class="text-danger">*</span></label>
                                <input class="form-control" name="phone" type="phone" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Role <span class="text-danger">*</span></label>
                                <select class="select form-control" name="wname">
                                    <option value="" disabled>Select Role</option>
                                    <?php
                                    $q = "SELECT * FROM workers";
                                    $result = mysqli_query($conn, $q);
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['worker_id']; ?>">
                                            <?php echo $row['worker_name']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
    <label>Date of Joining <span class="text-danger">*</span></label>
    <input type="datetime-local" class="form-control" name="etime" id="datetimepicker4">
</div>

                        </div>
                        <div class="m-t-20 text-center">
                            <input type="submit" value="Create Employee" class="btn btn-success" name="empbtn">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('datetimepicker4').addEventListener('input', function () {
        // Get the selected date without time
        let selectedDate = this.value.split('T')[0];

        // Update the input value with only the date
        this.value = selectedDate;
    });
</script>
           <?php 
           include("footer.php");
           ?>
