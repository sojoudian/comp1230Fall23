<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie('test_cookie', 'This is a test cookie', time() + 3600, "/");  // sets cookie for 1 hour
    $message = "Cookie set successfully!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
    <h1>Welcome to Cookie Demo</h1>

    <?php if (isset($message)) echo "<p>$message</p>"; ?>

    <form method="post">
        <button type="submit">Set a Cookie</button>
    </form>
    <br>
    <a href="show_cookie.php">Show Cookie</a>
    <br>
    <a href="delete_cookie.php">Delete Cookie</a>
</body>
</html>
