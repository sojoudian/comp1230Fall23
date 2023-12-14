<?php
    if (isset($_POST['user_input'])) {
        $input = htmlspecialchars($_POST['user_input']);
        echo " User input is: ". $input;
    }
?>