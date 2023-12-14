<?php
    session_start();
    if (isset($_POST['csrf_token'])) {
        if ($_SESSION['csrf_token'] === $_POST['csrf_token']) {
            echo "CSRF validation successful. Form processing here.";
            // Process the form data
        } else {
            echo "CSRF token validation failed";
        }
    } else {
        echo "NO CSRF token found";
    }
?>