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
    <link rel="stylesheet" type="text/css" href="assets\css\product_details.css">
    <title>Producr Details</title>
</head>

<body  onload="myFunction()" style="margin:0;">
    
    <div id="overlay">
        <div id="loader"></div>
    </div>
   
    <?php include 'assets\php\Header & Footer\header.php';?>

<!-- content -->
   
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashion store";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM products WHERE ProductId = $id");

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            echo '
            <form action="assets\php\Cart\add_to_cart.php" method="post">
                <input type="hidden" name="productId" value="'.$row["ProductId"].'">
                <input type="hidden" name="size">
                <input type="hidden" name="color">
                <input type="hidden" name="quantity" value="1">
            <div class="product-container">
                <img src="/Fashion Store/assets/php/'.$row["image"].'" alt="Product Image" class="product-image">
                <div class="product-details">
                    <h1>'.$row["title"].'</h1>
                    <h3>Price: Rs.'.$row["price"].'</h3><br>
                    <h2>SIZE</h2>

            <div class="size-options">';
                $sizes = $conn->query("SELECT size FROM products WHERE ProductId = $id");
                if ($sizes->num_rows > 0) {
                    while($size = $sizes->fetch_assoc()) {
                        $sizeArray = explode(',', $size["size"]);
                        foreach ($sizeArray as $singleSize) {
                            echo '<div class="size-button">'.$singleSize.'</div>';
                        }
                }
            } else {
                echo 'No sizes available';
            }

            echo '</div><br>
                    <h2>COLOR</h2>

            <div class="color-options">';
            $colors = $conn->query("SELECT color FROM products WHERE ProductId = $id");
            if ($colors->num_rows > 0) {
                while($color = $colors->fetch_assoc()) {
                    
                    $colorArray = explode(',', $color["color"]);
                    foreach ($colorArray as $singleColor) {
                        echo '<div class="color-option">'.$singleColor.'</div>';
                    }
                }
            } else {
                echo 'No colors available';
            }

            echo '</div>
                    <div class="quantity">
                        <h2>Quantity: <button id="minus">-</button>
                        <input type="text" id="count" value="1">
                        <button id="plus">+</button></h2>
                    </div>
                    <div class="button-container">
                        <div class="buy-buttonbox">
                            <button class="buy-button">Buy Now</button>
                        </div>
                        <div class="add-cart-buttonbox">
                            <button class="add-cart-button">Add To Cart</button>
                        </div>
                    </div>
                    
                </div>
                   
            </div>
            
                <div class="item_cont">
                    <div class="item_details">
                        <p>'.$row["description"].'</p>
                    </div>
                </div>
        </form>';
        }
    } else {
        echo "No product found";
    }
    $conn->close();
?>


<!-- Footer -->

<?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>
    <script src="assets\js\product_details.js"></script>
</body>

</html>
