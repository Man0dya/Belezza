<!-- IT23252554 -->
<?php
    require __DIR__ . '/config/config.php';

    if(isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
       
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message']; 
       
        $stmt = $conn->prepare("INSERT INTO contactus(name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message); 

        if($stmt->execute()){
            echo "<script>alert('Submit successfully');
             window.location.href = '/fashion%20Store/ContactUs.php';</script>";
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
