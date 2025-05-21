<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\userProfile.css">
    <title>User Details</title>
</head>

<body  onload="myFunction()" style="margin:0;">

    <div id="overlay">
        <div id="loader"></div>
    </div>
    <?php include 'assets\php\Header & Footer\header.php';?>
   
    
<!-- content -->



<div class="userdetiCon">
    <div class="udeilas">
        <img class="dp" src="assets\images\default-avatar.png" alt="Girl in a jacket" >
        <div class="Upicture"><?php echo isset($_SESSION['user_pic']) ? $_SESSION['pic'] : ''; ?></div>
        <h4>First Name : <?php echo isset($_SESSION['user_fname']) ? $_SESSION['user_fname'] : ''; ?></h4>
        <h4>Last Name : <?php echo isset($_SESSION['user_lname']) ? $_SESSION['user_lname'] : ''; ?></h4>
        <h4>Email : <?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?></h4>
        <div class="button-cen">
            <button class="logout" onclick="confirmLogout()">Log out</button>
            <a href="update_profile.php"> <button class="editpro" >Edit profile</button></a>
        </div>
    </div>
</div>   


<!--
<div class="container">
    <div class="login-section">
        <div class="form-section">
        <h2>User Account</h2><br>
        <h4>First Name : <?php echo isset($_SESSION['user_fname']) ? $_SESSION['user_fname'] : ''; ?></h4>
        <h4>Last Name : <?php echo isset($_SESSION['user_lname']) ? $_SESSION['user_lname'] : ''; ?></h4>
        <h4>Email : <?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?></h4>
        <div class="button-cen">
            <button class="logout" onclick="confirmLogout()">Log out</button>
        </div>
        </div>
    </div>
</div>-->






<!-- Footer -->

    <?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>
    <script src="assets\js\login.js"></script>
</body>

</html>
