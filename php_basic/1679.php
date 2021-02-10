<?php
// print_r($_SERVER);
?>

<!DOCTYPE html>
<html lang="zh-hans">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php 表单</title>
</head>

<body>
  <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
    <!-- <form action="./parts/process.php" method="post"> -->
    <form action="<?php $_SERVER['SCRIPT_NAME']; ?>" method="post">
      <input type="text" name="username" id="" placeholder="用户名">
      <input type="email" name="email" id="" placeholder="email">
      <button type="submit">提交</button>
    </form>
  <?php endif; ?>
  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
    <?php
    if (strlen($_POST['username']) && strlen($_POST['email'])) {
      echo '您好：' . $_POST['username'] . '您的邮件地址：' . $_POST['email'];
    } else {
      echo '请输入正确的用户名和地址';
    }
    ?>
  <?php endif; ?>
</body>

</html>