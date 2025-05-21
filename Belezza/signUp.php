<!-- IT23142732 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\signUp.css">
    <title>HOME</title>
</head>

<body  onload="myFunction()" style="margin:0;">
    
    <div id="overlay">
        <div id="loader"></div>
    </div>
    <?php include 'assets\php\Header & Footer\header.php';?>
   
   
    
<!--content -->


<!-- Create Account HTML -->
<div class="container">
    <div class="signup-section">
      <div class="form-section">
        <h2>CREATE ACCOUNT</h2>
        <form method="POST" action="assets\php\dataofsignup.php">
          <input type="text" id="fname" name="fname" placeholder="First Name" required>
          <input type="text" id="lname" name="lname" placeholder="Last Name" required>
          <input type="email" id="email" name="email" placeholder="Email" required>
          <input type="password" id="pass" name="pass" placeholder="Password" required>
          <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required>
          <button class="sign-button" type="submit" id="btn" name="submit">Create</button>
          <div class="links">
            <span>Already have an account?: </span><a href="login.php">Log in</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  



<!-- Footer below -->

    <?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>

</body>

</html>
