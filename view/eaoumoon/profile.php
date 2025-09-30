<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Profile</title>
  <link rel="stylesheet" href="style/shared.css"> 
  <link rel="stylesheet" href="style/profile.css">
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

    <!-- Profile Content -->
    <div class="content">
      <div class="profile-container">
        <h2><i class="fa-solid fa-id-card"></i> My Profile</h2>
        
        <div class="profile-field">
          <label>Full Name:</label>
          <span id="profile-name">John Doe</span>
        </div>

        <div class="profile-field">
          <label>Date of Birth:</label>
          <span id="profile-dob">1990-01-01</span>
        </div>

        <div class="profile-field">
          <label>Gender:</label>
          <span id="profile-gender">Male</span>
        </div>

        <div class="profile-field">
          <label>Phone Number:</label>
          <span id="profile-phone">+8801XXXXXXXXX</span>
        </div>

        <div class="profile-field">
          <label>Email:</label>
          <span id="profile-email">example@mail.com</span>
        </div>

        <div class="profile-field">
          <label>Address:</label>
          <span id="profile-address">Dhaka, Bangladesh</span>
        </div>

        <div class="profile-field">
          <label>Blood Group:</label>
          <span id="profile-blood">A+</span>
        </div>

        <!-- Current Password -->
        <div class="profile-field">
            <label>Current Password:</label>
            <span id="profile-password">********</span>
        </div>

        <!-- Change Password Button -->
        <div style="text-align: center; margin-top: 25px;">
            <button class="btn-change-pass-btn"><a href="changePassword.php"><i class="fa-solid fa-key"></i> Change Password</a></button>
            <button class="btn-change-pass-btn"><a href="deleteProfile.php"><i class="fa-solid fa-trash"></i> Delete Profile</a></button>
        </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
