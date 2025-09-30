<?php
function getAllPatients() {
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

    $sql = "SELECT name, age, email, phone, address FROM patient";
    $result = mysqli_query($conn, $sql);

    $patients = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $patients[] = $row;
        }
    }

    mysqli_close($conn);

    return $patients;
}
?>