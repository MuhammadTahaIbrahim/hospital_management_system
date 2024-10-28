<?php 
include("admin/config.php");



if(isset($_POST['register'])){
 
echo'
<script>
alert("First you can login as a pateint")
window.location.href="patient/signin.php"
</script>
';
    }else{
        echo'
<script>
alert("you are not eligibal")
window.location.href="reviews.php"
</script>
';
    }
?>