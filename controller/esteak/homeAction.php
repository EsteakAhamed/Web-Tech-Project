<?php
session_start();
require("../../model/esteak/homeModel.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'] ?? '';
    $email = htmlspecialchars($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = $_POST['remember'] ?? '';

    $_SESSION['role'] = $role;
    $_SESSION['email'] = $email;
    $_SESSION['roleError'] = "";
    $_SESSION['emailError'] = "";
    $_SESSION['passwordError'] = "";
    $_SESSION['loginError'] = "";
    $_SESSION['isLoggedIn'] = false;

    $isValid = true;

    if (empty($role)) {
        $_SESSION['roleError'] = "Please select a role PHP";
        $isValid = false;
    }

    if (empty($email)) {
        $_SESSION['emailError'] = "Email is required PHP";
        $isValid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailError'] = "Invalid email format PHP";
        $isValid = false;
    }

    if (empty($password)) {
        $_SESSION['passwordError'] = "Password is required PHP";
        $isValid = false;
    } elseif (strlen($password) < 8) {
        $_SESSION['passwordError'] = "Password must be at least 8 characters PHP";
        $isValid = false;
    }

    if ($isValid && checkLogin($email, $password)) {
        $_SESSION['isLoggedIn'] = true;

        $conn = mysqli_connect("localhost", "root", "", "hms");
        $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        if ($row) {
            $_SESSION['fullname'] = $row['fullname'];
        }

        if ($remember === "remember") {
            setcookie("remember_email", $email, time() + 3600, "/");
            setcookie("remember_role", $role, time() + 3600, "/");
        } else {
            setcookie("remember_email", "", time() - 1, "/");
            setcookie("remember_role", "", time() - 1, "/");
        }

        if ($role === "Admin") {
            header("Location: ../../view/esteak/admin.php");
        } elseif ($role === "Patient") {
            header("Location: ../../view/eaoumoon/home.php");
        } elseif ($role === "Doctor") {
            header("Location: ../../view/nirob/home.php");
        } else {
            $_SESSION['loginError'] = "Unknown role selected PHP";
            header("Location: ../../view/esteak/home.php");
        }
        exit();
    } else {
        $_SESSION['loginError'] = "Invalid email, password, or role PHP";
        header("Location: ../../view/esteak/home.php");
        exit();
    }
}
