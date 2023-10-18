<!DOCTYPE html>
<html>
<head>
    <title>Show Cookie</title>
</head>
<body>
    <h1>Your Cookie Value</h1>

    <?php 
    if (isset($_COOKIE['test_cookie'])) {
        echo "<p>Cookie value: " . $_COOKIE['test_cookie'] . "</p>";
    } else {
        echo "<p>No cookie found.</p>";
    }
    ?>

    <a href="index.php">Back to main</a>
</body>
</html>
