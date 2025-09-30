<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking History</title>
  <link rel="stylesheet" href="style/bookingHistory.css">
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

    <!-- Booking History Placeholder -->
    <div class="content">
      <div class="placeholder">
        <i class="bi bi-clock-history" style="font-size: 24px; display:block; margin-bottom:10px;"></i>
        Booking History will appear here.
      </div>
    </div>
  </div>
</body>
</html>
