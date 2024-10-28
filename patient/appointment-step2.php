<?php
include("header.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['btnapp'])) {
    $name = $_POST['aname'];
    $phone = $_POST['aphone'];
    $date = $_POST['adate'];
    $email = $_POST['aemail'];
    $city = $_POST['acity'];
    $doc = $_POST['adoc'];

    // Server-side validation
    if (empty($name) || empty($phone) || empty($date) || empty($email) || empty($city)) {
        echo "<script>alert('Please fill in all the required fields.');</script>";
    } else {
        // Insert the new user if the email is unique
        $insert_query = "INSERT INTO appointment(app_name,app_phone,app_date,app_city,app_email,app_docfk) 
            VALUES ('" . $name . "', '" . $phone . "', '" . $date . "', '" . $city . "', '" . $email . "', '" . $doc . "')";
        $insert_result = mysqli_query($conn, $insert_query);

        if ($insert_result) {
            echo "<script>alert('Appointment booked successfully!'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Error booking Appointment : " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>

        <main class="main">
            <!-- ----------------------------------------------
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title">Appointments</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Appointment</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Step - 2</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    step bar - start
		    ------------------------------------------------>
            <div class="bg-secondary-color">
                <div class="container">
                    <div class="step-bar">
                        <div class="steps-progress">
                            <div class="progress-indicator" style="width: 100%;"></div>
                        </div>
                        <ul class="nav-step">
                            <li class="nav-item completed">
                                <div class="nav-link">
                                    <div class="check-circle"><i class="fas fa-check"></i></div>
                                    <span>Select a doctor</span>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <div class="nav-link">
                                    <div class="check-circle">2</div>
                                    <span>Book Appointment</span>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <div class="nav-link">
                                    <div class="check-circle">3</div>
                                    <span>Booked</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!------------------------------------------------
		    step bar - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    content - start
		    ------------------------------------------------>
            <div class="container apppointment-step-3-section">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <h2 class="ls-n-20 line-height-1">Book An Appointment</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <div>
                            <h4 class="sub-title">Enter Your Info:</h4>
                            <div class="payment-tab mt-3  mb-5">
                            <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
              
                    $fetch = "SELECT * from doctor AS d INNER JOIN Schedule AS s ON s.s_docfk = d.doc_id WHERE d.doc_id = '$id'";
                    $result = mysqli_query($conn,$fetch);
                    if($result){
                        $row = mysqli_fetch_array($result);
                            
                    ?>
                                <div class="tab-content" id="tab-content-1">
                                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
                                        <form method="post"  action="">
                                            <div class="row row-joined">
                                                <div class="col-md-12">
                                                    <div class="input-group input-light first-name">
                                                        <h6 class="input-title mt-0">Name</h6>
                                                        <input type="text" name="aname" class="form-control" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-group input-light first-name">
                                                        <h6 class="input-title mt-2">Phone</h6>
                                                        <input type="phone" name="aphone" class="form-control" placeholder="i.e. 754859">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
    <div class="input-group input-light">
        <h6 class="input-title">Date</h6>
        <input type="date" class="form-control" name="adate" id="deliveryDate" placeholder="mm/dd/yy">
    </div>

    <script>
    // Get today's date
    var today = new Date().toISOString().split('T')[0];

    // Set the min attribute of the input to today's date
    document.getElementById("deliveryDate").setAttribute("min", today);
</script>

</div>
                                                <div class="col-lg-12">
                                                    <div class="input-group input-light">
                                                        <h6 class="input-title">Email</h6>
                                                        <input type="email" name="aemail" class="form-control" placeholder="abc@gmail.com" value="<?php echo $_SESSION['email']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group input-light">
                                                        <h6 class="input-title">City</h6>
                                                        <input type="text" name="acity" class="form-control" placeholder="Your City Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group input-light">
                                                        <input type="hidden" name="adoc" class="form-control" placeholder="" value="<?php echo $row['doc_id']?>">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-12 d-lg-flex">
                                                    <a href="#" class="btn btn-more-light btn-form">
                                                        <span>Cancel</span>
                                                    </a>
                                                    <button type="submit" class="btn btn-secondary-color btn-form">
                                                        <span>Submit</span>
                                                    </button>
                                                </div> -->
                                            </div>  
                                            <!-- <a href="#" name="btnapp" class="btn btn-form btn-secondary-color">
                                    <span>Book an Appointment</span>
                                </a>  -->
                                            <button type="submit" name="btnapp" class="btn btn-secondary-color btn-form">
                                                        <span>Book an Appointment</span>
                    </button>
                                            <!-- <input type="submit" name="btnapp" class="btn btn-secondary-color btn-form" value="Book an Appointment">  -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                  
                        <!-- <a class="btn btn-secondary-color mt-2 mb-3">
                            <span>     </span>
                        </a> -->
                    </div>
                  
                    <div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <div class="image-box">
                            <figure>
                            <img src="<?php echo "../admin/images/" .$row['doc_img'] ?>" class="w-100" alt="Doctor" width="370" height="407">
                            </figure>
                            <div class="box-content">
                                <h4 class="box-title mb-0"><?php echo $row['doc_name']?></h4>
                                <div class="ratings-container mb-0">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                    </div>
                                    <span>4.8/5.0</span>
                                </div>
                                <span class="box-desc mb-0 ls-0">
                                    You'll be seeing <?php echo $row['doc_name']?> tomorrow at
      
                                </span>
                            </div>
                            <div class="box-content box-content-clock mt-1">
                                <h4 class="box-title m-b-1"><i class="far fa-clock"></i>
                                <span>
                                 <?php 
    echo "  " . date('h:i A', strtotime($row['s_stime'])) . ' - ';
    echo "  " . date('h:i A', strtotime($row['s_etime']));
    ?>
  </span>    
</h4>
  
                                <span class="box-desc mb-0 ls-0">
                                    We're holding your appointment while you complete your booking.
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php 
                    
                }
            }
                    ?>
                </div>
            </div>
            <!------------------------------------------------
		    content - end
		    ------------------------------------------------>
        </main>
        <script>
  document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('dateInput');
    var today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);

    document.querySelector('form').addEventListener('submit', function (event) {
      if (!validateForm()) {
        event.preventDefault();
      }
    });

    function validateForm() {
      var name = document.querySelector('input[name="aname"]').value;
      var phone = document.querySelector('input[name="aphone"]').value;
      var date = document.querySelector('input[name="adate"]').value;
      var email = document.querySelector('input[name="aemail"]').value;
      var city = document.querySelector('input[name="acity"]').value;

      // Add your validation logic here
      if (name.trim() === '' || phone.trim() === '' || date.trim() === '' || email.trim() === '' || city.trim() === '') {
        alert('Please fill in all the required fields.');
        return false;
      }

      // Check if the entered email matches the login email
      var loginEmail = "<?php echo $signname; ?>"; // Replace with the actual PHP variable holding login email
      if (email !== loginEmail) {
        alert('Please enter the same email used for login.');
        return false;
      }

      // Validate email format
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return false;
      }

      // Validate phone format (if needed)
      // var phoneRegex = /^[0-9]{6,}$/;
      // if (!phoneRegex.test(phone)) {
      //   alert('Please enter a valid phone number.');
      //   return false;
      // }

      // Validate the date to ensure it's not in the past
      var currentDate = new Date().toISOString().split('T')[0];
      if (date < currentDate) {
        alert('Please select a date that is today or in the future.');
        return false;
      }

      // Add more validation logic as needed

      return true;
    }
  });
</script>
        <?php 
include("footer.php");
?>