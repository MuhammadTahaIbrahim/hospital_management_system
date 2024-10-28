<?php
include("config.php");

include("header.php");

$id = $_SESSION['id'];

if(isset($_POST['submit'])){
    if($id){
    $name = $_POST['cname'];
    $subject = $_POST['csubject'];
    $email = $_POST['cemail'];
    $cpname = $_POST['cpname'];
    $cmsg = $_POST['cmsg'];

    $insert = "INSERT INTO `contact`(`c_name` , `c_subject` , `C_email` , `c_pname` , `c_msg`) VALUES('$name' , '$subject' , '$email' , '$cpname' , '$cmsg')";
    $result = mysqli_query($conn,$insert);
    if($result){
echo'
<script>
alert("your message has been send")
window.location.href="contact-us.php"
</script>
';
    }else{
        echo'
<script>
alert("your message has been not send")
window.location.href="contact-us.php"
</script>
';
    }

}else{
    echo'
    <script>
    alert("first you can login")
    window.location.href="contact-us.php"
    </script>
    ';
}
}







?>
        <main class="main">
            <!------------------------------------------------
		    page header - start
		    ------------------------------------------------>
            <div class="page-header bg-more-light">
                <div class="container">
                    <h2 class="page-title">Treatments</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Treatments</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!------------------------------------------------
		    page header - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    contact details - start
		    ------------------------------------------------>
            <div class="container contact-detail-section padding-small">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-sm-8 col-10">
                        <h2 class="ls-n-20 text-center section-heading">We are here to help you.</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-sm-8 col-10">
                        <div class="icon-box icon-box-simple">
                            <figure>
                                <a class="icon-image"><i class="fal fa-phone"></i></a>
                            </figure>
                            <div class="icon-box-content text-center">
                                <p class="box-info mb-0">Please call on</p>
                                <h4 class="box-title mb-0">(888) 303-6699</h4>
                                <p class="box-desc ls-0 mb-0">to get support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-8 col-10">
                        <div class="icon-box icon-box-simple">
                            <figure>
                                <a class="icon-image"><i class="fal fa-envelope-open"></i></a>
                            </figure>
                            <div class="icon-box-content text-center">
                                <p class="box-info mb-0">Please email on</p>
                                <h4 class="box-title mb-0">info@caremed.com</h4>
                                <p class="box-desc ls-0 mb-0">to get support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-8 col-10">
                        <div class="icon-box icon-box-simple">
                            <figure>
                                <a class="icon-image"><i class="fal fa-map-marker-alt"></i></a>
                            </figure>
                            <div class="icon-box-content text-center">
                                <p class="box-info mb-0">Envato Pty Ltd.</p>
                                <h4 class="box-title mb-0">1201 King Street</h4>
                                <p class="box-desc ls-0 mb-0">Melbourne, Australia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------------------------
		    contact details - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    map section - start
		    ------------------------------------------------>
            <div class="container contact-map-section position-relative padding-small">
                <div id="map" style="height: 684px;background-color: #f4f4f4;border-radius: 30px;"></div>
                <div class="card-contact card-rating">
                    <p class="card-info ls-0">
                        Coming for a visit or a coffee?
                    </p>
                    <div class="btn-link">
                        <a href="#">Get Direction</a><i class="far fa-caret-right"></i>
                    </div>
                </div>
            </div>
            <!------------------------------------------------
		    map section - end
		    ------------------------------------------------>
            <!------------------------------------------------
		    contact form section - start
		    ------------------------------------------------>
            <div class="container contact-form-section padding-small">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-sm-8 col-10">
                        <h2 class="ls-n-20 text-center section-heading">Got questions?<br>Write us a message.</h2>
                    </div>
                </div>
                <?php
            $query = "SELECT * from `user` where `user_id` = '$id'";
            $res = mysqli_query($conn,$query);
            if($res){
                if(mysqli_num_rows($res)>0){
                    $data = mysqli_fetch_assoc($res)
               
             
            ?>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-10 offset-1">
                        <form method="POST" class="book-form book-form-contact">
                            <div class="row row-joined">
                                <div class="col-sm-12 col-lg-6 mt-2">
                                    <div class="input-group input-light">
                                        <input name="cname" type="text" class="form-control" placeholder="Name *" value="<?php echo $data['user_name']?>">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 mt-2">
                                    <div class="input-group input-light">
                                        <input name="csubject" type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 mt-2">
                                    <div class="input-group input-light">
                                        <input name="cemail" type="email" class="form-control" placeholder="Email *" value="<?php echo $data['user_email']?>">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 mt-2">
                                    <div class="input-group input-light">
                                        <input name="cpname" type="text" class="form-control" placeholder="Relation with patient *">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <div class="input-group input-light">
                                        <textarea name="cmsg" class="form-control text-area" placeholder="Message *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" value="register" class="btn btn-secondary-color btn-form d-flex mr-auto ml-auto mb-1">
                                <span>Send Message</span>
                            </button>
                        </form>
                    </div>
                </div>
                <?php 
                }
            }
                ?>
            </div>
            <!------------------------------------------------
		    contact form section - end
		    ------------------------------------------------>
        </main>
        <?php 
include("footer.php");
?>