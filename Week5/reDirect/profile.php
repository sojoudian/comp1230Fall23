<?php

$uID = $_GET['user_id'];

// Display the user_id if it's set
if (isset($uID)) {
    echo "Displaying profile for user with ID: " . $uID;
} else {
    echo "No user ID provided.";
}

?>
