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
    <title>Dashboard</title>
</head>

<body  onload="myFunction()" style="margin:0;">

    <?php
        session_start();
        
        if (!isset($_SESSION['admin_logged_in'])) {
         
            header('Location:login.php');
            exit;
        }
        
    
        require('assets\php\config\config.php');

        $sql = "SELECT COUNT(*) as count FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $count = $row["count"];
            }
        } else {
            echo "0 results";
        }

        $user = "SELECT COUNT(*) as count FROM signup";
        $result = $conn->query($user);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ucount = $row["count"];
            }
        } else {
            echo "0 results";
        }

        
        $sql = "SELECT name,email,subject,message	FROM contactus";
        $result = $conn->query($sql);

        $feedbacks = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $feedbacks[] = $row;
            }
        } else {
            echo "No feedback available";
        }

        
        $order = "SELECT orderID, email, fname, lname, address, city, postal_code, number, payment, 
        ProductId, size, color, quantity FROM orders";
        $oresult = $conn->query($order);
        
    ?>

    
    <div id="overlay">
        <div id="loader"></div>
    </div>
   
    <button id="sidebarToggle" class="menu-ic"> <img src="assets\images\menu-icon.png"class="menu-icon"></button>
    <div class="sidebar" id="mySidebar">
        <a href="admin.php" ><img class="logo" src="assets\images\logo-white.png" alt="logo"></a>
        <h2>MENU</h2>
        
        <div class="sidebar-link" >
            
            <a href="#dashboard" class="nav-item">
                <img src="assets\images\dashboard.png" alt="Dashboard Icon" class="nav-icon">
                <span>Dashboard</span>
            </a>
            <a href="#charts" class="nav-item">
                <img src="assets\images\charts.png" alt="charts Icon" class="nav-icon">
                <span>Charts</span>
            </a>
            <a href="#sales" class="nav-item">
                <img src="assets\images\Sales.png" alt="sales Icon" class="nav-icon">
                <span>Sales</span>
          
            </a>
            <a href="manage-product.php" class="nav-item">
                <img src="assets\images\product.png" alt="product Icon" class="nav-icon">
                <span>Manage Products</span>
          
            </a>

            <a href="index.php" class="nav-item">
                <img src="assets\images\website.png" alt="website Icon" class="nav-icon">
                <span>Back to Site</span>
          
            </a>
            <div class="logout">
                <button class="button" onclick="confirmLogout()">Log Out</button>
            </div>
        </div>
        
    </div>
    
    <div class="main-content">

        <h1>Welcome to the Admin Dashboard</h1>
        <p>This is where you can manage and View details website.</p>
        <hr>

        <section class="dashboard" id="dashboard">
            <h2 class="heading">Dashboard</h2>
            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
            
            <div class="box">

                <div class="column">
                    <h1>00.k</h1>
                    <p>Total Views</p>
                </div>

                <div class="column">
                    <h1><?php echo $count; ?></h1>
                    <p>Site Products</p>
                </div>

                <div class="column">
                    <h1><?php echo $ucount; ?></h1>
                    <p>Total Users</p>
                </div>
                <div class="column">
                    <h1>0</h1>
                    <p>Today Orders</p>
                </div>

            </div>
            <h2>Customer Inquiries</h2>
            <?php foreach ($feedbacks as $feedback): ?>
                <div class="feedback">
                    <div>
                        <h3><?php echo $feedback["name"]; ?></h3>
                        <p><?php echo $feedback["email"]; ?></p>
                        <h4><?php echo $feedback["subject"]; ?></h4>
                        <p><?php echo $feedback["message"]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        
        </section>

        <section class="charts" id="charts">
            <h2 class="heading">Charts</h2>
            
            <!--Reference for charts :- https://www.w3schools.com/-->

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
            <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
        
            <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        
        </section>

        <section class="sales" id="sales">
            <h2 class="heading">Sales</h2>

            <div class="box-sales">

                <div class="column-sales">
                    <h1>Rs.000.00</h1>
                    <p>Today Sales</p>
                </div>

                <div class="column-sales">
                    <h1>Rs.000.00</h1>
                    <p>This month’s total sales</p>
                </div>

                <div class="column-sales">
                    <h1>Rs.000.00</h1>
                    <p>This month’s Refund Total</p>
                </div>
                <div class="column-sales">
                    <h1>Rs.000.00</h1>
                    <p>Last month’s total sales</p>
                </div>

            </div>
            <h2 class="heading">Order Details</h2>
        <?php
            echo "<table>
            <tr><th></th><th>Order ID</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Address</th>
            <th>City</th><th>Postal Code</th><th>Number</th><th>Payment</th>
            <th>Product ID</th><th>Size</th><th>Color</th><th>Quantity</th></tr>";
           
            if ($oresult->num_rows > 0) {
                while($row = $oresult->fetch_assoc()) {
                  echo "<tr><td><input type='checkbox' class='row-checkbox'></td>
                  <td>".$row["orderID"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["address"]."</td><td>"
                  .$row["city"]."</td><td>".$row["postal_code"]."</td><td>".$row["number"]."</td><td>"
                  .$row["payment"]."</td><td>".$row["ProductId"]."</td><td>".$row["size"]."</td><td>"
                  .$row["color"]."</td><td>".$row["quantity"]."</td></tr>";
                }
              } else {
                echo "<tr><td colspan='14'>No results</td></tr>";
              }
              echo "</table>";
        ?>   

        </section>

    </div>

    <?php
        $conn->close();
    ?>

    <script src="assets\js\admin.js"></script>
  
</body>

</html>