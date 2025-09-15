<?php
session_start();

$currentPassword = $_POST['current'] ?? '';
$newPassword = $_POST['new'] ?? '';
$confirmPassword = $_POST['confirm'] ?? '';

$_SESSION['currentError'] = '';
$_SESSION['newError'] = '';
$_SESSION['confirmError'] = '';
$_SESSION['success'] = '';

$isValid = true;

if (empty($currentPassword) || strlen($currentPassword) < 8) {
    $_SESSION['currentError'] = "Current password must be at least 8 characters PHP";
    $isValid = false;
}

if (empty($newPassword) || strlen($newPassword) < 8) {
    $_SESSION['newError'] = "New password must be at least 8 characters PHP";
    $isValid = false;
}

if ($confirmPassword !== $newPassword) {
    $_SESSION['confirmError'] = "Passwords do not match PHP";
    $isValid = false;
}

if ($isValid) {
    $_SESSION['success'] = "Password changed successfully PHP";
}

header("Location: ../view/changePass.php");
exit();
?>