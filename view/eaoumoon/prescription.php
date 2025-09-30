<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Prescriptions</title>
  
  <link rel="stylesheet" href="style/prescription.css">
  <link rel="stylesheet" href="style/shared.css">
 <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<!-- Sidebar -->
<div class="sidebar">
  <h2><a href="home.php"><i class="fa-solid fa-hospital"></i> Patient Portal</a></h2>
  <a href="home.php"><i class="fa-solid fa-house"></i> Home</a>
  <a href="bookAppointment.php"><i class="fa-solid fa-calendar-plus"></i> Book Appointments</a>
  <a href="bookingHistory.php"><i class="fa-solid fa-clock-rotate-left"></i> Booking History</a>
  <a href="medicalReports.php"><i class="fa-solid fa-file-medical"></i> Medical Reports</a>
  <a href="invoice.php"><i class="fa-solid fa-file-invoice"></i> My Invoices</a>
  <a href="prescription.php"><i class="fa-solid fa-pills"></i> See Prescription</a>
  <a href="complaint.php"><i class="fa-solid fa-comment-dots"></i> Make Complaints</a>
</div>

  <!-- Main Area -->
  <div class="main">
    <!-- Navbar -->
    <div class="navbar">
  <button><a href="profile.php"><i class="fa-solid fa-user-circle"></i> Profile</a></button>
  <button><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></button>
</div>

    <!-- Prescription Section -->
    <div class="content">
      <h2 style="color:#0073e6; margin-bottom:20px;"><i class="bi bi-capsule"></i> My Prescriptions</h2>
      <table class="prescription-table">
        <thead>
          <tr>
            <th>Prescription ID</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Medications</th>
            <th>Required Tests</th>
            <th>Notes</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>RX-001</td>
            <td>2025-08-30</td>
            <td>Dr. John Doe</td>
            <td>Paracetamol, Ibuprofen</td>
            <td>Blood Test, X-Ray</td>
            <td>Take after meals</td>
            <td><button class="action-btn"><i class="bi bi-download"></i> Download</button></td>
          </tr>
          <tr>
            <td>RX-002</td>
            <td>2025-08-20</td>
            <td>Dr. Sarah Smith</td>
            <td>Amoxicillin</td>
            <td>None</td>
            <td>Finish full course</td>
            <td><button class="action-btn"><i class="bi bi-download"></i> Download</button></td>
          </tr>
          <tr>
            <td>RX-003</td>
            <td>2025-08-10</td>
            <td>Dr. Emily Johnson</td>
            <td>Vitamin D, Calcium</td>
            <td>Bone Density Scan</td>
            <td>Daily for 1 month</td>
            <td><button class="action-btn"><i class="bi bi-download"></i> Download</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
