<?php
session_start();
// if user logged in
if(!isset($_SESSION['is_user']) or $_SESSION['is_user'] != true)
   header('location: home.php');
    $user_dir = 'userImg' . DIRECTORY_SEPARATOR . $_SESSION['user_info']['username'] . DIRECTORY_SEPARATOR;
    move_uploaded_file($_FILES['userpic']['tmp_name'],$user_dir . $_FILES['userpic']['name']);
    header('location: dashboard.php');
?>