<?php
session_start();
require("../model/homeModel.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'] ?? '';
    $username = htmlspecialchars($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = $_POST['remember'] ?? '';

    $_SESSION['role'] = $role;
    $_SESSION['username'] = $username;
    $_SESSION['roleError'] = "";
    $_SESSION['usernameError'] = "";
    $_SESSION['passwordError'] = "";
    $_SESSION['loginError'] = "";
    $_SESSION['isLoggedIn'] = false;

    $isValid = true;

    if (empty($role)) {
        $_SESSION['roleError'] = "Please select a role PHP";
        $isValid = false;
    }

    if (empty($username)) {
        $_SESSION['usernameError'] = "Username is required PHP";
        $isValid = false;
    } elseif (!preg_match("/^[A-Za-z0-9_]+$/", $username)) {
        $_SESSION['usernameError'] = "Only letters, numbers, and underscores allowed PHP";
        $isValid = false;
    }

    if (empty($password)) {
        $_SESSION['passwordError'] = "Password is required PHP";
        $isValid = false;
    } elseif (strlen($password) < 8) {
        $_SESSION['passwordError'] = "Password must be at least 8 characters PHP";
        $isValid = false;
    }

    if ($isValid && checkLogin($username, $password)) {
        $_SESSION['isLoggedIn'] = true;

        $conn = mysqli_connect("localhost", "root", "", "hms");
        $sql = "SELECT * FROM registration WHERE fullname='$username' AND password='$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        if ($row) {
            $_SESSION['fullname'] = $row['fullname']; 
        }

        if ($remember === "remember") {
            setcookie("remember_username", $username, time() + 3600, "/");
            setcookie("remember_role", $role, time() + 3600, "/");
        } else {
            setcookie("remember_username", "", time() - 1, "/");
            setcookie("remember_role", "", time() - 1, "/");
        }

        header("Location: ../view/admin.php");
        exit();
    } else {
        $_SESSION['loginError'] = "Invalid username, password, or role PHP";
        header("Location: ../view/home.php");
        exit();
    }
}
?>
