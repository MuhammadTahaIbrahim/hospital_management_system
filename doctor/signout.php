<<?php
session_start();

session_destroy();
header("Location: /hospital/index.php");
exit(); // Ensure that subsequent code doesn't get executed
?>