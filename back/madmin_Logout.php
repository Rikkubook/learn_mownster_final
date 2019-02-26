<?php 
session_start();
session_destroy();
header("Location:madmin_login.php");
?>