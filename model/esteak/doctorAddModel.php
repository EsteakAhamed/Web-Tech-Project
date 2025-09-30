<?php
function addDoctor($name, $email, $password, $speciality, $regnumber, $salary, $picture) {
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

    // Handle image upload
    $pictureName = '';
    if ($picture && $picture['error'] === 0) {
        $targetDir = "../uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $pictureName = basename($picture["name"]);
        $targetFile = $targetDir . $pictureName;

        move_uploaded_file($picture["tmp_name"], $targetFile);
    }

    // Insert query
    $sql = "INSERT INTO doctor (name, email, password, speciality, regnumber, salary, picture)
            VALUES ('$name', '$email', '$password', '$speciality', '$regnumber', '$salary', '$pictureName')";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}
?>