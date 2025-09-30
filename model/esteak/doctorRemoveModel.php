<?php
function removeDoctor($regnumber) {
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

    $sql = "DELETE FROM doctor WHERE regnumber='$regnumber'";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}
?>