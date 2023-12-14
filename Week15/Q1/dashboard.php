<?php
session_start();

if (!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
}

echo "Welcome to the dashboard! . <a href='logout.php'>Logout</a>";

?>