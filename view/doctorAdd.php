<?php
session_start();
$name = $_SESSION['name'] ?? '';
$email = $_SESSION['email'] ?? '';
$speciality = $_SESSION['speciality'] ?? '';
$regnumber = $_SESSION['regnumber'] ?? '';
$salary = $_SESSION['salary'] ?? '';

$nameError = $_SESSION['nameError'] ?? '';
$emailError = $_SESSION['emailError'] ?? '';
$passwordError = $_SESSION['passwordError'] ?? '';
$specialityError = $_SESSION['specialityError'] ?? '';
$regnumberError = $_SESSION['regnumberError'] ?? '';
$salaryError = $_SESSION['salaryError'] ?? '';
$pictureError = $_SESSION['pictureError'] ?? '';
$success = $_SESSION['success'] ?? '';

unset($_SESSION['nameError'], $_SESSION['emailError'], $_SESSION['passwordError'], $_SESSION['specialityError'], $_SESSION['regnumberError'], $_SESSION['salaryError'], $_SESSION['pictureError'], $_SESSION['success']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealWell Hospital - Add Doctor</title>
  <link rel="stylesheet" href="style/doctorAdd.css">
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
      <h1>Add New Doctor</h1>
      <form class="add-form" id="addDoctorForm" method="post" action="../controller/doctorAddAction.php" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name ?>">
        <div class="error"><?php echo $nameError ?></div>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>">
        <div class="error"><?php echo $emailError ?></div>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <div class="error"><?php echo $passwordError ?></div>

        <label for="speciality">Speciality:</label>
        <select id="speciality" name="speciality">
          <option value="">Select Speciality</option>
          <option value="cardiology" <?php if ($speciality == 'cardiology') echo 'selected'; ?>>Cardiology</option>
          <option value="neurology" <?php if ($speciality == 'neurology') echo 'selected'; ?>>Neurology</option>
          <option value="pediatrics" <?php if ($speciality == 'pediatrics') echo 'selected'; ?>>Pediatrics</option>
        </select>
        <div class="error"><?php echo $specialityError ?></div>

        <label for="regnumber">Registration Number:</label>
        <input type="text" id="regnumber" name="regnumber" value="<?php echo $regnumber ?>">
        <div class="error"><?php echo $regnumberError ?></div>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" value="<?php echo $salary ?>">
        <div class="error"><?php echo $salaryError ?></div>

        <label for="picture">Choose Picture:</label>
        <input type="file" id="picture" name="picture" accept="image/*">
        <div class="error"><?php echo $pictureError ?></div>

        <button type="submit">Add</button>
        <p class="note"><?php echo $success ?></p>
      </form>
    </main>
  </div>
  <!-- <script src="script/doctorAdd.js"></script> -->
</body>

</html>