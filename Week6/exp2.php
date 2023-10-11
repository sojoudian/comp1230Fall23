<?php
// Using a Mode in PHP:
// When using the a mode:

// The file is opened for writing only.
// If the file does not exist, PHP tries to create one.
// If the file exists, the file pointer is at the end of the file. Thus, data will be appended to the file.
$filename = "file.txt";
$content = "This line is appended using the 'a' mode.\n";

// Opening and writing to the file using "a" mode
if ($handle = fopen($filename, "a")) {
    fwrite($handle, $content);
    fclose($handle);
    echo "Data appended successfully to $filename.";
} else {
    echo "Could not open the file for appending using 'a' mode.";
}

// Output the contents of the file to verify
echo "<br><br>Contents of $filename:<br>";
echo nl2br(file_get_contents($filename));

// Using a Mode in PHP:
// When using the a mode:

// The file is opened for writing only.
// If the file does not exist, PHP tries to create one.
// If the file exists, the file pointer is at the end of the file. Thus, data will be appended to the file.
?>