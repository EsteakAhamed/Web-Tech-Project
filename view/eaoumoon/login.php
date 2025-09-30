<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="style/login.css" />
</head>
<body>

  <!-- Header -->
  <header>
    <div class="header-container">
      <div>
        <span class="logo">HealWell</span> <br>
        <span class="logo">Dhaka, Bangladesh</span>
      </div>
      <a href="aboutUs.php" class="signup-btn">About Us</a>
    </div>
  </header>

  <main>
    <div class="container">
      <h2>Login</h2>
      <form action="../../controller/eaoumoon/loginAcController.php" method="POST">
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" id="email-id" name="email" placeholder="Enter your email" value="<?php echo $_SESSION['uMail'] ?? '' ?>" />
          <br>
          <b><span id="email-span"></span></b>
		      <span><?php echo $_SESSION['e1'] ?? ''  ?></span>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="pass-id" name="password" placeholder="Enter your password" />
          <br>
          <b><span id="pass-span"></span></b>
          <span><?php echo $_SESSION['e2'] ?? ''  ?></span>
        </div>
        <button type="submit" id="btn-id" class="btn">Login</button>
        </form>
        
       <span><?php echo $_SESSION['e3'] ?? ''  ?></span>

        
        
        <p class="note">
        Don’t have an account? <a href="signup.php">Sign up</a>
        </p>

        <p class="note">
          <a href="forgetPassword.php">Forgot Password?</a>
        </p>
      
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <p>Copyright &copy; 2025 HealWell. All rights reserved.</p>
  </footer>
  <script src="script/sharedScript.js"></script>
  <script>
        document.getElementById("btn-id").addEventListener('click',(e)=>{
        e.preventDefault()
        const email= getFieldText("email-id")
        const pass = getFieldText("pass-id")
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        isValid=true
        // Email
        if(email==''){
            span("email-span", "Email Must Required")
            isValid=false
        }
        else if (!emailRegex.test(email)) {
            span("email-span","Invalid Email Address")
            isValid=false
        } 
        // else if(email != "eaou@gmail.com"){
        //     span("email-span","Wrong Email Address")
        //     isValid=false
        //}
        
        else {
            span("email-span","")
        }

        //pass
         if(!passwordRegex.test(pass)){
            span("pass-span","Password must be 8+ chars, include uppercase, lowercase & number")
            isValid=false
        }
        // else if(pass !== "eaoumooN1"){
        //     span("pass-span","Wrong Password")
        //     isValid=false
        // }
         else {
            span("pass-span","")
        }
        if(isValid){
            alert("login Successful")
            //window.location.href = "../Controller/loginAcController.php";
            document.querySelector("form").submit();
        }
    })
  </script>

</body>
</html>
