<?php
  if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}    

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $itemId = $_POST['item_id'];

    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $itemId) {
            unset($_SESSION['cart'][$key]);
        }
    }

    header('Location: \Fashion Store\Cart.php');
    exit();
    
}
?>
