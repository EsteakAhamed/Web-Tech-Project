<?php
function registerUser($fullname, $dob, $gender, $phone, $email, $address, $blood, $password)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hms";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get values from registration form
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $blood = $_POST['blood'];
    $password = $_POST['password'];

    // Insert query
    $sql = "INSERT INTO registration (fullname, dob, gender, phone, email, address, blood, password) 
VALUES ('$fullname', '$dob', '$gender', '$phone', '$email', '$address', '$blood', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
