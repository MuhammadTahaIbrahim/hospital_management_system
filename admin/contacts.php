<?php
include("header.php");
?>
<?php
if (isset($_GET['c_id'])) {
    include('config.php');
    $id = $_GET['c_id'];

    $del_query = "DELETE FROM contact WHERE c_id='" . $id . "'";
    $del_res = mysqli_query($conn, $del_query);

    if ($del_res) {
        echo "<script>location.href='contacts.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);  
    }
}

?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Reviews</h4>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-border table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Email</th>
                                <th>pateint Relative</th>
                                <th>Message</th>
                                <!-- <th>Status</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php
    include("config.php");
$query = "SELECT * from `contact`";   
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td>
                <?php echo $row['c_name'] ?>
            </td>
            <td>
                <?php echo $row['c_subject'] ?>
            </td>
            <td>
                <?php echo $row['c_email'] ?>
            </td>
            <td>
                <?php echo $row['c_pname'] ?>
            </td>
             <td>
                <?php echo $row['c_msg'] ?>
                
                </td>
                <td >
                <div class="btn-group">
                <a class="btn btn-danger" href="#" data-toggle="modal"
                    data-target="#delete_p_detail_<?php echo $row['c_id']; ?>"><i
                        class="fa fa-trash-o"></i></a>
                     </div>
                </td>   
        </tr>

        <div id="delete_p_detail_<?php echo $row['c_id']; ?>" class="modal fade delete-modal"
                                    role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="assets/img/sent.png" alt="" width="50" height="46">
                                                <h3>Are you sure want to delete this Patient?</h3>
                                                <div class="m-t-20">
                                                    <a href="patients.php" class="btn btn-white" data-dismiss="modal">Close</a>
                                                    <a class="btn btn-danger"
                                                        href="contacts.php?c_id=<?php echo $row['c_id'] ?>" class="btn btn-danger">Delete</a>
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
