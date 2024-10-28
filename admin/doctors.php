<?php
include("header.php");
include("config.php");

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];

    // Use prepared statement to prevent SQL injection
    $del_query = $conn->prepare("DELETE FROM doctor WHERE doc_id = ?");
    $del_query->bind_param("i", $id);
    $del_res = $del_query->execute();

    if ($del_res) {
        header("Location: doctors.php");
        exit(); // Make sure to exit after a header redirect
    } else {
        echo "Not Deleted";
    }

    // Close the prepared statement
    $del_query->close();
}
?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Doctors</h4>
            </div>
            <div class="col-sm-12 text-right">
                <a href="add-doctor.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Doctor</a>
            </div>
        </div>

        <div class="row doctor-grid">
            <?php
            $query = "SELECT doc_id, doc_name, doc_age, doc_email, doc_pass, doc_img, dname, c_name 
                      FROM doctor 
                      INNER JOIN department ON did = doc_didfk 
                      INNER JOIN city ON c_id = doc_cityid";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="profile-widget">
                        <div class="doctor-img">
                            <a class="avatar" href="#"><img src="<?php echo "images/" . $row['doc_img'] ?>" alt="" class="rounded"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#delete_doctor_<?php echo $row['doc_id']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                            </div>
                        </div>
                        <h4 class="doctor-name text-ellipsis"><a href="profile.php"><?php echo $row['doc_name']; ?></a></h4>
                        <div class="doc-prof"><b>Specialization:  </b><?php echo $row['dname']; ?></div>
                        <div class="user-country">
                            <i class="fa fa-map-marker"></i> <?php echo $row['c_name']; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php
        // Modal inside the loop
        $query = "SELECT doc_id, doc_name, doc_age, doc_email, doc_pass, doc_img, dname 
                  FROM doctor 
                  INNER JOIN department ON did = doc_didfk";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($result)) {
        ?>
        <div id="delete_doctor_<?php echo $row['doc_id']; ?>" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Doctor?</h3>
                        <div class="m-t-20">
                            <a href="docedit.php?edit_id=<?php echo $row['doc_id']; ?>" class="btn btn-white" data-dismiss="modal">Close</a>
                            <a class="btn btn-danger" href="doctors.php?del_id=<?php echo $row['doc_id']; ?>"><i class="icon_close_alt2"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php
include("footer.php");
?>
