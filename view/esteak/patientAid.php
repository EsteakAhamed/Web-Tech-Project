<?php
require('../../controller/esteak/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealWell Hospital - Financial Aid Requests</title>
    <link rel="stylesheet" href="style/patientAid.css">
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
            <h1>Financial Aid Requests</h1>
            <table class="patient-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount Requested</th>
                        <th>Reason</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nirob</td>
                        <td>5,000</td>
                        <td>Surgery expenses</td>
                        <td>
                            <button class="approve-btn">Approve</button>
                            <button class="reject-btn">Reject</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>