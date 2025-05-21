<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['quantity'])) {
        $itemId = $_POST['item_id'];
        $newQuantity = $_POST['quantity'];

        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $itemId) {
                $item['quantity'] = $newQuantity;
            }
        }
    }

    header('Location: \Fashion Store\Cart.php');
    exit();
}
?>
