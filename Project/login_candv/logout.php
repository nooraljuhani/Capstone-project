<?php
session_start();
unset($_SESSION['ven_id']);
unset($_SESSION['ven_name']);
header("location:vlogin.php");
?>