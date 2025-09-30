<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: ../view/home.php");
    exit();
}
?>