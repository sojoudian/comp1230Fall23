<?php
  session_start();
  $file_name = 'data' . DIRECTORY_SEPARATOR . 'users.txt';
  include 'util.php';
 
  $user = $_REQUEST['username'] ?? '';
  $pass = $_REQUEST['password'] ?? '';

  if(empty($user) || empty($pass))
    header('location: home.php');
  
  $f = fopen($file_name,'r');
  
  if($f)
  {
    $user_is_found = false;
    while(!feof($f))
    {
        $user_info = fgetcsv($f);
        if($user_info[2] == $pass)
        {
            $user_is_found = true;
            $_SESSION['is_user'] = true;
            $user = [
                'id' => $user_info[0],
                'username' => $user_info[1],
                'role'  => $user_info[3]
            ];
            $_SESSION['user_info'] = $user;
            logInfo(
                sprintf('%s,%s,%s logged in',
                    $_SESSION['user_info']['username'],
                    'ULogin',$_SESSION['user_info']['username'])
            );
            break;
        }

    }
    fclose($f);
    if($user_is_found)
    {
        header('location: dashboard.php');
        exit;
    }
    header('location: home.php');
  }