<?php
session_start();
unset($_SESSION['logg']);
//unset($_SESSION['crt']);
header("location:index.php");
?>