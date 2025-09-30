<?php 
            session_start();
            require '../../model/eaoumoon/loginDB.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                ///Grabbing data
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                $password = htmlspecialchars($_POST["password"]);

                $isValid = true;
                $successURL = "Location: ../../view/eaoumoon/home.php";
                $errorURL = "Location: ../../view/eaoumoon/login.php?";
                // Regex for email & password validation
                $pattern1 = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
                $pattern2 = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";
                $_SESSION['e1'] = "";
                $_SESSION['e2'] = "";
                $_SESSION['e3'] = "";
                $_SESSION['uMail'] = $email;
                $_SESSION['isLoggedIn'] = false;
                // Validate email
                if (empty($email)) {
                    $_SESSION['e1'] = "Please fill up the email properly";
                    $isValid = false;
                }
                else if (!preg_match($pattern1, $email)) {
                    $_SESSION['e1'] = "Please Use Valid Email Address";
                    $isValid=false;
                } 
                
                ///validate password
                if (empty($password)) {
                    $_SESSION['e2'] = "Please fill up the password properly";
                    $isValid = false;
                }
                else if (!preg_match($pattern2, $password)) {
                    $_SESSION['e2'] = "Please use atleast a capital a small and a digit";
                    $isValid = false;
                }
               
//                 if ($isValid) {
//                 require '../model/registrationDB.php'; 

//                 // Simple query to check if email & password exist
//                 $sql = "SELECT * FROM registration WHERE passWord='$password'  AND email='$email'";
//                 $result = mysqli_query($conn, $sql);

//                 if (mysqli_num_rows($result) > 0) {
//                     // Login successful
                   
//                     $user = mysqli_fetch_assoc($result);
//                     if($user['pass']==='$password' && $user['email']==='$email')
//                     {
//                          $_SESSION['isLoggedIn'] = true;
//                          header("Location: ../View/home.php");
//                     exit();
//                     }
//                 }
//                 else {
//                     $_SESSION['e3'] = "UserEmail or password does not match";
//                 }
//             }
//             header($errorURL);
//             exit();
//             }

            if ($isValid && checkLogin($email, $password)) 
                {  
                        // Login successful 
                        $_SESSION['isLoggedIn'] = true; 
                        header("Location: ../../view/eaoumoon/home.php"); 
                        exit(); 
                    } else {
                        $_SESSION['e3'] = "UserEmail or password does not match"; 
                        header($errorURL); 
                        } 
                    }
                    
                    exit(); 
?>