<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                ///Grabbing data
                $sub = htmlspecialchars($_POST["sub"]);
                $details = htmlspecialchars($_POST["details"]);

                $isValid = true;
                $successURL = "Location: ../../view/eaoumoon/home.php";
                $errorURL = "Location: ../../view/eaoumoon/complaint.php?";
                // Validate email
                if (empty($sub)) {
                    $errorURL .= "&e1=Please fill up the Subject properly";
                    $isValid = false;
                }
                else {
                     $errorURL .= "&e1=";
                }
                
                ///validate password
                if (empty($details)) {
                    $errorURL .= "&e2=Please write in Details";
                    $isValid = false;
                }
               else {
                  $errorURL .= "&e2=";
                }
            if ($isValid) {
        require '../model/complainDB.php';

        $sql = "INSERT INTO complaint (sub, details) 
                VALUES ('$sub', '$details')";

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