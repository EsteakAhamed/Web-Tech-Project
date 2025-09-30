<?php
            session_start();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                ///Grabbing data
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                $password = htmlspecialchars($_POST["new"]);
                $nPassword = htmlspecialchars($_POST["confirm"]);
                $otp = htmlspecialchars($_POST["otp"]);

                $isValid = true;
                $successURL = "Location: ../../view/eaoumoon/login.php";
                $errorURL = "Location: ../../view/eaoumoon/forgetPassword.php?" . "email=" . $email;
                // Regex for email & password validation
                $pattern1 = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
                $pattern2 = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";
                $_SESSION['e1'] = "";
                $_SESSION['e2'] = "";
                $_SESSION['e3'] = "";
                $_SESSION['uMail'] = $email;
                // Validate email
                if (empty($email)) {
                    $_SESSION['e1'] = "Please fill up the email properly";
                    $isValid = false;
                }
                else if (!preg_match($pattern1, $email)) {
                    $_SESSION['e1'] = "Please fill up the email using proper email";
                    $isValid=false;
                } 
                ///validate otp
                if (empty($otp)) {
                    $_SESSION['e2'] = "Please fill up the OTP properly";
                    $isValid = false;
                }
                else if ($otp!=='9876-E') {
                    $_SESSION['e2'] = "Incorrect OTP";
                    $isValid=false;
                } 
                
                ///validate password
                if (empty($password)) {
                    $_SESSION['e3'] = "Please fill up the New password";
                    $isValid = false;
                }
                else if (!preg_match($pattern2, $password)) {
                    $_SESSION['e3'] = "Please use atleast a capital a small and a digit";
                    $isValid = false;
                }

                ///validate confirm password
                if (empty($nPassword)) {
                    $_SESSION['e4'] = "Please fill up the Confirm password properly";
                    $isValid = false;
                }
                else if (!preg_match($pattern2, $password)) {
                    $_SESSION['e4'] = "New & Confirm passwords do not match";
                    $isValid = false;
                }
            if ($isValid) {
                header($successURL);
                exit();
            }
            header($errorURL);
            exit();
            }
?>