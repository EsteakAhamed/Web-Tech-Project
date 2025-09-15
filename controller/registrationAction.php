<?php
session_start();
require("../model/registrationModel.php");

$fullname = htmlspecialchars($_POST['fullname'] ?? '');
$dob = $_POST['dob'] ?? '';
$gender = $_POST['gender'] ?? '';
$phone = htmlspecialchars($_POST['phone'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$address = htmlspecialchars($_POST['address'] ?? '');
$blood = $_POST['blood'] ?? '';
$password = $_POST['password'] ?? '';

$_SESSION['fullname'] = $fullname;
$_SESSION['dob'] = $dob;
$_SESSION['gender'] = $gender;
$_SESSION['phone'] = $phone;
$_SESSION['email'] = $email;
$_SESSION['address'] = $address;
$_SESSION['blood'] = $blood;

$_SESSION['nameError'] = '';
$_SESSION['dobError'] = '';
$_SESSION['genderError'] = '';
$_SESSION['phoneError'] = '';
$_SESSION['emailError'] = '';
$_SESSION['addressError'] = '';
$_SESSION['bloodError'] = '';
$_SESSION['passwordError'] = '';
$_SESSION['success'] = '';

$isValid = true;

if (empty($fullname)) {
    $_SESSION['nameError'] = "Full name is required PHP";
    $isValid = false;
} elseif (!preg_match("/^[A-Za-z\s]+$/", $fullname)) {
    $_SESSION['nameError'] = "Only letters and spaces allowed PHP";
    $isValid = false;
}

if (empty($dob)) {
    $_SESSION['dobError'] = "Date of birth is required PHP";
    $isValid = false;
}

if (empty($gender)) {
    $_SESSION['genderError'] = "Please select gender PHP";
    $isValid = false;
}

if (!preg_match("/^01[0-9]{9}$/", $phone)) {
    $_SESSION['phoneError'] = "Phone must start with 01 and be 11 digits PHP";
    $isValid = false;
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['emailError'] = "Invalid email address PHP";
    $isValid = false;
}

if (empty($address)) {
    $_SESSION['addressError'] = "Address is required PHP";
    $isValid = false;
}

if (empty($blood)) {
    $_SESSION['bloodError'] = "Please select a blood group PHP";
    $isValid = false;
}

if (empty($password)) {
    $_SESSION['passwordError'] = "Password is required PHP";
    $isValid = false;
} elseif (strlen($password) < 8) {
    $_SESSION['passwordError'] = "Password must be at least 8 characters PHP";
    $isValid = false;
}

if ($isValid) {
    $result = registerUser($fullname, $dob, $gender, $phone, $email, $address, $blood, $password);

    if ($result) {
        $_SESSION['success'] = "Registered successfully! PHP";
    } else {
        $_SESSION['success'] = "Registration failed. Please try again. PHP";
    }
}

header("Location: ../view/registration.php");
exit();
?>