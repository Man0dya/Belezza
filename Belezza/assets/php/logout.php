
<?php
    session_start();

    $_SESSION = array();

    // delete the session cookie
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // destroy the session
    session_destroy();
    header("Location: /fashion%20Store/index.php");
    exit;
?>
