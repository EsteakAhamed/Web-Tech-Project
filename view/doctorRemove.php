<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealWell Hospital - Remove Doctor</title>
  <link rel="stylesheet" href="style/doctorRemove.css">
</head>

<body>
  <div class="container">
    <aside class="sidebar">
      <div class="profile">
        <img src="assets/profile.png" alt="Profile">
        <h2><a href="profile.php">Profile</a></h2>
      </div>
      <a href="../controller/logoutAction.php"><button class="logout">Logout</button></a>
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
      <h1>Remove Doctor</h1>

      <form onsubmit="return validateSearch(event)">
        <input type="text" placeholder="Search by name" class="search-bar" id="searchInput">
        <button type="submit" class="search-btn">Search</button>
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
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Emon</td>
            <td>Cardiology</td>
            <td>emon@example.com</td>
            <td>A1B2C3</td>
            <td>$150,000</td>
            <td><button class="remove-btn">Remove</button></td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>

  <script>
    function validateSearch(event) {
      const searchInput = document.getElementById("searchInput");
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
</body>

</html>