<?php
//1- open a file ------ ok ---- from the hard disk, file will be loaded into the memory
//2- make your changes ------ ok ---- in the memory, we will do our modifications
//3- close the file ------ ok ---- save the changes from the memory into the hard disk
// we make the memory space for that file free


$filename = "file.txt";
$content = "This msg was writen using 'w' method\n";

if($handle = fopen($filename, 'w')){
    fwrite($handle, $content);
    fclose($handle);
} else {
    echo "Error: File not found";

}

//output of the file
echo "<br><br> Contents of the $filename: <br><br>";
echo nl2br(file_get_contents($filename));
?>