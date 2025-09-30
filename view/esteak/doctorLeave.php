<?php
require('../../controller/esteak/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealWell Hospital - Leave Requests</title>
  <link rel="stylesheet" href="style/doctorLeave.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="profile">
        <img src="assets/profile.png" alt="Profile">
        <h2><a href="profile.php">Profile</a></h2>
      </div>
      <a href="../../controller/esteak/logoutAction.php"><button class="logout">Logout</button></a>
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
      <h1>Leave Requests</h1>
      <table class="doctor-table">
        <thead>
          <tr>
            <th>Doctor Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Reason</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Emon</td>
            <td>2025-09-10</td>
            <td>2025-09-15</td>
            <td>Family vacation</td>
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