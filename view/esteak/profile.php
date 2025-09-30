<?php
require('../../controller/esteak/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile - HealWell</title>
    <link rel="stylesheet" href="style/profile.css">
</head>

<body>
    <header>
        <div class="header-content">
            <h1>HealWell Admin</h1>
        </div>
    </header>
    <div class="container">
        <div class="profile-card">
            <h2>Admin Profile</h2>
            <div class="profile-info">
                <div class="info-group">
                    <label>Full Name</label>
                    <p>Emon</p>
                </div>
                <div class="info-group">
                    <label>Email Address</label>
                    <p>admin@healwell.com</p>
                </div>
                <div class="info-group">
                    <label>Role</label>
                    <p>Administrator</p>
                </div>
                <div class="info-group">
                    <label>Last Login</label>
                    <p>September 05, 2025, 9:00 PM</p>
                </div>
            </div>
            <a href="changePass.php" class="btn">Change Password</a>
        </div>
    </div>
</body>

</html>