

<?php 
include("config.php");
include("header.php");

?>



<style>

body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}


</style>
<?php
if (isset($_POST['btn_up'])) {
    $id = $_POST['did'];
    $name = $_POST['dname'];
    $age = $_POST['dage'];
    $des = $_POST['ddes'];
    $days = implode(', ', $_POST['dday']);

    $update = "UPDATE doctor AS d 
               INNER JOIN schedule AS s ON s.s_docfk = d.doc_id 
               SET 
               d.doc_name = '$name',
               d.doc_age = '$age',
               d.doc_des = '$des',
               s.s_day = '$days'
               WHERE 
               d.doc_id = '$id';";

    $result = mysqli_query($conn, $update);

    if ($result) {
        echo '
        <script>
            alert("Update data successful");
            window.location.href="doc_profile.php";
        </script>';
    } else {
        echo '
        <script>
            alert("Data not updated");
            window.location.href="up-profile.php";
        </script>';
    }
}
?>

<div style="margin-left:25%;" class="container-xl px-4 mt-15">
    <!-- Account page navigation-->
    <div class="row">
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $fetch = "
                        SELECT *
                        FROM doctor AS d
                        INNER JOIN schedule AS s ON s.s_docfk = d.doc_id
                        INNER JOIN department AS de ON de.did = d.doc_didfk
                        WHERE d.doc_id = '$id'
                    ";
                        $result = mysqli_query($conn, $fetch);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                $row = mysqli_fetch_assoc($result);
                    ?>
                                <form method="post">
                                    <!-- Form Group (username)-->
                                    <!-- Form Row-->
                                    <!-- Form Row-->
                                    <!-- Form Group (email address)-->
                                    <input type="hidden" name="did" id="" value="<?php echo $row['doc_id']?>">
                                    <div class="mb-3">
                                        <label class=" mb-1" for="inputEmailAddress">Name</label>
                                        <input name="dname" class="form-control form-control-lg" id="inputEmailAddress" type="text" value="<?php echo $row['doc_name']?>">
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label class="mb-1" for="inputEmailAddress">Age</label>
                                        <input name="dage" class="form-control form-control-lg" id="inputEmailAddress" type="number" value="<?php echo $row['doc_age']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1" for="inputEmailAddress">Description</label>
                                        <input name="ddes" class="form-control form-control-lg" id="inputEmailAddress"  type="text" value="<?php echo $row['doc_des']?>">
                                    </div>
                                    <div class="mb-3 mx-3">
        <label class="mb-1 d-block" for="inputEmailAddress">Available day</label>
        <?php
        $days = explode(', ', $row['s_day']);
        $allDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        foreach ($allDays as $day) {
            $checked = in_array($day, $days) ? 'checked' : '';
        ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="dday[]" value="<?php echo $day; ?>" id="<?php echo strtolower($day); ?>" <?php echo $checked; ?>>
                <label class="form-check-label mx-3" for="<?php echo strtolower($day); ?>"><?php echo $day; ?></label>
            </div>
        <?php
        }
        ?>
    </div>

                                    <!-- Form Row-->
                                    <!-- Save changes button-->
                                    <div class="row my-5 text-end">
        <div class="col-sm-12">
            <button class="btn btn-secondary-color btn-sm" type="submit" name="btn_up"><span>Save Changes</span></button>
        </div>
    </div>
                                    <!-- <button name="btn_up" type="register" value="register" id="button">Save Changes</button> -->
                                </form>
                    <?php 
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include("footer.php");
?>