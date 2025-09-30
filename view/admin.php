<?php
require('../controller/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealWell Hospital - Admin</title>
    <link rel="stylesheet" href="style/admin.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile-section">
                <img src="assets/profile.png" alt="Profile" class="profile-img">
                <h2><a href="profile.php">Profile</a></h2>
            </div>
            <a href="../controller/logoutAction.php"><button class="logout-btn">Logout</button></a>
            <nav class="sidebar-menu">
                <ul>
                    <li class="active"><a href="admin.php">Dashboard</a></li>
                    <li><a href="doctor.php">Doctor</a></li>
                    <li><a href="patient.php">Patient</a></li>
                    <li><a href="feedback.php">Feedbacks</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <div class="cards">
                <a href="doctor.php" class="card doctor-card">
                    <span class="icon">👨‍⚕️</span>
                    <div>
                        <h3>Doctors</h3>
                        <p>View and manage doctor profiles</p>
                    </div>
                </a>
                <a href="patient.php" class="card patient-card">
                    <span class="icon">👥</span>
                    <div>
                        <h3>Patients</h3>
                        <p>View and manage patient records</p>
                    </div>
                </a>
                <a href="feedback.php" class="card feedback-card">
                    <span class="icon">📝</span>
                    <div>
                        <h3>Feedbacks</h3>
                        <p>Check patient feedbacks</p>
                    </div>
                </a>
            </div>
        </main>
    </div>
</body>
</html>