<?php 
session_start();
session_destroy();

header("Location: ../../view/eaoumoon/login.php");

?>