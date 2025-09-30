<?php
require('../../controller/esteak/sessionCheck.php');
$doctorList = $_SESSION['doctorList'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealWell Hospital - Doctor List</title>
  <link rel="stylesheet" href="style/doctorList.css">
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
      <h1>Doctor List</h1>

      <form onsubmit="return validateSearch(event)">
        <input type="text" placeholder="Search by name" class="search-bar">
        <button type="submit">Search</button>
        <p class="error-message" id="searchError">Search field cannot be empty!</p>
      </form>

      <table class="doctor-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Speciality</th>
            <th>Email</th>
            <th>Registration Number</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($doctorList)): ?>
            <?php foreach ($doctorList as $doctor): ?>
              <tr>
                <td><?php echo $doctor['name']; ?></td>
                <td><?php echo $doctor['speciality']; ?></td>
                <td><?php echo $doctor['email']; ?></td>
                <td><?php echo $doctor['regnumber']; ?></td>
                <td><?php echo '$' . number_format($doctor['salary'], 2); ?></td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="5">No doctors found.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </main>
  </div>

  <script>
    function validateSearch(event) {
      const searchInput = document.querySelector(".search-bar");
      const errorMsg = document.getElementById("searchError");

      if (searchInput.value.trim() === "") {
        errorMsg.style.display = "block";
        event.preventDefault();
        return false;
      } else {
        errorMsg.style.display = "none";
        return true;
      }
    }
  </script>
  <?php
  unset($_SESSION['doctorList']);
  ?>
</body>

</html>