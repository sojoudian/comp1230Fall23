<?php
session_start();

$usersFile = "users.txt";

function getUsers() {
    global $usersFile;
    $users = [];
    $lines = file($usersFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        list($username, $password) = explode(":", $line);
        $users[$username] = $password;
    }
    return $users;
}

function authenticate($username, $password) {
    $users = getUsers();
    if (isset($users[$username]) && $users[$username] == md5($password)) { // MD5 is used for simplicity. Use `password_hash` and `password_verify` in production.
        return true;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (authenticate($username, $password)) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $username;
    } else {
        $error = "Invalid username or password!";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="index.php?logout=1">Logout</a>
    <?php else: ?>
        <h1>Login</h1>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post">
            <label>Username: <input type="text" name="username"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <input type="submit" value="Login">
        </form>
    <?php endif; ?>
</body>
</html>
