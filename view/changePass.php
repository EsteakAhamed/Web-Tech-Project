<?php
session_start();
$currentError = $_SESSION['currentError'] ?? '';
$newError = $_SESSION['newError'] ?? '';
$confirmError = $_SESSION['confirmError'] ?? '';
$success = $_SESSION['success'] ?? '';

unset($_SESSION['currentError'], $_SESSION['newError'], $_SESSION['confirmError'], $_SESSION['success']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="style/changePass.css">
</head>

<body>
    <div class="container">
        <h2>Change Password</h2>
        <form action="../controller/changePassAction.php" method="post" id="changePassForm" onsubmit="return validateForm(event)">
            <div class="form-group">
                <label for="current">Current Password</label>
                <input type="password" id="current-pass" name="current" placeholder="Enter current password">
                <div class="error"><?php echo $currentError ?></div>
            </div>
            <div class="form-group">
                <label for="new">New Password</label>
                <input type="password" id="new-pass" name="new" placeholder="Enter new password">
                <div class="error"><?php echo $newError ?></div>
            </div>
            <div class="form-group">
                <label for="confirm">Confirm New Password</label>
                <input type="password" id="confirm-pass" name="confirm" placeholder="Re-enter new password">
                <div class="error"><?php echo $confirmError ?></div>
            </div>
            <button type="submit" id="btn-id" class="btn">Update Password</button>
            <p class="note"><?php echo $success ?></p>
        </form>
    </div>
    <!-- <script src="script/changePass.js"></script> -->
</body>

</html>