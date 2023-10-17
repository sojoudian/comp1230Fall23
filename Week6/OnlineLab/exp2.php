<?php
$filename = "file.txt";
$content = "This msg was writen using 'a' method\n";

if($handle = fopen($filename, 'a')){ // we are using a Acess Method and 'a' means append
    fwrite($handle, $content);
    fclose($handle);
}else{
    echo "Error: File not found";
}

echo "<br><br> Contents of the $filename: <br><br>";
echo nl2br(file_get_contents($filename));
?>