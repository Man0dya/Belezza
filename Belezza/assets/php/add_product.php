<!-- IT23187214 -->
<?php
     
    require __DIR__ . '/config/config.php';

    if(isset($_POST['title'], $_POST['price'], $_POST['category'], $_POST['description'], $_POST['availability'], $_FILES["image"])) {
       
        $title = $_POST['title'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description']; 
        $availability = $_POST['availability']; 
        $sizes = isset($_POST['size']) ? implode(',', $_POST['size']) : null; 
        $colors = isset($_POST['color']) ? implode(',', $_POST['color']) : null;

        // Handle the uploaded file
        if($_FILES["image"]["error"] == 0){
            $filename = $_FILES["image"]["name"];
            
            $upload_dir = 'upload/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            if(file_exists($upload_dir . $filename)){
                echo $filename . " already exists.";
            } else{
                move_uploaded_file($_FILES["image"]["tmp_name"], $upload_dir . $filename);
                
            } 
        }
        else
        {
            echo "Error: " . $_FILES["image"]["error"];
            echo "Your file was uploaded unsuccessfully.";
        }

        $image = $upload_dir . $_FILES['image']['name'];

        $stmt = $conn->prepare("INSERT INTO products (title, price, category, description, availability, image, size, color) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $title, $price, $category, $description, $availability, $image, $sizes, $colors); 

        if($stmt->execute()){
            echo "<script>alert('Product added successfully')
            window.location.href = '/fashion%20Store/manage-product.php';</script>";
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
