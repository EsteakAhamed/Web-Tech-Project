<?php
session_start();
require '../../model/eaoumoon/registrationDB.php'; // $conn
require '../../model/eaoumoon/changePassDB.php';    // checkLogin()

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $current = trim(htmlspecialchars($_POST["current"]));
    $new     = trim(htmlspecialchars($_POST["new"]));
    $confirm = trim(htmlspecialchars($_POST["confirm"]));

    $_SESSION['e1'] = $_SESSION['e2'] = $_SESSION['e3'] = "";
    $isValid = true;

    $successURL = "Location: ../../view/eaoumoon/login.php";
    $errorURL   = "Location: ../../view/eaoumoon/changePassword.php?";

    // Check current password
    if (empty($current)) {
        $_SESSION['e1'] = "Please fill up the current password";
        $isValid = false;
    } else if (!checkLogin($conn, $current)) {
        $_SESSION['e1'] = "Wrong current password";
        $isValid = false;
    }

    // Check new password
    if (empty($new)) {
        $_SESSION['e2'] = "Please fill up the new password";
        $isValid = false;
    }

    // Check confirm
    if (empty($confirm)) {
        $_SESSION['e3'] = "Please fill up the confirm password";
        $isValid = false;
    } else if ($new !== $confirm) {
        $_SESSION['e3'] = "New and Confirm passwords do not match";
        $isValid = false;
    }

    // Update password
    if ($isValid) {
        $sql = "UPDATE registration 
                SET passWord = '$confirm' 
                WHERE passWord = '$current'";

        if (mysqli_query($conn, $sql)) {
            header($successURL);
            exit();
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    }

    header($errorURL);
    exit();
}
?>
