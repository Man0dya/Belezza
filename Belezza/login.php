<!-- IT23209466 -->
<?php
  if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}   
if (isset($_SESSION['user_logged_in'])) {
    header("Location: /fashion%20Store/userAcc.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\login.css">
    <title>Login</title>
</head>

<body  onload="myFunction()" style="margin:0;">

    <div id="overlay">
        <div id="loader"></div>
    </div>
    <?php include 'assets\php\Header & Footer\header.php';?>
   
    
<!-- content -->


    <div class="container">
    <div class="login-section">
        <div class="form-section">
        <h2>LOGIN</h2><br>
        <form action="assets\php\login_process.php" method="post">
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
                <div class="remember-me">
                    <label><input type="checkbox">Remember me</label>
                </div>
            <div class="button-cen">
            <button class="login-button" type="submit" name="submit">Sign In</button>
            </div>    
            <div class="links1">
            <a href="#">Forgot Password?</a>
            </div>
            <div class="links2">
            <p>Don't have an account? <a href="signUp.php" class="register-link">Register</a></p> 
            </div>
        </form>
        </div>
    </div>
    </div>

<!-- Footer -->

    <?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>
    <script src="assets\js\login.js"></script>

</body>

</html>
