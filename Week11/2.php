// Part 2: PHP script to insert a new post
// HTML Form
echo '<form action="add_post.php" method="post">
        Title: <input type="text" name="title"><br>
        Content: <textarea name="content"></textarea><br>
        Author: <input type="text" name="author"><br>
        <input type="submit" value="Submit">
      </form>';

// add_post.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    $pdo = new PDO('mysql:host=localhost;dbname=blog', 'username', 'password');
    $sql = "INSERT INTO posts (title, content, author) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $author]);
}
