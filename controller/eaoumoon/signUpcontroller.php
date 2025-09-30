<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars($_POST["fullname"]);
    $password = htmlspecialchars($_POST["password"]);
    //echo ($password);
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $phone= htmlspecialchars($_POST["phone"]);
    $address= htmlspecialchars($_POST["address"]);
    $email= htmlspecialchars($_POST["email"]);
    $bloodGroup= htmlspecialchars($_POST["blood"]);
    $cPassword= htmlspecialchars($_POST["confirm-password"]);

    $isValid = true;

    $pattern1 = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $pattern2 = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";

    // reset errors
    $_SESSION['e1'] = $_SESSION['e2'] = $_SESSION['e3'] = $_SESSION['e4'] = 
    $_SESSION['e5'] = $_SESSION['e6'] = $_SESSION['e7'] = $_SESSION['e8'] = $_SESSION['e9'] = "";

    // // persist fields
    // $_SESSION['fullName'] = $fullname;
    // $_SESSION['doB'] = $dob;
    
    //cookies
    setcookie("fullname", $fullname, time() + 60, "/");
    setcookie("dob", $dob, time() + 60, "/");
    setcookie("phone", $phone, time() + 60, "/");
    setcookie("email", $email, time() + 60, "/");
    setcookie("address", $address, time() + 60, "/");
    // Fullname
    if (empty($fullname)) {
        $_SESSION['e1'] = "Please fill up the Name";
        $isValid = false;
    }

    // DOB
    if (empty($dob)) {
        $_SESSION['e2'] = "Please Choose a Date";
        $isValid = false;
    }

    // Gender
    if (empty($gender)) {
        $_SESSION['e3'] = "Please select a gender";
        $isValid = false;
    }

    // Phone
    if (empty($phone)) {
        $_SESSION['e4'] = "Please fill up the Phone Number ";
        $isValid = false;
    }
    else if(!($phone[0]==='0' && $phone[1]==='1')){
        $_SESSION['e4'] = "Number should start with 01";
        $isValid = false;
    }

    // Email
    if (empty($email)) {
        $_SESSION['e5'] = "Please fill up the Mail properly";
        $isValid = false;
    }
    else if (!preg_match($pattern1, $email)) {
        $_SESSION['e5'] = "Invalid email format";
        $isValid=false;
    } 

    // Address
    if (empty($address)) {
        $_SESSION['e6'] = "Please Fill your Address";
        $isValid = false;
    }

    // Blood group
    if (empty($bloodGroup)) {
        $_SESSION['e7'] = "Please Select a Blood Group";
        $isValid = false;
    }

    // Password
    if (empty($password)) {
        $_SESSION['e8'] = "Please fill up the password properly";
        $isValid = false;
    }
    else if (!preg_match($pattern2, $password)) {
        $_SESSION['e8'] = "Password must have 8+ chars, uppercase, lowercase & digit";
        $isValid=false;
    }

    // Confirm password
    if (empty($cPassword)) {
        $_SESSION['e9'] = "Please confirm your password";
        $isValid = false;
    }
    else if ($password !== $cPassword) {
        $_SESSION['e9'] = "Passwords do not match";
        $isValid=false;
    }

    // Final Redirect
    if ($isValid) {
        require '../model/registrationDB.php';

        // Plain SQL query (no hashing)
        $sql = "INSERT INTO registration (fName, dob, gender, number, email, homeAdd, bloodGr, passWord) 
                VALUES ('$fullname', '$dob', '$gender', '$phone', '$email', '$address', '$bloodGroup', '$cPassword')";
                if ($conn->query($sql) === TRUE) {
                    // Success: redirect to login page
                    header("Location: ../../view/eaoumoon/login.php");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

        $conn->close();
    } else {
        header("Location: ../../view/eaoumoon/signup.php");
        exit();
    }
}
?>
