<?php
session_start();
$fullname = $_SESSION['fullname'] ?? '';
$dob = $_SESSION['dob'] ?? '';
$gender = $_SESSION['gender'] ?? '';
$phone = $_SESSION['phone'] ?? '';
$email = $_SESSION['email'] ?? '';
$address = $_SESSION['address'] ?? '';
$blood = $_SESSION['blood'] ?? '';

$nameError = $_SESSION['nameError'] ?? '';
$dobError = $_SESSION['dobError'] ?? '';
$genderError = $_SESSION['genderError'] ?? '';
$phoneError = $_SESSION['phoneError'] ?? '';
$emailError = $_SESSION['emailError'] ?? '';
$addressError = $_SESSION['addressError'] ?? '';
$bloodError = $_SESSION['bloodError'] ?? '';
$passwordError = $_SESSION['passwordError'] ?? '';
$success = $_SESSION['success'] ?? '';

unset($_SESSION['nameError'], $_SESSION['dobError'], $_SESSION['genderError'], $_SESSION['phoneError'], $_SESSION['emailError'], $_SESSION['addressError'], $_SESSION['bloodError'], $_SESSION['passwordError'], $_SESSION['success']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealWell - Registration</title>
    <link rel="stylesheet" href="style/registration.css">
</head>
<body>
    <header>
        HealWell Hospital
    </header>
    <div class="container">
        <h2>Patient Registration</h2>
        <form action="../controller/registrationAction.php" method="post" id="registerForm" onsubmit="return validateForm(event)">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="name-id" name="fullname" placeholder="Enter patient's full name" value="<?php echo $fullname ?>">
                <div class="error" id="name-span"><?php echo $nameError ?></div>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob-id" name="dob" value="<?php echo $dob ?>">
                <div class="error" id="dob-span"><?php echo $dobError ?></div>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender-id" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" <?php if ($gender === 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($gender === 'Female') echo 'selected'; ?>>Female</option>
                    <option value="Other" <?php if ($gender === 'Other') echo 'selected'; ?>>Other</option>
                </select>
                <div class="error" id="gender-span"><?php echo $genderError ?></div>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone-id" name="phone" placeholder="01XXXXXXXXX" value="<?php echo $phone ?>">
                <div class="error" id="phone-span"><?php echo $phoneError ?></div>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email-id" name="email" placeholder="example@mail.com" value="<?php echo $email ?>">
                <div class="error" id="email-span"><?php echo $emailError ?></div>
            </div>

            <div class="form-group">
                <label for="address">Home Address</label>
                <textarea id="add-id" name="address" placeholder="Enter full address"><?php echo $address ?></textarea>
                <div class="error" id="add-span"><?php echo $addressError ?></div>
            </div>

            <div class="form-group">
                <label for="blood">Blood Group</label>
                <select id="blood-id" name="blood">
                    <option value="">-- Select Blood Group --</option>
                    <?php
                    $bloodGroups = ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"];
                    foreach ($bloodGroups as $bg) {
                        $selected = ($blood === $bg) ? 'selected' : '';
                        echo "<option $selected>$bg</option>";
                    }
                    ?>
                </select>
                <div class="error" id="blood-span"><?php echo $bloodError ?></div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password-id" name="password" placeholder="Enter password">
                <div class="error" id="password-span"><?php echo $passwordError ?></div>
            </div>

            <button type="submit" class="btn" id="btn-id">Register</button>
            <p class="note">By registering, you agree to hospital policies.</p>
        </form>

        <p style="color:green; text-align:center;"><?php echo $success ?></p>
    </div>
    <script src="script/registration.js"></script>
</body>
</html>