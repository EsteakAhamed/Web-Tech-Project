<?php
session_start();
require('../model/doctorRemoveModel.php');

$regnumber = $_POST['regnumber'] ?? '';

if (!empty($regnumber)) {
    $result = removeDoctor($regnumber);

    if ($result) {
        $_SESSION['success'] = "Doctor removed successfully PHP";
    } else {
        $_SESSION['success'] = "Failed to remove doctor PHP";
    }
} else {
    $_SESSION['success'] = "Registration number missing PHP";
}

header("Location: ../view/doctorRemove.php");
exit();
?>