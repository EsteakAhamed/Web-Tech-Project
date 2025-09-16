<?php
function checkCurrentPassword($fullname, $currentPassword) {
    $conn = mysqli_connect("localhost", "root", "", "hms");
    if (!$conn) {
        return false;
    }
    $sql = "SELECT * FROM registration WHERE fullname='$fullname' AND password='$currentPassword' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $row ? true : false;
}

function updatePassword($fullname, $newPassword) {
    $conn = mysqli_connect("localhost", "root", "", "hms");
    if (!$conn) {
        return false;
    }
    $sql = "UPDATE registration SET password='$newPassword' WHERE fullname='$fullname'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
?>