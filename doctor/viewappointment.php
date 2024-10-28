<?php 
  include("config.php");
include("header.php");
?>
<?php


if(isset($_GET['del_id']))
{
    include("config.php");
    $del = $_GET['del_id'];
    $del_query = "DELETE FROM appointment WHERE app_id = '" . $del . "'";
    $del_res = mysqli_query($conn, $del_query);
    
    if($del_res)
    {
        echo "<script>window.location='viewappointment.php'</script>";
    }
    else {
        echo "error" . mysqli_error($conn);
    }
}

?>

<main class="main">
    <div class="page-header bg-more-light">
        <div class="container">
            <h2 class="page-title">View Appointment</h2>
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="index.php">Appointment</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead class="bg-primary-color text-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th class="">Date</th>
                                <th class="">City</th>
                                <th class="">Email</th>
                                <th class="">Doctor Name</th>
                                <th class="text-center">Action</th>
                                <!-- <th class="pl-5">Action</th> -->
                            </tr>
                        </thead>
                        <?php 
                        
                          $id =$_SESSION['did'];
                          $query = "SELECT *
                          FROM doctor AS d
                          INNER JOIN user AS u ON u.user_id = d.doc_id
                          INNER JOIN appointment AS a ON a.app_docfk = d.doc_id
                          WHERE d.doc_id = '$id'";
                          $result = mysqli_query($conn, $query);
                          if($result){
                            if(mysqli_num_rows($result) > 0){
                        ?>
                        <tbody>
                            <?php
                          
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

<td class="pl-5 ml-5">
    <a href="#" class="btn btn-sm btn-outline-success" onclick="approveAppointment(<?php echo $row['app_id']?>)">
        <span>Approve</span>
    </a>
    <a href="viewappointment.php?del_id=<?php echo $row['app_id']?>" class="btn btn-sm btn-danger">
        <span>Cancel</span>
    </a>
</td>
                            <?php
                            }
                        }
                    }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
function approveAppointment(appointmentId) {

    var confirmation = confirm("Do you want to approve the appointment?");
    
    if (confirmation) {

        alert("Patient appointment is approved");

        // window.location.href = "approve.php?app_id=" + appointmentId;
    }
}
</script>

<?php 
include("footer.php");
?>
