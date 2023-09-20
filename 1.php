<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER Dump</title>
</head>
<body>
    <h1>$_SERVER Superglobal Dump</h1>

    <table border="1">
        <tr>
            <th>Variable</th>
            <th>Value</th>
        </tr>
        <?php
        foreach ($_SERVER as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
