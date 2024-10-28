<?php 
include("header.php");
?>

<?php 
   $query1 = "SELECT COUNT(doc_id) AS total_docs FROM doctor";
   $result = mysqli_query($conn, $query1);

   // Check if the query executed successfully
   if ($result) {
       // Fetch the associative array from the result
       $row = mysqli_fetch_assoc($result);

       // Access the total_docs column from the fetched row
       $total_doc = $row['total_docs'];
       
       // Output or use the $total_doc variable as needed
       echo "Total Doctors: " . $total_doc;
   } else {
       // Handle the case where the query fails
       echo "Error: " . mysqli_error($conn);
   }
?>
<?php 
   $query2 = "SELECT COUNT(p_id) AS total_pat FROM patient";
   $result = mysqli_query($conn, $query2);

   // Check if the query executed successfully
   if ($result) {
       // Fetch the associative array from the result
       $row = mysqli_fetch_assoc($result);

       // Access the total_docs column from the fetched row
       $total_pat = $row['total_pat'];
       
       // Output or use the $total_doc variable as needed
       echo "Total Patients: " . $total_pat;
   } else {
       // Handle the case where the query fails
       echo "Error: " . mysqli_error($conn);
   }
?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?php  echo @$total_doc?></h3>
								<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php  echo @$total_pat?></h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>72</h3>
                                <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>618</h3>
                                <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------------------- -->
  



				<div class="row my-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-border table-striped custom-table mb-0">
                        <thead class="bg-info text-white">
                            <tr class="bg-info text-white">
                                <th class="bg-info text-white">ID</th>
                                <th class="bg-info text-white">Name</th>
                                <th class="bg-info text-white">Phone</th>
                                <th class="bg-info text-white">Date</th>
                                <th class="bg-info text-white">City</th>
                                <th class="bg-info text-white">Email</th>
                                <th class="bg-info text-white">Doctor Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");
                            $query = "SELECT app_id, app_name, app_phone, app_date, app_city, app_email, doc_name 
                            FROM appointment 
                            INNER JOIN doctor ON doctor.doc_id = appointment.app_docfk";
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
                                    <td><?php echo $row['doc_name']; ?></td>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>				
				</div>
			
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">New Patients </h4> <a href="patients.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-block">
								<div class="table-responsive">
									<table class="table mb-0 new-patient-table">
										<tbody>
                                            <?php 
                                              $query = "SELECT * FROM patient order by p_id  desc limit 5 ";
                                              $result = mysqli_query($conn, $query);
                                              while ($row = mysqli_fetch_array($result)) {
                                            
                                            
                                            ?>
											<tr>
												<td>
													<img width="28" height="28" class="rounded-circle" src="assets/img/user.jpg" alt=""> 
													<h2><?php echo $row["p_name"] ?></h2>
												</td>
												<td><?php echo $row["p_email"] ?></td>
												<td><?php echo $row["p_phone"] ?></td>
						
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
					<div class="col-12 col-md-6 col-lg-4 col-xl-4">
						<div class="hospital-barchart">
							<h4 class="card-title d-inline-block">Hospital Management</h4>
						</div>
						<div class="bar-chart">
							<div class="legend">
								<div class="item">
									<h4>Level1</h4>
								</div>
								
								<div class="item">
									<h4>Level2</h4>
								</div>
								<div class="item text-right">
									<h4>Level3</h4>
								</div>
								<div class="item text-right">
									<h4>Level4</h4>
								</div>
							</div>
							<div class="chart clearfix">
								<div class="item">
									<div class="bar">
										<span class="percent">16%</span>
										<div class="item-progress" data-percent="16">
											<span class="title">OPD Patient</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="bar">
										<span class="percent">71%</span>
										<div class="item-progress" data-percent="71">
											<span class="title">New Patient</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="bar">
										<span class="percent">82%</span>
										<div class="item-progress" data-percent="82">
											<span class="title">Laboratory Test</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="bar">
										<span class="percent">67%</span>
										<div class="item-progress" data-percent="67">
											<span class="title">Treatment</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="bar">
										<span class="percent">30%</span>									
										<div class="item-progress" data-percent="30">
											<span class="title">Discharge</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					 </div>
				</div>
            </div>
            </div>

<?php 
include("footer.php");
?>