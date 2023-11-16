<?php 
//delete
// delete_post.php
$id = $_GET['id'];
$mysqli = new mysqli('localhost', 'username', 'password', 'blog');
$sql = "DELETE FROM posts WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->execute([$id]);

// Redirect back to the posts list
header('Location: display_posts.php');
?>