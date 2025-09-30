<?php
function getAllFeedbacks() {
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

    $sql = "SELECT patient_name, feedback FROM feedback ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);

    $feedbacks = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $feedbacks[] = $row;
        }
    }

    mysqli_close($conn);

    return $feedbacks;
}
?>