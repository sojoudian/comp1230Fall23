<?php
if (isset($_COOKIE['test_cookie'])) {
    setcookie('test_cookie', '', time() - 3600, "/");  // destroys the cookie
    $message = "Cookie deleted successfully!";
} else {
    $message = "Cookie not found.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Cookie</title>
</head>
<body>
    <h1>Delete Cookie</h1>

    <?php echo "<p>$message</p>"; ?>

    <a href="index.php">Back to main</a>
</body>
</html>
