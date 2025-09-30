<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $date   = htmlspecialchars($_GET["date"]);
    $time   = htmlspecialchars($_GET["time"]);
    $dName  = htmlspecialchars($_GET["dName"]);
    $reason = htmlspecialchars($_GET["reason"]);

    $isValid = true;
    $_SESSION['e1'] = $_SESSION['e2'] = "";

    // Date validation
    if (empty($date)) {
        $_SESSION['e1'] = "Please fill up the Date";
        $isValid = false;
    }

    // Time validation
    if (empty($time)) {
        $_SESSION['e2'] = "Please Choose a time";
        $isValid = false;
    }

    if ($isValid) {
        require '../../model/eaoumoon/appointmentDB.php';

        $sql = "INSERT INTO appointment (dNmae, `date`, `time`, reason) 
                VALUES ('$dName', '$date', '$time', '$reason')";

        if (mysqli_query($conn, $sql)) {
            // Success
            header("Location: ../../view/eaoumoon/bookAppointment.php?success=1");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        header("Location: ../../view/eaoumoon/bookAppointment.php");
        exit();
    }
}
?>
