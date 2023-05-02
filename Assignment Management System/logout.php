<?php
session_start();
session_unset();
session_destroy(); 
header('location:index.php');
// setcookie("display", NULL, time() - 3600);
?>