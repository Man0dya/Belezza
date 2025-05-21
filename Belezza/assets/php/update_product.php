<!-- IT23187214 -->
<?php

    require __DIR__ . '/config/config.php';

    if(isset($_POST['productId'], $_POST['availability'])) {
        
        $productID = $_POST['productId'];
        $availability = $_POST['availability'];

        $stmt = $conn->prepare("UPDATE products SET availability = ? WHERE ProductId = ?");
        $stmt->bind_param("ss", $availability, $productID);

        if($stmt->execute()){
            echo "<script>alert('Product updated successfully')
            window.location.href = '/fashion%20Store/manage-product.php';</script>";;
        } else {
            echo "Error: " . $stmt->error;
        }
    } else 
    {
        echo "Error: Form data not set";
    }

    $stmt->close();
    $conn->close();
?>
