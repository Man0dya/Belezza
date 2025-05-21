<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }


    require __DIR__ . '/../config/config.php';

    //get product details
    function get_product_details($productId) {
    global $conn; 

    $stmt = $conn->prepare("SELECT * FROM products WHERE ProductId = ?");
    $stmt->bind_param("i", $productId); 

    $stmt->execute();

    $result = $stmt->get_result();

    $product = $result->fetch_assoc();

    $result->free();
    $stmt->close();

    return $product;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['productId'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $quantity = $_POST['quantity'];

    $product = get_product_details($productId);
  
    $item = [
        'id' => $productId,
        'name' => $product['title'], 
        'price' => $product['price'],
        'image' => $product['image'],
        'size' => $size,
        'color' => $color,
        'quantity' => $quantity
    ];
    
    $_SESSION['cart'][] = $item;

    header('Location: \Fashion Store\Cart.php');
}
?>
