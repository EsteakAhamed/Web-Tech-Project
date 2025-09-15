<?php
function checkLogin($fullname, $password) {
    $conn = mysqli_connect("localhost", "root", "", "hms");
    if (!$conn) {
        return false;
    }
    
    $sql = "SELECT * FROM registration WHERE fullname='$fullname' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    mysqli_close($conn);

    return $row ? true : false;
}
?>