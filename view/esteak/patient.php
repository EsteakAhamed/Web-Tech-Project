<?php
require('../../controller/esteak/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealWell Hospital - Patient</title>
    <link rel="stylesheet" href="style/patient.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile-section">
                <img src="assets/profile.png" alt="Profile" class="profile-img">
                <h2><a href="profile.php">Profile</a></h2>
            </div>
            <a href="../../controller/esteak/logoutAction.php"><button class="logout-btn">Logout</button></a>
            <nav class="sidebar-menu">
                <ul>
                    <li><a href="admin.php">Dashboard</a></li>
                    <li><a href="doctor.php">Doctor</a></li>
                    <li class="active"><a href="patient.php">Patient</a></li>
                    <li><a href="feedback.php">Feedbacks</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <div class="cards">
                <a href="../../controller/esteak/patientListAction.php" class="card view-card">
                    <span class="icon">👥</span>
                    <div>
                        <h3>View Patient List</h3>
                        <p>See all registered patients</p>
                    </div>
                </a>
                <a href="patientHistory.php" class="card history-card">
                    <span class="icon">📋</span>
                    <div>
                        <h3>Patient History</h3>
                        <p>View medical history records</p>
                    </div>
                </a>
                <a href="patientAid.php" class="card financial-card">
                    <span class="icon">💰</span>
                    <div>
                        <h3>Financial Aid Request</h3>
                        <p>Approve or deny patient aid requests</p>
                    </div>
                </a>
            </div>
        </main>
    </div>
</body>
</html>