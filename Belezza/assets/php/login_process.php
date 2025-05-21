<!-- IT23209466 -->
<?php
    session_start();
    require __DIR__ . '/config/config.php';

    if (isset($_SESSION['user_logged_in'])) {
        echo "<script>window.location.href = '/fashion%20Store/userAcc.php';</script>";
        exit;
    } else if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $resultAdmin = $conn->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
        $resultUser = $conn->query("SELECT * FROM signup WHERE email = '$email' AND password = '$password'");

        if ($resultAdmin->num_rows > 0) {
            $_SESSION['admin_logged_in'] = true;
            echo "<script>window.location.href = '/fashion%20Store/admin.php';</script>";
            exit;
        } elseif ($resultUser->num_rows > 0) {
            $user = $resultUser->fetch_assoc();
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_fname'] = $user['fname']; 
            $_SESSION['user_lname'] = $user['lname']; 
            $_SESSION['user_email'] = $user['email']; 
            echo "<script>window.location.href = '/fashion%20Store/index.php';</script>";
            exit;
        } else {
            echo "<script>alert('Invalid Email or Password')
            window.location.href = '/fashion%20Store/login.php';</script>";
        }
    }

    $conn->close();
?>
