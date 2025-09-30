<?php
function registerUser($fullname, $dob, $gender, $phone, $email, $address, $blood, $password)
{
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

    // Escape values to prevent SQL injection
    $fullname = mysqli_real_escape_string($conn, $fullname);
    $dob = mysqli_real_escape_string($conn, $dob);
    $gender = mysqli_real_escape_string($conn, $gender);
    $phone = mysqli_real_escape_string($conn, $phone);
    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $blood = mysqli_real_escape_string($conn, $blood);
    $password = mysqli_real_escape_string($conn, $password);

    // Insert query
    $sql = "INSERT INTO registration (fullname, dob, gender, phone, email, address, blood, password)
            VALUES ('$fullname', '$dob', '$gender', '$phone', '$email', '$address', '$blood', '$password')";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}
