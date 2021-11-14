<?php
session_start();
unset($_SESSION["user_email"]);
unset($_SESSION["admin_email"]);
unset($_SESSION["vendor_email"]);
echo "<script>window.location.href = 'index.php';</script>";

?>