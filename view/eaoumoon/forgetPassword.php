<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget Password</title>
    <link rel="stylesheet" href="style/forgetPassword.css" />
    
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

    <!-- Main Section -->
    <main>
      <div class="container">
        <h2>Forgot Password</h2>
        <form action="../../controller/eaoumoon/forgetPassController.php" method="POST">
          <div class="form-group">
            <label for="text">Registered Email</label>
            <input
              id="email-id"
              type="email"
              id="email"
              name="email"
              placeholder="Enter your registered email"
              value="<?php echo $_SESSION['uMail'] ?? '' ?>"
              
            /> <br>
            <b><span id="email-span"></span></b>
            <span><?php echo $_SESSION['e1'] ?? ''  ?></span>
          </div>

          <div class="form-group">
            <label for="otp">OTP (One-Time Password)</label>
            <input
              
              type="text"
              id="otp-id"
              name="otp"
              placeholder="Enter OTP 9876-E"
             
            /> <br>
            <b><span id="otp-span"></span></b>
            <span><?php echo $_SESSION['e2'] ?? ''  ?></span>
          </div>

          <div class="form-group">
            <label for="new">New Password</label>
            <input

              type="password"
              id="new-pass-id"
              name="new"
              placeholder="Enter new password"
              
            />
            <br>
            <b><span id="new-pass-span"></span></b>
            <span><?php echo $_SESSION['e3'] ?? ''  ?></span>
          </div>

          <div class="form-group">
            <label for="confirm">Confirm New Password</label>
            <input
              type="password"
              id="confirm-pass-id"
              name="confirm"
              placeholder="Re-enter new password"
              
            /> <br>
            <b><span id="confirm-pass-span"></span></b>
            <span><?php echo $_SESSION['e4'] ?? ''  ?></span>
          </div>

          <button id="btn-id" type="submit" class="btn">Reset Password</button>
          <p class="note">An OTP has been sent to your registered email.</p>
        </form>
      </div>
    </main>

    <!-- Footer -->
    <footer>
      <p>Copyright &copy; 2025 HealWell. All rights reserved.</p>
    </footer>
    <script src="script/sharedScript.js"></script>
    <script>
      document.getElementById('btn-id').addEventListener('click',(e)=>{
        e.preventDefault()
        const email= getFieldText("email-id")
        const otp= getFieldText("otp-id")
        const newPass= getFieldText("new-pass-id")
        const confirmPass= getFieldText("confirm-pass-id")
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
        isValid=true
        if (!emailRegex.test(email)) {
          console.log("inside if")
          span("email-span","Error Email Address")

          isValid=false
        } else {
          document.getElementById("email-span").innerHTML=""
        }
        if(otp!= '9876-E')
        {
            span("otp-span","Incorrect OTP")
            isValid=false
        }
        else{
            document.getElementById("otp-span").innerHTML=""
        }
         if(!passwordRegex.test(newPass)){
            span("new-pass-span","Password must be 8+ chars, include uppercase, lowercase & number")
            isValid=false
        } else {
            span("new-pass-span","")
        }


        // Confirm Password
        if(confirmPass==''){
            span("confirm-pass-span","Please confirm your password")
            isValid=false
        }
        else if(newPass!==confirmPass){
            span("confirm-pass-span","Passwords do not match")
            isValid=false
        } else {
            span("confirm-pass-span","")
        }
        if(isValid)
        {
          alert('Password has Changed. Go back to login')
          document.querySelector("form").submit();
        }

      })
    </script>
  </body>
</html>
