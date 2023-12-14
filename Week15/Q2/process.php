<?php
    if (isset($_POST['user_input'])) {
        $input = htmlspecialchars($_POST['user_input']);
        echo " User input is: ". $input;
    }
    // https://github.com/sojoudian/
    // https://github.com/sojoudian/comp1230Fall23/
    // https://github.com/sojoudian/comp1230Fall23/tree/master/Week15/Q2
?>