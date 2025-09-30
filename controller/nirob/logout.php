<?php 
session_start();
session_destroy();

header("Location: ../../view/nirob/login.php");
exit();
?>