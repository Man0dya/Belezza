<!-- IT23187214 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicon\favicon-16x16.png">
    <link href="assets\css\admin.css" rel="stylesheet">
    <link href="assets\css\manage-product.css" rel="stylesheet">
    

    <title>Manage Product</title>
</head>

<body  onload="myFunction()" style="margin:0;">
    <?php
    session_start();
    
    if (!isset($_SESSION['admin_logged_in'])) {
     
        header('Location:login.php');
        exit;
    }
    
    ?>
    

    <div id="overlay">
        <div id="loader"></div>
    </div>
   
    <div id="sidebarToggle" class="menu-ic"> <img src="assets\images\menu-icon.png"class="menu-icon"></div>
    <div class="sidebar" id="mySidebar">
        <a href="manage-product.php" ><img class="logo" src="assets\images\logo-main.png" alt="logo"></a>
        <h2>MENU</h2>
        
        <div class="sidebar-link" >
            
            
            <a href="#add" class="nav-item">
                <img src="assets\images\charts.png" alt="charts Icon" class="nav-icon">
                <span>Add Products</span>
            </a>
            <a href="#remove" class="nav-item">
                <img src="assets\images\Sales.png" alt="sales Icon" class="nav-icon">
                <span>Remove Products</span>
            </a>

            <a href="#update" class="nav-item">
                <img src="assets\images\update.png" alt="update Icon" class="nav-icon">
                <span>Update Products</span>
            </a>

            <a href="admin.php" class="nav-item">
                <img src="assets\images\dashboard.png" alt="admin Icon" class="nav-icon">
                <span>Admin</span>
            </a>
            
        </div>
        
    </div>
    
    <div class="main-content">

        <h1>Manage Products</h1>
        <hr>

        <section class="dashboard" id="add">
            <h2 class="heading">Add Products</h2>
           
            <form id="addProductForm" action="assets\php\add_product.php" method="post" enctype="multipart/form-data">

                <label for="title">Product Title</label></br>
                <input type="text" id="title" name="title" placeholder="Title">

                <label for="price">Product Price</label></br>
                <input type="number" id="price" name="price" placeholder="Price LKR">

                <label for="image">Product cover image</label></br>
                <input type="file" id="image" name="image">

                <label for="category">Product Category</label></br>
                <select id="category" name="category" onchange="addOptions(this)">
                    <option value="">Select Category</option>
                    <option value="clothing">Clothing</option>
                    <option value="shoes">Shoes</option>
                    <option value="bags">Bags</option>
                    <option value="accessories">Accessories</option>
                </select>

                <label for="description">Product Description</label></br>
                <textarea id="description" name="description" placeholder="Description"></textarea>
                
                <label for="availability">Availability</label></br>
                <select name="availability" id="availability">
                    <option value="In Stock">In Stock</option>
                    <option value="Out of Stock">Out of Stock</option>
                </select>

                <div id="extraOptions"></div>
                <button type="submit">Add Product</button>
            </form>
            
             
        </section> 

        <section class="dashboard" id="remove">
            <h2 class="heading">Remove Products</h2>
            
            <form id="removeProductForm" action="assets\php\remove_product.php" method="post">
                <label for="productId">Product ID</label></br>
                <input type="number" id="productId" name="productId" placeholder="Enter the ID of the product to remove">
                <button type="submit">Remove Product</button>
            </form>
  
        </section> 

        <section class="dashboard" id="update">
             <h2 class="heading">Update Product</h2>
    
            <form id="updateProductForm" action="assets\php\update_product.php" method="post">
                <label for="productId">Product ID</label></br>
                <input type="number" id="productId" name="productId" placeholder="Enter the ID of the product to update"></br>

                <label for="availability">Availability</label></br>
                <select name="availability">
                    <option value="In Stock">In Stock</option>
                    <option value="Out of Stock">Out of Stock</option>
                </select></br>

                <button type="submit">Update Product</button>
            </form>
        </section>

        

    </div>

    
    
    <script src="assets\js\manage-product.js"></script>
</body>

</html>