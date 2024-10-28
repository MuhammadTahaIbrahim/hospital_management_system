<?php 
include("admin/config.php");

if(isset($_POST['submit'])){
   
echo'
<script>
alert("First you can login as a patient")
window.location.href="patient/signin.php"
</script>
';
    }else{
        echo'
<script>
alert("you are not eligibal")
window.location.href="contact-us.php"
</script>
';
    }


?>