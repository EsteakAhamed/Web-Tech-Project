<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Financial Aid Request</title>
  <link rel="stylesheet" href="style/financialrequest.css">
  <link rel="stylesheet" href="style/shared.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

    <!-- Content -->
    <div class="content">
      <div class="form-container">
        <h2><i class="fa-solid fa-hand-holding-dollar"></i> Financial Aid Request</h2>
        <form>
          <label for="fullName"><i class="fa-solid fa-user"></i> Full Name</label>
          <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>

          <label for="reason"><i class="fa-solid fa-circle-info"></i> Reason for Request</label>
          <textarea id="reason" name="reason" rows="4" placeholder="Describe why you need financial aid" required></textarea>

          <label for="amount"><i class="fa-solid fa-dollar-sign"></i> Requested Amount</label>
          <input type="number" id="amount" name="amount" placeholder="Enter requested amount" required>

          <label for="documents"><i class="fa-solid fa-file-upload"></i> Supporting Documents</label>
          <input type="file" id="documents" name="documents" multiple>

          <button type="submit"><i class="fa-solid fa-paper-plane"></i> Submit Request</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
