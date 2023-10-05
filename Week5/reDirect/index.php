<?php
//php -S localhost:64000
//http://localhost:64000/profile.php?user_id=1234
// Check if the user_id parameter exists in the request
if (isset($_GET['user_id'])) {
    $userId = $_GET['user_id'];

    // Redirect to the profile page with the user_id parameter
    header("Location: profile.php?user_id=$userId");
    exit();  // Ensure no further processing happens after redirection
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Example</title>
</head>
<body>

<p>Welcome to the index page. If a user_id is provided in the URL, you will be redirected to the profile page.</p>

</body>
</html>

<?php
// How to test:

// If you access index.php without any parameters (e.g., http://yourserver/index.php), you'll see the welcome message.
// If you access index.php with a user_id parameter (e.g., http://yourserver/index.php?user_id=123), you'll be redirected to profile.php and see a message like "Displaying profile for user with ID: 123".
// This is a basic example, and in a real-world application, you'd probably have additional checks, security measures, and more comprehensive handling of the redirection and parameters.
?>