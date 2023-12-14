<?php
session_start();

// For demo we will create an Admin user
$valid_username = "admin";
$valid_password = "password";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
        session_regenerate_id();
        $_SESSION['loggeding'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Incorrect username or password,";
    }
}
?>

<form method="past">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">

</form>