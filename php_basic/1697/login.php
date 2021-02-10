<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_POST['username'] === 'kevin' && $_POST['password'] === '123456') {
    $_SESSION['is_login'] = true;
    $_SESSION['username'] = 'kevin';
    header('Location:index.php');
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="zh-hans">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="<?php $_SERVER['SCRIPT_NAME']; ?>" method="post">
    <input type="text" name="username" id="" placeholder="username">
    <input type="password" name="password" id="" placeholder="password">
    <button type="submit">Login</button>
  </form>
</body>

</html>