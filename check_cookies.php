<?php
// Check if cookies are enabled
if (isset($_COOKIE['test_cookie'])) {
    $cookieEnabled = true;
} else {
    $cookieEnabled = false;
    setcookie('test_cookie', 'test', time() + 3600);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Test</title>
</head>
<body>
    <h1>Cookie Test</h1>

    <?php if ($cookieEnabled) : ?>
        <p>Cookies are enabled in your browser.</p>
    <?php else : ?>
        <p>Cookies are not enabled in your browser. Please enable cookies and refresh the page.</p>
    <?php endif; ?>
</body>
</html>
