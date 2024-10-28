<?php 
include("config.php");
include("header.php");


?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-5">
                        <h4 class="page-title">Employee Salary</h4>
                    </div>
                    <div class="col-sm-8 col-7 text-right m-b-30">
                        <a href="add-employee.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Employee</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Employee Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Joining Date</th>
                                        <th>Role</th>
                                        <th>Salary</th>
                                        <th>Generate</th>
                                        <th>Payslip</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      
                                    <?php 
                            $fetch = "SELECT * from ew_view";
                            $result = mysqli_query($conn,$fetch);   
                                    while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo "#ES".$row['emp_id']?></td>
                                            <td><h2><?php echo $row['emp_name']?></h2></td>
                                            <td><?php echo $row['emp_email']?></td>
                                            <td><?php echo $row['emp_phone']?></td>
                                            <td><?php echo " " . date('Y-m-d', strtotime($row['emp_doj']));?></td>
                                            <td><?php echo $row['worker_name']?></td>
                                            <td><?php echo $row['worker_salary']?></td>
                                            <td><a class="btn btn-sm btn-primary" href="pay.php?id=<?php echo $row['emp_id']?>">Generate Slip</a></td>
                                            <td>
    <select class="form-select form-control" aria-label="Default select example" name="status">
        <option value="0" <?php echo (isset($row["status"]) && $row["status"] == 0) ? 'selected' : ''; ?>>Paid</option>
        <option value="1" <?php echo (isset($row["status"]) && $row["status"] == 1) ? 'selected' : ''; ?>>Pending</option>
    </select>
</td>

                                            <td >
                                                <div class="dropdown dropdown-action">
                                                    <a class="btn btn-success" href="edit_employee.php?edit_id=<?php echo $row['emp_id'] ?>">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#delete_e<?php echo $row['emp_id']; ?>">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                        <div id="delete_e<?php echo $row['emp_id']; ?>" class="modal fade delete-modal" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                                                        <h3>Are you sure want to delete this employee?</h3>
                                                        <div class="m-t-20">
                                                            <a href="employees.php" class="btn btn-white" data-dismiss="modal">close</a>
                                                            <a class="btn btn-danger" href="employees.php?del_id=<?php echo $row['emp_id']; ?>">Delete</a>
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
		<div id="delete_salary" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Salary?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>

                    
<?php 
include("footer.php");
?>		