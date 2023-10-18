<?php
//ini_set('session_cookie_httponly','1');
ini_set('session.cookie_secure', '1');
ini_set('session.cookie_httponly', '1');
ini_set('session.use_only_cookies', '1');
session_start();

//setcookie('color','lightblue',strtotime('+3 days'),'/','localhost',false,true);
$_SESSION['color'] = 'lightblue';
//phpinfo();
echo '<pre>';
print_r($_COOKIE);

print_r($_SESSION);