<?php
//Using w Mode in PHP:
// When using the w mode:
// The file is opened for writing only.
// If the file does not exist, PHP attempts to create one.
// If the file exists, it will truncate (erase) the existing conte
$filename = "file.txt";
$content = "This is written using the 'w' mode.\n";

// Opening and writing to the file using "w" mode
if ($handle = fopen($filename, "w")) {
    fwrite($handle, $content);
    fclose($handle);
    echo "Data written successfully to $filename.";
} else {
    echo "Could not open the file for writing using 'w' mode.";
}

// Output the contents of the file to verify
echo "<br><br>Contents of $filename:<br>";
echo nl2br(file_get_contents($filename));

// Using w Mode in PHP:
// When using the w mode:

// The file is opened for writing only.
// If the file does not exist, PHP attempts to create one.
// If the file exists, it will truncate (erase) the existing conte
?>