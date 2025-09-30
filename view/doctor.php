<?php
require('../controller/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealWell Hospital - Doctor</title>
  <link rel="stylesheet" href="style/doctor.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="profile">
        <img src="assets/profile.png" alt="Profile">
        <h2><a href="profile.php">Profile</a></h2>
      </div>
      <a href="../controller/logoutAction.php"><button class="logout">Logout</button></a>
      <nav class="menu">
        <ul>
          <li><a href="admin.php">Dashboard</a></li>
          <li class="active"><a href="doctor.php">Doctor</a></li>
          <li><a href="patient.php">Patient</a></li>
          <li><a href="feedback.php">Feedbacks</a></li>
        </ul>
      </nav>
    </aside>

    <main class="main">
      <div class="cards">
        <a href="../controller/doctorListAction.php" class="card">
          <span class="icon">👨‍⚕️</span>
          <div>
            <h3>View Doctor's List</h3>
            <p>See all registered doctors</p>
          </div>
        </a>
        <a href="doctorAdd.php" class="card">
          <span class="icon">➕</span>
          <div>
            <h3>Add New Doctor</h3>
            <p>Register a new doctor</p>
          </div>
        </a>
        <a href="../controller/doctorRemoveAction.php" class="card">
          <span class="icon">❌</span>
          <div>
            <h3>Remove Doctor</h3>
            <p>Delete a doctor profile</p>
          </div>
        </a>
        <a href="doctorReq.php" class="card">
          <span class="icon">✅</span>
          <div>
            <h3>Approve Doctor's Requests</h3>
            <p>Approve pending doctor registrations</p>
          </div>
        </a>
        <a href="doctorLeave.php" class="card">
          <span class="icon">📩</span>
          <div>
            <h3>Leave Requests</h3>
            <p>Check doctor's leave applications</p>
          </div>
        </a>
      </div>
    </main>
  </div>
</body>
</html>
