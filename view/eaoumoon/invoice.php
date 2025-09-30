<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Invoices</title>
  <link rel="stylesheet" href="style/invoice.css">
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

    <!-- Invoice Table Section -->
    <div class="content">
      <h2 style="color:#0073e6; margin-bottom:20px;"><i class="bi bi-receipt"></i> My Invoices</h2>
      <table class="invoice-table">
        <thead>
          <tr>
            <th>Invoice #</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>INV-001</td>
            <td>2025-09-01</td>
            <td>$150</td>
            <td>Paid</td>
            <td><button class="download-btn"><i class="bi bi-download"></i> Download</button></td>
          </tr>
          <tr>
            <td>INV-002</td>
            <td>2025-08-25</td>
            <td>$200</td>
            <td>Pending</td>
            <td><button class="download-btn"><i class="bi bi-download"></i> Download</button></td>
          </tr>
          <tr>
            <td>INV-003</td>
            <td>2025-08-15</td>
            <td>$100</td>
            <td>Paid</td>
            <td><button class="download-btn"><i class="bi bi-download"></i> Download</button></td>
          </tr>
          <!-- Add more invoices here -->
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
