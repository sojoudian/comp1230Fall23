<?php

function getCurrentTimeInToronto() {
    // Set the time zone to Eastern Time (Toronto, Canada)
    date_default_timezone_set('America/Toronto');
    
    // Get the current time using strtotime() and format it using date()
    $currentTime = date('Y-m-d H:i:s', strtotime('now'));
    
    // Return the formatted current time
    return $currentTime;
}

// Call the function and display the current time in Toronto
echo getCurrentTimeInToronto();

?>
