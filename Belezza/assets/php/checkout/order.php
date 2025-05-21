<!-- IT23156456 -->
<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    } 
    
    require __DIR__ . '/../config/config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postal_code = $_POST['postal_code'];
        $number = $_POST['number'];
        $payment = $_POST['payment'];

       
        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $item) {
                $productId = $item['id'];
                $size = $item['size'];
                $color = $item['color'];
                $quantity = $item['quantity'];

              
                $sql = "INSERT INTO orders (email, fname, lname, address, city, postal_code, number, payment, ProductId, size, color, quantity)
                VALUES ('$email', '$fname', '$lname', '$address', '$city', '$postal_code', '$number', '$payment', '$productId', '$size', '$color', '$quantity')";

                if ($conn->query($sql) === TRUE) {
                    $orderID = $conn->insert_id;
                    echo "<script>alert('Order for product ID $productId placed successfully. Your order ID is: $orderID');</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            echo "<script>alert('We truly appreciate your order and look forward to serving you again in the future.')
            window.location.href = '/fashion%20Store/index.php';</script>";
            exit();
        } else
        {
            echo "Your cart is empty.";
        }

        $conn->close();
    }
?>
