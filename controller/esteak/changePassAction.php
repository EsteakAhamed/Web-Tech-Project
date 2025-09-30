<?php
session_start();
require('../../model/esteak/changePassModel.php');

error_log('Session fullname: ' . ($_SESSION['fullname'] ?? 'NOT SET'));

$currentPassword = $_POST['current'] ?? '';
$newPassword = $_POST['new'] ?? '';
$confirmPassword = $_POST['confirm'] ?? '';
$fullname = $_SESSION['fullname'] ?? '';

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
    if (!checkCurrentPassword($fullname, $currentPassword)) {
        $_SESSION['currentError'] = "Incorrect Current Password";
        header("Location: ../../view/esteak/changePass.php");
        exit();
    } else {
        if (updatePassword($fullname, $newPassword)) {
            $_SESSION['success'] = "Password changed successfully";
            header("Location: logoutAction.php");
            exit();
        } else {
            $_SESSION['currentError'] = "Failed to change password";
            header("Location: ../../view/esteak/changePass.php");
            exit();
        }
    }
} else {
    header("Location: ../../view/esteak/changePass.php");
    exit();
}

header("Location: ../../view/esteak/changePass.php");
exit();
?>