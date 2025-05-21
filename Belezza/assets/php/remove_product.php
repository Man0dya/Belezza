<!-- IT23187214 -->
<?php

    require __DIR__ . '/config/config.php';
   
    $productID = $_POST['productId'];

    $stmt = $conn->prepare("DELETE FROM products WHERE ProductId = ?");
    $stmt->bind_param("s", $productID);

    if($stmt->execute()){
        echo "<script>alert('Product removed successfully')
        window.location.href = '/fashion%20Store/manage-product.php';</script>";
    } else 
    {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
?>
