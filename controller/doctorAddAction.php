<?php
session_start();

$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$speciality = $_POST['speciality'] ?? '';
$regnumber = htmlspecialchars($_POST['regnumber'] ?? '');
$salary = $_POST['salary'] ?? '';
$picture = $_FILES['picture'] ?? null;

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['speciality'] = $speciality;
$_SESSION['regnumber'] = $regnumber;
$_SESSION['salary'] = $salary;

$_SESSION['nameError'] = '';
$_SESSION['emailError'] = '';
$_SESSION['passwordError'] = '';
$_SESSION['specialityError'] = '';
$_SESSION['regnumberError'] = '';
$_SESSION['salaryError'] = '';
$_SESSION['pictureError'] = '';
$_SESSION['success'] = '';

$isValid = true;

if (!preg_match("/^[A-Za-z\s]+$/", $name)) {
    $_SESSION['nameError'] = "Name must contain only alphabets PHP";
    $isValid = false;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['emailError'] = "Please enter a valid email address PHP";
    $isValid = false;
}

if (empty($password) || strlen($password) < 8) {
    $_SESSION['passwordError'] = "Password must be at least 8 characters PHP";
    $isValid = false;
}

if (empty($speciality)) {
    $_SESSION['specialityError'] = "Please select a speciality PHP";
    $isValid = false;
}

if (!preg_match("/^[A-Z0-9]{6}$/", $regnumber) || !preg_match("/[A-Z]/", $regnumber) || !preg_match("/\d/", $regnumber)) {
    $_SESSION['regnumberError'] = "Registration number must be 6 chars with uppercase letters and numbers PHP";
    $isValid = false;
}

if (!is_numeric($salary) || $salary <= 0) {
    $_SESSION['salaryError'] = "Salary must be positive number PHP";
    $isValid = false;
}

if (!$picture || $picture['error'] !== 0 || strpos($picture['type'], 'image/') !== 0) {
    $_SESSION['pictureError'] = "Please select a valid image file PHP";
    $isValid = false;
}

if ($isValid) {
    $_SESSION['success'] = "Doctor added successfully PHP";
}

header("Location: ../view/doctorAdd.php");
exit();
?>