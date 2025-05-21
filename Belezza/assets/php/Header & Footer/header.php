<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
} 
$userPage = isset($_SESSION['user_logged_in']) ? 'userAcc.php' : 'login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
<header class="header">
        <a href="index.php" ><img class="logo" src="assets\images\logo-white.png" alt="logo"></a>  
        <div class="bx bx-menu" id="menu-icon" ></div>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="clothing.php">Clothing</a>
            <a href="shoes.php">Shoes</a>
            <a href="bags.php">Bags</a>
            <a href="accessories.php">Accessories</a>
            <a href="ContactUs.php">Contact Us</a>
            <samp class="active-nav"></samp>
        </nav>
    
    <div class="containerup">
        <a href="<?php echo $userPage; ?>" id="userIcon"><img class="useracc" src="assets\images\user acc.png" alt="user"></a>
        <a href="Cart.php" ><img class="cartimg" src="assets\images\cart.png" alt="Cart"></a> 
        
       
        <form action="" class="search-bar">
            <input type="search" name="search" pattern=".*\S.*" required>
            <button class="search-btn" type="submit">
                <span>Search</span>
            </button>
        </form>
        
    </div>

    </header>
    
    <script src="assets\js\login.js"></script>
</body>
</html>
