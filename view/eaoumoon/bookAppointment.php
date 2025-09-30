<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Appointment</title>
  <link rel="stylesheet" href="style/bookAppointment.css">
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
  <button><a href="login."><i class="fa-solid fa-right-from-bracket"></i> Logout</a></button>
</div>

    <!-- Appointment Booking Form -->
    <div class="content">
      <div class="form-container">
        <h2><i class="bi bi-calendar-check"></i> Book an Appointment</h2>
        <form action="../../controller/eaoummon/appointment.php" method="GET">
          <div class="form-group">
            <label for="doctor">Choose Doctor</label>
            <select id="doctor-id" name="dName">
              <option value="">-- Select Doctor --</option>
              <option>Dr. John Smith (Cardiologist)</option>
              <option>Dr. Emily Carter (Pediatrician)</option>
              <option>Dr. Michael Brown (Orthopedic Surgeon)</option>
              <option>Dr. Sarah Wilson (Dermatologist)</option>
            </select>
            <br>
          <b><span id="doctor-span"></span></b>
          </div>

          <div class="form-group">
            <label for="date">Preferred Date</label>
            <input type="date" id="date-id" name="date">
            <br>
          <b><span id="date-span"></span></b>
          </div>

          <div class="form-group">
            <label for="time">Preferred Time</label>
            <input type="time" id="time-id" name="time">
            <br>
          <b><span id="time-span"></span></b>
          </div>

          <div class="form-group">
            <label for="reason">Reason for Appointment</label>
            <textarea id="reason-id" placeholder="Briefly describe your health issue..." name="reason"></textarea>
            <br>
            <b><span id="reason-span"></span></b>
          </div>

          <button type="submit" id="btn-id">
            <i class="fa-solid fa-circle-check"></i> Confirm Booking
          </button>
        </form>
      </div>
    </div>
  </div>
  <script src="script/sharedScript.js"></script>
  <script>
    document.getElementById("btn-id").addEventListener('click',(e)=>{
      e.preventDefault()
      const doctor= getFieldText("doctor-id")
      const date= getFieldText("date-id")
      const time= getFieldText("time-id")
      const reason= getFieldText("reason-id")
      let isValid=true

    if(doctor==="")
    {
      span("doctor-span","Complete this text")
      isValid=false
    }else{
      span("doctor-span","")
    }
    if(date=="")
    {
      span("date-span","Complete this field")
      isValid=false
    }else{
      span("date-span","")
    }
    if(time=="")
    {
      span("time-span","Enter this field")
      isValid=false
    }else{
      span("time-span","")
    }
    if(reason=="")
    {
      span("reason-span","Complete this field")
      isValid=false
    }else{
      span("reason-span","")
    }

    if(isValid)
    {
      alert('Appointment Request Sent')
      e.target.closest('form').submit();
    }

    })
    
  </script>
</body>
</html>

