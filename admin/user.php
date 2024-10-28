<?php 
include("header.php");
?>
    <?php

if (isset($_GET['del_id'])) {
    include('config.php');
    $id = $_GET['del_id'];

    $del_query = "DELETE FROM user where user_id='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        header("Location:user.php");
    } else {
        echo "Not Deleted" . mysqli_error($conn);    }
}

?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Date of Birth</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php
    include("config.php");

    $query="SELECT * FROM user";

     $result= mysqli_query($conn,$query);

     while($row=mysqli_fetch_assoc($result))
     {
?>
                                <tr>
      <td><?php echo $row['user_id']?></td>
      <td><?php echo $row['user_name']?></td>
      <td><?php echo $row['user_email']?></td>
      <td><?php echo $row['user_date']?></td>
      <td><?php echo $row['user_pass']?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success"
                                                href="edit.php?edit_id=<?php echo $row['user_id'] ?>"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a class="btn btn-danger" href="#" data-toggle="modal"
                                                data-target="#delete_u_detail_<?php echo $row['user_id']; ?>"><i
                                                    class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Delete city Modal -->
                                <div id="delete_u_detail_<?php echo $row['user_id']; ?>" class="modal fade delete-modal"
                                    role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="assets/img/sent.png" alt="" width="50" height="46">
                                                <h3>Are you sure want to delete this Speciality?</h3>
                                                <div class="m-t-20">
                                                    <a href="user.php" class="btn btn-white" data-dismiss="modal">Close</a>
                                                    <a class="btn btn-danger"
                                                        href="user.php?del_id=<?php echo $row['user_id'] ?>">Delete</a>
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