<?php 
include("header.php");
?>
<?php

if(isset($_GET['del_id']))
{
    include("config.php");
    $del=$_GET['del_id'];
    $del_query="DELETE FROM appointment where app_id='". $del."'";
    $del_res=mysqli_query($conn,$del_query);
    
    if($del_res)
    {
       echo "<script>'window.location=viewappointment.php'</script>";
    }

    else{
        echo "error".mysqli_error($conn);
    }

}


?>

        <main class="main">
            <!------------------------------------------------
		    page header - start
		    ------------------------------------------------>
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
                            <th class="pl-5">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("config.php");
                        $uemail=$_SESSION['email'];
                        $query = "SELECT * FROM appointment where app_email='".$uemail."'";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['app_id']; ?></td>
                                <td><?php echo $row['app_name']; ?></td>
                                <td><?php echo $row['app_phone']; ?></td>
                                <td><?php echo $row['app_date']; ?></td>
                                <td><?php echo $row['app_city']; ?></td>
                                <td><?php echo $row['app_email']; ?></td>

                                <td class="pl-0">
                                <a href="viewappointment.php?del_id=<?php echo $row['app_id']?>" class="btn btn-sm btn-secondary-color btn-secondary-color-1 ls-0">
									<span>Cancel</span>
								</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


            <?php 
include("footer.php");
?>