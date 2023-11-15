<?php// edit_post.php
$id = $_GET['id'];
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'username', 'password');
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();

// HTML form for editing
echo '<form action="update_post.php" method="post">
        <input type="hidden" name="id" value="' . $post['id'] . '">
        Title: <input type="text" name="title" value="' . $post['title'] . '"><br>
        Content: <textarea name="content">' . $post['content'] . '</textarea><br>
        Author: <input type="text" name="author" value="' . $post['author'] . '"><br>
        <input type="submit" value="Update">
      </form>';

// update_post.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    $sql = "UPDATE posts SET title = ?, content = ?, author = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $author, $id]);
}
?>