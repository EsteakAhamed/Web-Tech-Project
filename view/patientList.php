<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealWell Hospital - Patient List</title>
    <link rel="stylesheet" href="style/patientList.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile-section">
                <img src="assets/profile.png" alt="Profile" class="profile-img">
                <h2><a href="profile.php">Profile</a></h2>
            </div>
            <a href="../controller/logoutAction.php"><button class="logout-btn">Logout</button></a>
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
            <h1>Patient List</h1>
            <form onsubmit="return validateSearch(event)">
                <input type="text" placeholder="Search by name" class="search-bar" id="searchInput">
                <button type="submit" class="search-btn">Search</button>
                <p class="error-message" id="searchError">Search field cannot be empty!</p>
            </form>
            <table class="patient-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nirob</td>
                        <td>25</td>
                        <td>nirob@example.com</td>
                        <td>017********</td>
                        <td>Noakhali Division</td>
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
