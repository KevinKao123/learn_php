<?php

session_start();

if (!isset($_SESSION['is_login'])) {
  header('Location:login.php');
  exit();
}

echo 'hello:' . $_SESSION['username'] . '<a href="logout.php">logout</a>';
