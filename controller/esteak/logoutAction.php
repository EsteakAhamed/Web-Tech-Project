<?php
session_start();
session_destroy();
header("Location: ../../view/esteak/home.php");
exit();
?>