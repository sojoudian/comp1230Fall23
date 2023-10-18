<!DOCTYPE html>
<html>
<head>
    <title>List of Files & Directories</title>
</head>
<body>
    <h1>List of Files & Directories</h1>

    <ul>
        <?php
        $dir_path = getcwd();  // get current working directory
        $items = scandir($dir_path);

        foreach ($items as $item) {
            if ($item !== '.' && $item !== '..') {
                echo "<li>" . ($item) . "</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
