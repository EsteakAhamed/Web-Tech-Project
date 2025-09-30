<?php
session_start();

$email = htmlspecialchars($_POST['email'] ?? '');
$otp = htmlspecialchars($_POST['otp'] ?? '');
$newPassword = $_POST['new'] ?? '';
$confirmPassword = $_POST['confirm'] ?? '';

$_SESSION['email'] = $email;
$_SESSION['otp'] = $otp;

$_SESSION['emailError'] = '';
$_SESSION['otpError'] = '';
$_SESSION['newPassError'] = '';
$_SESSION['confirmPassError'] = '';
$_SESSION['success'] = '';

$isValid = true;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['emailError'] = "Please enter a valid email address PHP";
    $isValid = false;
}

if (!preg_match("/^\d{4}-[A-Z]$/", $otp)) {
    $_SESSION['otpError'] = "OTP must be in the format 9876-E PHP";
    $isValid = false;
}

if (empty($newPassword) || strlen($newPassword) < 8) {
    $_SESSION['newPassError'] = "New password must be at least 8 characters long PHP";
    $isValid = false;
}

if ($confirmPassword !== $newPassword) {
    $_SESSION['confirmPassError'] = "Passwords do not match PHP";
    $isValid = false;
}

if ($isValid) {
    $_SESSION['success'] = "Password reset successfully PHP";
}

header("Location: ../../view/esteak/forgetPass.php");
exit();
?>