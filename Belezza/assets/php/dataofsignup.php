<!-- IT23142732 -->
<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    require __DIR__ . '/config/config.php';

    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $cpassword = $_POST['cpass'];

        $stmt = $conn->prepare("SELECT * FROM signup WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $count_email = $result->num_rows;

        if($count_email == 0){
            if($password == $cpassword){

                $stmt = $conn->prepare("INSERT INTO signup(fname, lname, email, password) VALUES(?, ?, ?, ?)");
                $stmt->bind_param("ssss", $fname, $lname, $email, $password);

                if ($stmt->execute()) {
                    $_SESSION['user_email'] = $email;
                    $_SESSION['user_fname'] = $fname;
                    $_SESSION['user_lname'] = $lname;

                    echo '<script>alert("Account created successfully.");</script>';
                    header("Location: /fashion%20Store/login.php");
                } else {
                    echo "Error: " . $stmt->error;
                }
            } else {
                echo '<script>alert("Passwords do not match.");</script>';
                
            }
        } else {
            echo '<script>alert("Email already exists.");</script>';
        }

        $stmt->close();
    }

    $conn->close();
?>
