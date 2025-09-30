<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Reports</title>
  <link rel="stylesheet" href="style/medicalReports.css">
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

    <!-- Medical Reports Section -->
    <div class="content">
      <div class="form-container">
        <h2><i class="bi bi-file-medical"></i> Medical Reports</h2>
        <form>

          <div class="form-group">
            <label for="upload-report">Upload Report</label>
            <input type="file" id="report-id" accept=".pdf,.jpg,.png">
            <br>
            <b><span id="report-span"></span></b>
          </div>

          <div class="form-group">
            <label for="notes">Notes / Description</label>
            <textarea id="notes-id" placeholder="Add any notes about the report..."></textarea>
            <br>
            <b><span id="notes-span"></span></b>
          </div>

          <button type="submit" id="btn-id" ><i class="bi bi-cloud-upload"></i> Upload Report</button>
        </form>
      </div>
    </div>
  </div>
   <script src="script/sharedScript.js"></script>
  <script>
    document.getElementById("btn-id").addEventListener('click',(e)=>{
      e.preventDefault()
      const report= getFieldText("report-id")
      const note= getFieldText("notes-id")
      let isValid=true

    if(report==="")
    {
      span("report-span","Share updated report")
      isValid=false
    }else{
      span("report-span","")
    }
    if(note=="")
    {
      span("notes-span","Complete this field")
      isValid=false
    }else{
      span("notes-span","")
    }

    if(isValid)
    {
      alert('Report sent successfully')
    }

    })
    
  </script>
</body>
</html>
