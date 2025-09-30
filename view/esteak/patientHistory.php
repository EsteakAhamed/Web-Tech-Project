<?php
require('../../controller/esteak/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealWell Hospital - Patient History</title>
    <link rel="stylesheet" href="style/patientHistory.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile-section">
                <img src="assets/profile.png" alt="Profile" class="profile-img">
                <h2><a href="profile.php">Profile</a></h2>
            </div>
            <a href="../../controller/esteak/logoutAction.php"><button class="logout-btn">Logout</button></a>
            <nav class="sidebar-menu">
                <ul>
                    <li><a href="admin.php">Dashboard</a></li>
                    <li><a href="doctor.php">Doctor</a></li>
                    <li class="active"><a href="patient.php">Patient</a></li>
                    <li><a href="feedback.php">Feedbacks</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <h1>Patient History</h1>
            <form onsubmit="return validateSearch(event)">
                <input type="text" placeholder="Search by name" class="search-bar" id="searchInput">
                <button type="submit" class="search-btn">Search</button>
                <p class="error-message" id="searchError">Search field cannot be empty!</p>
            </form>
            <table class="patient-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date of Visit</th>
                        <th>Diagnosis</th>
                        <th>Treatment</th>
                        <th>Doctor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nirob</td>
                        <td>2025-08-15</td>
                        <td>Fever</td>
                        <td>NAPA 500mg</td>
                        <td>Dr. Emon</td>
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