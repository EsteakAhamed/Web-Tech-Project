<?php
session_start();
$email = $_SESSION['email'] ?? '';
$otp = $_SESSION['otp'] ?? '';

$emailError = $_SESSION['emailError'] ?? '';
$otpError = $_SESSION['otpError'] ?? '';
$newPassError = $_SESSION['newPassError'] ?? '';
$confirmPassError = $_SESSION['confirmPassError'] ?? '';
$success = $_SESSION['success'] ?? '';

unset($_SESSION['emailError'], $_SESSION['otpError'], $_SESSION['newPassError'], $_SESSION['confirmPassError'], $_SESSION['success']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="style/forgetPass.css">
</head>

<body>
    <header>
        HealWell Hospital
    </header>
    <main>
        <div class="container">
            <h2>Forgot Password</h2>
            <form action="../controller/forgetPassAction.php" method="post" id="resetForm" onsubmit="return validateForm(event)">
                <div class="form-group">
                    <label for="email">Registered Email</label>
                    <input id="email-id" type="email" name="email" placeholder="Enter your registered email" value="<?php echo $email ?>">
                    <div class="error"><?php echo $emailError ?></div>
                </div>
                <div class="form-group">
                    <label for="otp">OTP (One-Time Password)</label>
                    <input type="text" id="otp-id" name="otp" placeholder="Enter OTP 9876-E" value="<?php echo $otp ?>">
                    <div class="error"><?php echo $otpError ?></div>
                </div>
                <div class="form-group">
                    <label for="new">New Password</label>
                    <input type="password" id="new-pass-id" name="new" placeholder="Enter new password">
                    <div class="error"><?php echo $newPassError ?></div>
                </div>
                <div class="form-group">
                    <label for="confirm">Confirm New Password</label>
                    <input type="password" id="confirm-pass-id" name="confirm" placeholder="Re-enter new password">
                    <div class="error"><?php echo $confirmPassError ?></div>
                </div>
                <button id="btn-id" type="submit" class="btn">Reset Password</button>
                <p class="note"><?php echo $success ?></p>
            </form>
        </div>
    </main>
    <script src="script/forgetPass.js"></script>
</body>

</html>