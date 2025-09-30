<?php
function checkLogin($conn, $password) {
    $password = trim($password); // remove extra spaces
    $sql = "SELECT * FROM registration WHERE passWord='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    return mysqli_num_rows($result) > 0; // true if exists
}
?>
