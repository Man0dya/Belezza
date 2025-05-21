<!-- IT23252554 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\Cart.css">
    <title>Cart</title>
</head>

<body  onload="myFunction()" style="margin:0;">
    
    <div id="overlay">
        <div id="loader"></div>
    </div>
    <?php include 'assets\php\Header & Footer\header.php';?>
<!-- content -->

    

    <div class="header1">
        <h1>MY CART</h1>
    </div>
    
    <?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }    

    echo '<div class="container">';

    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            echo '
            <div class="cart-item">
                <div class="item-image">
                    <img src="/Fashion Store/assets/php/'.$item["image"].'" alt="Item Image">
                </div>
                <div class="item-details">
                    <h2>'.$item["name"].'</h2>
                    <span class="item-price">RS. '.$item["price"].'</span>
                    <p class="size">Size: '.$item["size"].'</p>
                    <p class="color">Color: '.$item["color"].'</p>
                    <div class="quantity">
                        <span class="quantity-label">Quantity:</span>
                        <form method="post" action="assets\php\Cart\update_quantity.php">
                            <input type="hidden" name="item_id" value="'.$item["id"].'">
                            <input type="number" name="quantity" value="'.$item["quantity"].'" min="1">
                            <button class="quantity-btn" type="submit">Update</button>
                        </form>
                    </div>
                    <form method="post" action="assets\php\Cart\remove_from_cart.php">
                        <input type="hidden" name="item_id" value="'.$item["id"].'">
                        <button type="submit" class="remove-btn">Remove</button>
                    </form>
                </div>
            </div>';
        }   
    
    } else {
        echo 'Your cart is empty.';
    }

    echo '</div>';

$totalPrice = 0;

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $totalPrice += $item['price'] * $item['quantity'];
    }
}
?>

<div class="buttons">
    <button class="continue-shopping-btn" onclick="window.location.href='/Fashion Store/index.php'">Continue Shopping</button>
    <div class="price-box">Total Price: LKR <?php echo $totalPrice; ?></div>
    <a href="checkout.php">
        <button class="checkout-btn">Checkout</button>
    </a>
</div>



<!-- Footer -->

    <?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>
    
</body>

</html>
