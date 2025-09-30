<?php
function checkLogin($email, $password) {
    $conn = mysqli_connect("localhost", "root", "", "hms");
    if (!$conn) {
        return false;
    }
   
    $sql = "SELECT * FROM registration WHERE email='$email' AND passWord='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);
 
    $row = mysqli_fetch_assoc($result);
 
    mysqli_close($conn);
 
    return $row ? true : false;
}
?>