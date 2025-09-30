<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Registration</title>
  <link rel="stylesheet" href="style/signup.css">
  <script>
        function showHint() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "getHints.php", true);
        xmlhttp.send();
      }

  </script>
</head>
<body>
  <!-- Header -->
    <header>

      <div class="header-container">
      <div>
        <span class="logo">HealWell</span> <br>
        <span class="logo">Dhaka,Bangladesh</span>
      </div>
      <a href="login.php" class="login-btn">Login</a>
      </div>
    </header>
  <main>
    <div class="container">
    <h2>Patient Registration</h2>
    <form action="../../controller/eaoumoon/signUpcontroller.php" method="POST">
      
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="name-id" name="fullname" placeholder="Enter patient's full name" value="<?php echo $_SESSION['fullName'] ?? ($_COOKIE['fullname'] ?? '')   ?>">
        <br>
        <b><span id="name-span"></span></b>
        <span><?php echo $_SESSION['e1'] ?? ''  ?></span>
      </div>
      
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob-id" name="dob" value="<?php echo  ($_COOKIE['dob'] ?? '') ?>">
        <br>
        <b><span id="dob-span"></span></b>
        <span><?php echo $_SESSION['e2'] ?? ''  ?></span>
      </div>
      
      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender-id" name="gender"  >
          <option value="">-- Select Gender --</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <br>
        <b><span id="gender-span"></span></b>
         <span><?php echo $_SESSION['e3'] ?? ''  ?></span>
      </div>
      
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone-id" name="phone" placeholder="+8801XXXXXXXXX" value="<?php echo ($_COOKIE['phone'] ?? '') ?>">
        <br>
        <b><span id="phone-span"></span></b>
        <span><?php echo $_SESSION['e4'] ?? ''  ?></span>
      </div>
      
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="text" id="email-id" name="email" placeholder="example@mail.com" value="<?php echo ($_COOKIE['email'] ?? '') ?>">
        <br>
        <b><span id="email-span"></span></b>
        <span><?php echo $_SESSION['e5'] ?? ''  ?></span>
      </div>
      
      <div class="form-group">
        <label for="address">Home Address</label>
        <textarea id="add-id" name="address" placeholder="Enter full address" value="<?php echo ($_COOKIE['address'] ?? '') ?>"></textarea>
        <br>
        <b><span id="add-span"></span></b>
         <span><?php echo $_SESSION['e6'] ?? ''  ?></span>
      </div>
      
      <div class="form-group">
        <label for="blood">Blood Group</label>
        <select id="blood-id" name="blood" >
          <option value="">-- Select Blood Group --</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select>
        <br>
        <b><span id="blood-span"></span></b>
         <span><?php echo $_SESSION['e7'] ?? ''  ?></span>
      </div>

      <!-- 🔑 Password -->
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="pass-id" name="password" placeholder="Enter password" onfocus="showHint()" >
        <br>
        <p>Suggestions: <span id="txtHint"></span></p>
        <b><span id="pass-span"></span></b>
        <span><?php echo $_SESSION['e8'] ?? ''  ?></span>
      </div>

      <!-- 🔑 Confirm Password -->
      <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="cpass-id" name="confirm-password" placeholder="Re-enter password" >
        <br>
        <b><span id="cpass-span"></span></b>
         <span><?php echo $_SESSION['e9'] ?? ''  ?></span>
      </div>
      
      <button type="submit" class="btn" id="btn-id">Register Patient</button>
      
      <p class="note">By registering, you agree to hospital policies.</p>
    </form>
  </div>
  </main>
  <footer>
  <p>Copyright &copy; 2025 HealWell All rights reserved.</p>
  </footer>
  <script src="script/sharedScript.js"></script>
  <script>
    document.getElementById("btn-id").addEventListener('click',(e)=>{
        e.preventDefault()
        const email= getFieldText("email-id")
        const phone= getFieldText("phone-id")
        const blood= getFieldText("blood-id")
        const add = getFieldText("add-id")
        const dob= getFieldText("dob-id")
        const name= getFieldText("name-id")
        const gender= getFieldText("gender-id")
        const pass = getFieldText("pass-id")
        const cpass = getFieldText("cpass-id")

        isValid=true

        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
        
        // Name
        if(name==""){
            span("name-span","Name is Required")
            isValid = false; 
        } else {
            span("name-span", "");
        }

        // DOB
        const date = new Date(dob);
        const today = new Date();
        if(dob==""){
            span("dob-span","Date is Required")
            isValid = false
        }
        else if (date > today) {
            span("dob-span", "Date of Birth must be in the past");
            isValid = false;
        } else {
            span("dob-span", "");
        }

        // Gender
        if(gender==""){
            span("gender-span","Gender is Required")
            isValid = false; 
        } else {
            span("gender-span", "");
        }

        // Phone
        if(phone.length != 11 ){
            span("phone-span", "Length must be 11")
            isValid= false
        }
        else if(phone[0]!= '0' || phone[1] != '1'){
            span("phone-span", "Should start with 01")
            isValid= false
        }
        else {
            span("phone-span", "")
        }

        // Email
        if(email==''){
            span("email-span", "Email Must Required")
            isValid=false
        }
        else if (!emailRegex.test(email)) {
            span("email-span","Invalid Email Address")
            isValid=false
        } else {
            span("email-span","")
        }

        // Blood Group
        if(blood == ''){
            span("blood-span", "Select Blood Group")
            isValid= false
        }else{
            span("blood-span","")
        }

        // Address
        if(add== ''){
            span("add-span", "Enter an Address")
            isValid=false
        }else{
            span("add-span","")
        }

        // Password
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

        if(!passwordRegex.test(pass)){
            span("pass-span","Password must be 8+ chars, include uppercase, lowercase & number")
            isValid=false
        } else {
            span("pass-span","")
        }


        // Confirm Password
        if(cpass==''){
            span("cpass-span","Please confirm your password")
            isValid=false
        }
        else if(pass!==cpass){
            span("cpass-span","Passwords do not match")
            isValid=false
        } else {
            span("cpass-span","")
        }

        if(isValid){
            alert("Registration Successful, Go back to LogIN")
            document.querySelector("form").submit();
        }
    })
  </script>
</body>
</html>
