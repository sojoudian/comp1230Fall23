<?php
session_start();
// if user logged in
if(!isset($_SESSION['is_user']) or $_SESSION['is_user'] != true)
   header('location: home.php');
include 'util.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div style='position:fixed;right:30px;'><a href='logout.php'>Logout</a></div>
    <h1>Hello <?=$_SESSION['user_info']['username'];?></h1>
    <hr>
    <?php
        $user_dir = 'userImg' . DIRECTORY_SEPARATOR . $_SESSION['user_info']['username'] . DIRECTORY_SEPARATOR;
        
        if(file_exists($user_dir))
        {
            // director exsits
            /*
                1. show exsiting images
                2. upload new image
                3. delete an image.
            */
            ?>
                <form action="upload.php" method=post enctype='multipart/form-data'>
                    Upload an Image:
                    <input type="file" name="userpic" id="">
                    <input type="submit" value="uplaod">
                </form>

            <?php

            //$img = scandir($user_dir);
            $images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($user_dir));
            if(count($images))
            {
                // found images.
                foreach ($images as $key => $img_name) {
                    # code...
                    echo '<br>';
                    echo sprintf("<a href='delete.php?name=%s'>Delete</a>",$img_name);
                    echo sprintf("<img src='%s' alt='' width=200>",$user_dir . $img_name);                    
                }
            }
        }
        else
        {
            // make the directory
            mkdir($user_dir);
            logInfo(
                sprintf('%s,%s,%s folder is created',
                    $_SESSION['user_info']['username'],
                    'CUFOLDER',$_SESSION['user_info']['username'])
            );
            
        }
    ?>
</body>
</html>