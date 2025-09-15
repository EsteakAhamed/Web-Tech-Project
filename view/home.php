<?php
session_start();
$username = $_SESSION['username'] ?? ($_COOKIE['remember_username'] ?? '');
$role = $_SESSION['role'] ?? ($_COOKIE['remember_role'] ?? '');
$roleError = $_SESSION['roleError'] ?? '';
$usernameError = $_SESSION['usernameError'] ?? '';
$passwordError = $_SESSION['passwordError'] ?? '';
$loginError = $_SESSION['loginError'] ?? '';

unset($_SESSION['roleError'], $_SESSION['usernameError'], $_SESSION['passwordError'], $_SESSION['loginError']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealWell Hospital</title>
    <link rel="stylesheet" href="style/home.css">
</head>

<body>
    <header>
        <div class="header-left">
            <h1>HealWell Hospital</h1>
        </div>
        <div class="header-right">
            <span class="contact">
                <img src="assets/phone.png" alt="Phone" class="icon">
                01*********
            </span>
            <span class="location">
                <img src="assets/location.png" alt="Location" class="icon">
                Dhaka, Bangladesh
            </span>
        </div>
    </header>
    <nav>
        <ul class="nav-left">
            <li><a href="#">About Us</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    </nav>
    <div class="main-content">
        <div class="login-container">
            <form action="../controller/homeAction.php" method="post" id="loginForm" onsubmit="return validateForm(event)">
                <h2 class="login-title">Login As</h2>
                <div class="radio-group">
                    <input type="radio" id="patient" name="role" value="Patient" onchange="updateTheme()" <?php if ($role === 'Patient') echo 'checked'; ?>>
                    <label for="patient">Patient</label>

                    <input type="radio" id="doctor" name="role" value="Doctor" onchange="updateTheme()" <?php if ($role === 'Doctor') echo 'checked'; ?>>
                    <label for="doctor">Doctor</label>

                    <input type="radio" id="admin" name="role" value="Admin" onchange="updateTheme()" <?php if ($role === 'Admin') echo 'checked'; ?>>
                    <label for="admin">Admin</label>
                </div>
                <div class="error" id="roleError"><?php echo $roleError; ?></div>

                <input type="text" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>">
                <div class="error" id="usernameError"><?php echo $usernameError; ?></div>

                <input type="password" id="password" name="password" placeholder="Password">
                <div class="error" id="passwordError"><?php echo $passwordError; ?></div>

                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember" value="remember" <?php if (isset($_COOKIE['remember_username'])) echo 'checked'; ?>>
                    <label for="remember">Remember Me</label>
                </div>

                <?php if ($loginError): ?>
                    <div class="error"><?php echo $loginError; ?></div>
                <?php endif; ?>

                <button type="submit">Login</button>
                <p class="forgot-password"><a href="forgetPass.php">Forget Password?</a></p>
            </form>
        </div>
    </div>
    <!-- <script src="script/home.js"></script> -->
</body>

</html>