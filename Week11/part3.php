<?php
    $mysqli = new mysqli('localhost', 'root', 'password', 'blog');
    $result = $mysqli->query("SELECT * FROM posts");

    echo '<table>';
        while ($row = $result->fetch_assoc()){
            echo '<tr>
                <td>'. $row['title'] . ' </td>
                <td>'. $row['author'] . ' </td>
                <td><a href="edit_post.php?id= ' . $row['id'] .'">Edit</a></td>
                <td><a href="delete_post.php?id= ' . $row['id'] .'">Delete</a></td>
            </tr>';

        }
    echo'</table>';
?>