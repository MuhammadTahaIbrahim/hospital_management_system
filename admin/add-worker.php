<?php
include("config.php");
include("header.php");
if (isset($_POST['add_worker'])) {
    $name = $_POST['wor_name'];
    $salary = $_POST['wor_salary'];
   

    $insert = "INSERT INTO `workers`(`worker_name`, `worker_salary`) VALUES ('$name' , '$salary')";
    $result = mysqli_query($conn, $insert);
    if ($result) {
        echo "<script>alert('Added Successfully')</script>";
    } else {
        echo "<script>alert('Failed to add')</script>";
    }
}



?>


        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Worker</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 mt-5">
                        <form method="POST">
                            <div class="row">
                                <div class="">
                                    <div class="form-group">
                                        <label>Worker Name <span class="text-danger">*</span></label>
                                        <input name="wor_name" class="form-control" type="text">
                                    </div>
                                </div>
                                <br>
                                <div class="">
                                    <div class="form-group">
                                        <label>Worker salary</label>
                                        <input name="wor_salary" class="form-control" type="text">
                                    </div>
                                </div>
                        
                            </div>
                          
                            <div class="m-t-20 text-center">
                                <button name="add_worker" type="submit" value="register" class="btn btn-primary submit-btn">Add Worker</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         <?php 
         include("footer.php");

         ?>

    
