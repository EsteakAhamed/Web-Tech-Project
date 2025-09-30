<?php
function getAllDoctors() {
    $servername = "localhost";
    $username = "root"; 
    $dbpassword = "";   
    $dbname = "hms";

    // Create connection
    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT name, speciality, email, regnumber, salary FROM doctor";
    $result = mysqli_query($conn, $sql);

    $doctors = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $doctors[] = $row;
        }
    }

    mysqli_close($conn);

    return $doctors;
}
?>