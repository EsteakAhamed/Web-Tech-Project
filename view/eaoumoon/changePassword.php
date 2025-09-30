<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password</title>
   <link rel="stylesheet" href="style/changePassword.css">
</head>
<body>
  <!-- Header -->
    <header>

      <div class="header-container">
      <div>
        <span class="logo">HealWell</span> <br>
        <span class="logo">Dhaka,Bangladesh</span>
      </div>
      <a href="login.php" class="login-btn">Logout</a>
      </div>
    </header>
  <main>
    <div class="container">
    <h2>Change Password</h2>
    <form action="../../controller/eaoummon/changePassController.php" method="POST">
      
      <div class="form-group">
        <label for="current">Current Password</label>
        <input type="password" id="current-pass" name="current" placeholder="Enter current password">
        <br>
        <b><span id="current-span"></span></b>
        <span><?php echo $_SESSION['e1'] ?? ''  ?></span>
      </div>

      <div class="form-group">
        <label for="new">New Password</label>
        <input type="password" id="new-pass" name="new" placeholder="Enter new password" >
        <br>
        <b><span id="new-span"></span></b>
        <span><?php echo $_SESSION['e2'] ?? ''  ?></span>
      </div>

      <div class="form-group">
        <label for="confirm">Confirm New Password</label>
        <input type="password" id="confirm-pass" name="confirm" placeholder="Re-enter new password" >
        <br>
        <b><span id="confirm-span"></span></b>
        <span><?php echo $_SESSION['e3'] ?? ''  ?></span>
      </div>

        <button type="submit" id="btn-id" class="btn">Update Password</button>
        <p class="note">Make sure your new password is at least 8 characters long.</p>
    </form>
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
          const current= getFieldText("current-pass")
          const newP = getFieldText("new-pass")
          const confirm= getFieldText("confirm-pass")
          const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
          isValid=true
          if(current != "eaoumooN1")
          {
            span("current-span","Wrong Password")
            isValid= false
          }
          else{
            span("current-span","")
          }

        // if(pass.length < 8 || pass.length > 12){
        //     span("pass-span","Password must be 8-12 characters long")
        //     isValid=false
        // } else {
        //     span("pass-span","")
        // }
        // Password
        if(!passwordRegex.test(newP)){
            span("new-span","Password must be 8+ chars, include uppercase, lowercase & number")
            isValid=false
        } else {
            span("new-span","")
        }


        // Confirm Password
        if(confirm==''){
            span("confirm-span","Please confirm your password")
            isValid=false
        }
        else if(newP!==confirm){
            span("confirm-span","Passwords do not match")
            isValid=false
        } else {
            span("confirm-span","")
        }
        if(isValid){
            alert("Password changed Successfully, Login again")
            document.querySelector("form").submit();
          }

    })
  </script>
</body>
</html>
