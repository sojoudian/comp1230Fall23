<?php
$uID = $_GET['user_id']; //http://localhost/profile.php?user_id=1234

if(isset($uID)){
    echo "User ID: " . $uID;
} else {    
    echo "No user ID found.";
}
?>