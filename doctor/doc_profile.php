<?php include("header.php"); ?>
<?php include("config.php"); ?>

<style>
    body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        border-radius: 15px;
    }

    .card-body {
        min-height: 1px;
        padding: 1rem;
        border-radius: 15px;
    }

    #button {
        background-color: blue;
        color: white;
        border: 2px solid blue;
        border-radius: 50px;
        height: 35px;
        width: 70px;
    }
</style>
<?php 
$id = $_SESSION['did'];
$fetch = "
    SELECT *
    FROM doctor AS d
    INNER JOIN schedule AS s ON s.s_docfk = d.doc_id
    INNER JOIN department AS de ON de.did = d.doc_didfk
    WHERE d.doc_id = '$id'
";

$result = mysqli_query($conn,$fetch);
if($result){
  if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result)

  
?>
<div class="container mt-13">
    <div class="main-body">
    
       
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div style="height: 330px;" class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo "../admin/images/" . $row['doc_img'] ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 class="sub-title"><?php echo $row['doc_name']?></h4>
                      <p class="text-secondary mb-1"><?php echo $row['doc_email']?></p>
                     
                      
                    </div>
                  </div>
                </div>
              </div>
         
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div  style="height: 100%;" class="card-body">
                  <div class="row mt-2 mx-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['doc_name']?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row mt-3  mx-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['doc_email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-3  mx-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Age</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['doc_age']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-3  mx-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Description</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['doc_des']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-3  mx-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['dname']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-3  mx-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Available day</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['s_day']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-3  mx-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">start timing</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo date('h:i A', strtotime($row['s_stime'])) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-3  mx-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">End timing</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                  <?php echo date('h:i A', strtotime($row['s_etime'])) ?>
                    </div>
                  </div>
                  <hr>
              
                
            
                  
                  <div class="row my-5 text-end">
                    <div class="col-sm-12">
                   <a class="btn btn-secondary-color btn-sm" href="up_profile.php?id=<?php echo $row['doc_id']?>"><span>Edit</span></a>
                    </div>
                  </div>
                </div>
              </div>

        



            </div>
          </div>
        

        </div>
    </div>
  <?php 
  }
      
    
}

          ?>
    <br><br>
    <?php 
include("footer.php");
?>