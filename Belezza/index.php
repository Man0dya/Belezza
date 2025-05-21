<!-- IT23142732 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\home.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <title>HOME</title>
</head>

<body onload="myFunction()" style="margin:0;">
    
    <div id="overlay">
        <div id="loader"></div>
    </div>
    <?php include 'assets\php\Header & Footer\header.php';?>
   
    
<!--  content -->
<section class="hero-slider">
    <div class="slider-item active">
        <img src="assets\images\home sideshow\portrait-handsome.jpg" alt="Summer Collection">
        <div class="hero-content">
            <h1>Summer Collection 2024</h1>
            <p>Get up to 30% Off New Arrivals</p>
            <a href="#" class="shop-btn">Shop Now</a>
        </div>
    </div>
</section>

<section class="featured-categories">
    <div class="section-title">
        <h2>Shop By Category</h2>
    </div>
    <div class="categories-grid">
        <div class="category-card">
            <img src="assets\images\Category\fashion-girls-city.jpg" alt="Women's">
            <div class="category-overlay">
                <h3>Women's Collection</h3>
                <a href="#" class="category-link">Explore Now</a>
            </div>
        </div>
        <div class="category-card">
            <img src="assets\images\Category\young-stylish.jpg" alt="Men's">
            <div class="category-overlay">
                <h3>Men's Collection</h3>
                <a href="#" class="category-link">Explore Now</a>
            </div>
        </div>
        <div class="category-card">
            <img src="assets\images\home sideshow\cover2.jpg" alt="Accessories">
            <div class="category-overlay">
                <h3>Accessories</h3>
                <a href="#" class="category-link">Explore Now</a>
            </div>
        </div>
    </div>
</section>

<section class="trending-products">
    <div class="section-title">
        <h2>Trending Now</h2>
        <p>Our most popular products based on sales</p>
    </div>
    <div class="products-grid">
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">-20%</span>
                <img src="assets\images\Category\young-stylish.jpg" alt="Product 1">
                <div class="product-actions">
                    <button class="action-btn">Quick View</button>
                    <button class="action-btn">Add to Cart</button>
                </div>
            </div>
            <div class="product-info">
                <h3>Modern Casual Tee</h3>
                <div class="product-price">
                    <span class="current-price">Rs.2900.00</span>
                    <span class="old-price">Rs.3700.00</span>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <span class="new-tag">New</span>
                <img src="assets\images\Category\fashion-girls-city.jpg" alt="Product 2">
                <div class="product-actions">
                    <button class="action-btn">Quick View</button>
                    <button class="action-btn">Add to Cart</button>
                </div>
            </div>
            <div class="product-info">
                <h3>Summer Floral Dress</h3>
                <div class="product-price">
                    <span class="current-price">Rs.8500.00</span>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="assets\images\home sideshow\cover2.jpg" alt="Product 3">
                <div class="product-actions">
                    <button class="action-btn">Quick View</button>
                    <button class="action-btn">Add to Cart</button>
                </div>
            </div>
            <div class="product-info">
                <h3>Premium Denim Jacket</h3>
                <div class="product-price">
                    <span class="current-price">Rs.4500.00</span>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">-15%</span>
                <img src="assets\images\home sideshow\portrait-handsome.jpg" alt="Product 4">
                <div class="product-actions">
                    <button class="action-btn">Quick View</button>
                    <button class="action-btn">Add to Cart</button>
                </div>
            </div>
            <div class="product-info">
                <h3>Classic Oxford Shirt</h3>
                <div class="product-price">
                    <span class="current-price">Rs.4300.00</span>
                    <span class="old-price">Rs.5400.00</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="promotion-banner">
    <div class="promo-content">
        <h2>Summer Sale</h2>
        <h3>Up to 70% OFF</h3>
        <p>Limited time offer on selected items</p>
        <a href="#" class="promo-btn">Shop the Sale</a>
    </div>
</section>

<section class="featured-collection">
    <div class="section-title">
        <h2>New Arrivals</h2>
        <p>Check out our latest products</p>
    </div>
    <div class="collection-tabs">
        <button class="tab-btn active">All</button>
        <button class="tab-btn">Women</button>
        <button class="tab-btn">Men</button>
        <button class="tab-btn">Accessories</button>
    </div>
    <div class="collection-grid">
        <div class="collection-item">
            <img src="assets\images\Category\fashion-girls-city.jpg" alt="Collection 1">
            <div class="collection-info">
                <h3>Summer Essentials</h3>
                <a href="#" class="view-btn">View Collection</a>
            </div>
        </div>
        <div class="collection-item">
            <img src="assets\images\Category\young-stylish.jpg" alt="Collection 2">
            <div class="collection-info">
                <h3>Urban Casual</h3>
                <a href="#" class="view-btn">View Collection</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

    <?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>
  
   
</body>

</html>