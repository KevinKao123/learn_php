<?php

setcookie('color', 'blue');
setcookie('layout', 'wide');


echo $_COOKIE['color'] . '<br/>' . $_COOKIE['layout'];

echo '<br/><a href="./parts/user.php" class="">user.php</a><br/>';


// 开始会话生成的id值phpsession
session_start();

$_SESSION['username'] = 'kevin';

// unset($_SESSION['username']);

echo $_SESSION['username'];

session_destroy();

$_SESSION = array();
