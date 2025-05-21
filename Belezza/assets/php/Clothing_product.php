<!-- IT23142732 -->
<?php
   require __DIR__ . '/config/config.php';

  $sql = "SELECT * FROM products WHERE category = 'clothing'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $availabilityClass = $row["availability"] == 'In Stock' ? 'in-stock' : 'out-of-stock';
      echo '
      <div class="product-container">
          <div class="product-box">
              <img class="product-image" src="/Fashion Store/assets/php/'.$row["image"].'" alt="Product Image">
              <h2 class="product-title"><a href="/fashion%20Store/product_details.php?id='.$row["ProductId"].'">'.$row["title"].'</a></h2>
              <p class="product-price">RS. '.$row["price"].'</p>
              <p class="product-availability '.$availabilityClass.'">'.$row["availability"].'</p>
              <a href="/fashion%20Store/product_details.php?id='.$row["ProductId"].'"><button class="add-to-cart">Add to Cart</button></a>
          </div>
      </div>
      ';
    }
  } else {
    echo "0 results";
  }
  $conn->close();


?>


