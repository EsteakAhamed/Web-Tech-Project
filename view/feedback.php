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
            <a href="../controller/logoutAction.php"><button class="logout-btn">Logout</button></a>
            <nav class="sidebar-menu">
                <ul>
                    <li><a href="admin.php">Dashboard</a></li>
                    <li><a href="doctor.php">Doctor</a></li>
                    <li><a href="patient.php">Patient</a></li>
                    <li class="active"><a href="feedback.php">Feedbacks</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <h1>Patient Feedbacks</h1>
            <div class="feedback-list">
                <div class="feedback-post patient-feedback">
                    <span class="icon">👥</span>
                    <div class="feedback-content">
                        <h3>Patient Feedback - Md. Esteak Ahamed</h3>
                        <p>The staff was incredibly supportive, and the treatment I received was top-notch. Highly recommend HealWell Hospital!</p>
                    </div>
                </div>
                <div class="feedback-post patient-feedback">
                    <span class="icon">👥</span>
                    <div class="feedback-content">
                        <h3>Patient Feedback - MD Eaoumoon Haque</h3>
                        <p>The facilities are clean, and the doctors are very knowledgeable. My recovery was smooth thanks to the care provided.</p>
                    </div>
                </div>
                <div class="feedback-post patient-feedback">
                    <span class="icon">👥</span>
                    <div class="feedback-content">
                        <h3>Patient Feedback - Mahbubur Rahman</h3>
                        <p>Excellent service! The nurses were kind, and the hospital environment was very comforting.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>