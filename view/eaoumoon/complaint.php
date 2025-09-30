<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  
  <link rel="stylesheet" href="style/complaint.css">
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

    <!-- Complaint Form -->
    <div class="content">
      <div class="complaint-form">
        <h2><i class="fa-solid fa-comment-dots"></i>Submit a Complaint </h2>

        <form action="../../controller/eaoumoon/complaintActionController.php" method="post">
          <div class="form-group">
            <label for="subject">Complaint Subject</label>
            <input type="text" id="com-id" placeholder="Enter complaint subject" name="sub" >
            <br>
            <b><span id="com-span"></span></b>
            <span><?php echo $_GET['e1'] ?? ''  ?></span>
          </div>

          <div class="form-group">
            <label for="details">Complaint Details</label>
            <textarea id="detail-id" placeholder="Describe your complaint here..." name="details"></textarea>
            <br>
            <b><span id="detail-span"></span></b>
            <span><?php echo $_GET['e2'] ?? ''  ?></span>
          </div>

          <button type="submit" class="submit-btn" id="btn-id"><i class="bi bi-send"></i> Submit Complaint</button>
        </form>
      </div>
    </div>
  </div>
  <script src="script/sharedScript.js"></script>
  <script>
    document.getElementById("btn-id").addEventListener('click',(e)=>{
      e.preventDefault()
      const complaint= getFieldText("com-id")
      const detail= getFieldText("detail-id")
      let isValid=true

    if(complaint==="")
    {
      //span("com-span","Complete this text")
      isValid=false
    }else{
      //span("com-span","")
    }
    if(detail=="")
    {
      //span("detail-span","Complete this field")
      isValid=false
    }else{
      //span("detail-span","")
    }

    if(isValid)
    {
      alert('Complaint received successfully')
      e.target.closest('form').submit();
    }

    })
    
  </script>
</body>
</html>
