<?php
require('../../controller/esteak/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealWell Hospital - Approve Doctor Requests</title>
  <link rel="stylesheet" href="style/doctorReq.css">
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
      <h1>Approve Doctor's Requests</h1>
      <table class="doctor-table">
        <thead>
          <tr>
            <th>Doctor Name</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Additional Note</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Emon</td>
            <td>Stethoscope</td>
            <td>1</td>
            <td>Urgent need</td>
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