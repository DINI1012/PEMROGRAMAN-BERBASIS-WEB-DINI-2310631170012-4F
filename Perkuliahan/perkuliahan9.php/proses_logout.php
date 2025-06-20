<?php 

session_start();
session_unset();
session_destroy();

header("Location: ../views/login.php");  // Arahkan ke halaman login
exit();

?>