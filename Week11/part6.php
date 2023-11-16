<?php
// HTML search form
echo '<form action="search_posts.php" method="post">
        <select name="field">
          <option value="id">ID</option>
          <option value="title">Title</option>
          <option value="content">Content</option>
          <option value="author">Author</option>
        </select>
        <input type="text" name="query">
        <input type="submit" value="Search">
      </form>';

// search_posts.php
$field = $_POST['field'];
$query = '%' . $_POST['query'] . '%';

// Field whitelist to prevent SQL injection
$validFields = ['id', 'title', 'content', 'author'];
if (!in_array($field, $validFields)) {
    die("Invalid field for search.");
}

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'username', 'password');
$sql = "SELECT * FROM posts WHERE $field LIKE :query";
$stmt = $pdo->prepare($sql);

// Execute with named parameter
$stmt->execute(['query' => $query]);

// Display results
echo '<table>';
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>
            <td>' . htmlspecialchars($row['title']) . '</td>
            <td>' . htmlspecialchars($row['author']) . '</td>
          </tr>';
}
echo '</table>';


?>