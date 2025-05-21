<!-- IT23209466 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\productpage_box.css">
    <title>Shoes</title>
</head>

<body  onload="myFunction()" style="margin:0;">
    
    <div id="overlay">
        <div id="loader"></div>
    </div>
   
    <?php include 'assets\php\Header & Footer\header.php';?>

<!-- content -->
   
    <div class="heading">
        <h1>SHOES</h1> 
    </div>   
    
    
    <div class="main-content">
    <div class="product-filter" id="filterbar">
        
        <div class="filter">
            <button id="sidebarToggle" class="filter-button">Filter</button>
        </div>

        <div class="availability">
            <h2>Availability</h2>
            <div id="options">
                <label><input type="checkbox" id="inStock"> In-Stock</label>
                <label><input type="checkbox" id="outOfStock"> Out of Stock</label>
            </div>
        </div>
        

        <div class="price-range">
            <h2>Price Range</h2>
            <div id="priceOptions" class="price-options">
                <input type="range" id="priceRange" min="0" max="25000" value="12500" oninput="updateValue(this.value)">
             <div class="range-values">
                <span id="min">Rs0</span>
                <span id="max">Rs25000</span>
            </div>
            </div>
        </div>
        
        <div class="sort">
        <h2>Sort</h2>
            <div id="sortOptions">
                <label><input type="radio" name="sortOption" id="alphabetical"> Alphabetically, A-Z</label>
                <label><input type="radio" name="sortOption" id="lowToHigh"> Price, low to high</label>
                <label><input type="radio" name="sortOption" id="highToLow"> Price, high to low</label>
            </div>
        </div>

        <div class="uncheckbox">
            <button class="uncheckbtt" id="uncheckAll">Uncheck All</button>
        </div>

    </div>

    <div class="products" id="products">
        <?php require 'assets\php\Shoes_product.php'; ?>
    </div>

    </div>
    



<!-- Footer -->

    <?php include 'assets\php\Header & Footer\footer.php';?>
    <script src="assets\js\script.js"></script>
    <script src="assets\js\product_page.js"></script>
</body>

</html>
