<!-- IT23156456 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link href="assets\css\checkout.css" rel="stylesheet">
    <title>CHECKOUT</title>
</head>

<body  onload="myFunction()" style="margin:0;">
    
    <div id="overlay">
        <div id="loader"></div>
    </div>
    <?php include 'assets\php\Header & Footer\header.php';?>
   
    
<!-- content -->

<b><h1>CHECKOUT</h1></b><br>

<div class="main">
<div class="container">
    <form action="assets\php\checkout\order.php" method="post">
      <div class="contact">   
        <label for="email"><h2>Contact</h2></label>
        <input type="email" id="email" placeholder="Email" name="email" required value="<?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; ?> "required autocomplete="email">
      </div>  

      <h2><b>Delivery</b></h2>
        
        
      <div class="name">
        <input type="text" class="text-input" placeholder="Enter First Name" name="fname" required value="<?php echo isset($_SESSION['user_fname']) ? $_SESSION['user_fname'] : ''; ?>">
        <input type="text" class="text-input" placeholder="Enter Last Name" name="lname" required value="<?php echo isset($_SESSION['user_lname']) ? $_SESSION['user_lname'] : ''; ?>">
      </div>   
      <div class="citypost">
        <input type="text" class="text-input" id="address" placeholder="Address" name="address" required>
        <input type="text" class="text-input" id="city" placeholder="City" name="city" required>
        <input type="text" class="text-input" id="postal" placeholder="Postal code" name="postal code" required>
      </div>   

      <input type="text" class="text-input" placeholder="Enter phone Number" name="number" required>
        
      <div class="payment">
        <h2><b>Payment</b></h2><br>
      <div>
          <input type="radio" name="payment" id="rad1" value="Credit/Dedit Card">
          <lable for="rad1">Credit/Dedit Card</lable>

      </div><br>
        <div>
          <input type="radio" name="payment" id="rad2" value="Paypal">
          <lable for="rad2">Paypal</lable>
        </div><br>

        <div>
          <input type="radio" name="payment" id="rad3" value="Cash on delivery">
          <lable for="rad3">Cash on delivery</lable>
        </div><br> 
        
        </div>

        <div>
          <button type="submit" class="btn">Checkout</button>
        </div> 

    </form>

  </div>
  
  <div class="item_n">
    <h2>ITEM NAMES</h2>
    <ul class="item-list" >
        <?php
        $totalPrice = 0;
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $itemTotal = $item['price'] * $item['quantity'];
                echo '<li><span class="item-name">'.$item["name"].':</span> Rs '.$itemTotal.'</li>';
                $totalPrice += $itemTotal;
            }
        }

        $shippingCost = 0;
        if ($totalPrice < 5000) {
            $shippingCost = 500;
        }
        ?>
    </ul>

    <div class="summary">
        <p>Subtotal</p>
        <p class="cal">Rs <?php echo $totalPrice; ?></p>
    </div>
      <div class="summary">
          <p>Shipping</p>
          <p class="cal">Rs <?php echo $shippingCost; ?></p>
      </div>
        
      <div class="total">
          <strong>Total</strong>
          <p class="cal"><strong>Rs <?php echo $totalPrice + $shippingCost; ?></strong></p>
      </div>
    </div>

  </div>

<!-- Footer -->

    <?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>

</body>

</html>
