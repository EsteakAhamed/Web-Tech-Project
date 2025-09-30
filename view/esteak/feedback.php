<?php
require('../../controller/esteak/sessionCheck.php');
$feedbackList = $_SESSION['feedbackList'] ?? [];
unset($_SESSION['feedbackList']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealWell Hospital - Feedbacks</title>
    <link rel="stylesheet" href="style/feedback.css">
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
                    <li><a href="patient.php">Patient</a></li>
                    <li class="active"><a href="../../controller/esteak/feedbackAction.php">Feedbacks</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <h1>Patient Feedbacks</h1>
            <div class="feedback-list">
                <?php if (!empty($feedbackList)): ?>
                    <?php foreach ($feedbackList as $fb): ?>
                        <div class="feedback-post patient-feedback">
                            <span class="icon">👥</span>
                            <div class="feedback-content">
                                <h3>Patient Feedback - <?php echo $fb['patient_name']; ?></h3>
                                <p><?php echo $fb['feedback']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No feedbacks found.</p>
                <?php endif; ?>
            </div>
        </main>
    </div>
</body>

</html>