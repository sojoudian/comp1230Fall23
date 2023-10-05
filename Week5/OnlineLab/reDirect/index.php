<?php
// if you open the following URL in your browser:
// http://localhost/index.php?user_id=1234 ******************
// You will be redirected to the
// http://localhost/profile.php
// page with the user_id in the URL.

if(isset($_GET['user_id'])){ //inside url ?user_id=1234

    $uID = $_GET['user_id']; ///  $_GET['user_id']; //http://localhost/index.php?user_id=1234

    header("Location: profile.php?user_id=$uID");

    exit();
} else {    
    echo "No user ID found.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reDirect</title>
</head>
<body>
    <p>Welcome to the index page. if you provide a 
        user_id in the URL, you will be able to
        reDirect to the profile page.</p>
    </p>
</body>
</html>


