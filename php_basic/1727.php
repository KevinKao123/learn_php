<?php

// fetch
// http://cn2.php.net/manual/zh/pdostatement.fetch.php

try {
  //OWNPWD: input your own password
  $db_handle = new PDO('mysql:host=localhost;dbname=php_test;port=3306;charset=utf8', 'root', 'OWNPWD');

  $statement = $db_handle->prepare(
    'SELECT * FROM posts'
  );

  $statement->execute();
  // 这样所有用 $statement 的 fetch 方法提供的内容，都会使用关联数组的样式。
  $statement->setFetchMode(PDO::FETCH_ASSOC);

  while ($row = $statement->fetch()) {
    echo '《' . $row['title'] . '》' . $row['content'] . '<br/>';
  }

  echo '<pre>';
  var_dump(
    // 用 PDO::FETCH_NUM 提取的内容，只用数字索引键 ... 
    // 用 PDO::FETCH_ASSOC 的 fetch ，返回的是个关联数组，也就是数组里面的每个项目都有个名字
    // 这个名字就是数据表里面的栏的名字。
    //用 PDO::FETCH_OBJ 的 fetch ，返回来的是一个对象。对象里面的属性的名字就是数据表里面的栏的名字 ...

    $statement->fetch(),
    // $statement->fetch(PDO::FETCH_NUM),
    // $statement->fetch(PDO::FETCH_ASSOC),
    // $statement->fetch(PDO::FETCH_OBJ)
  );
  echo '</pre>';
} catch (PDOException $e) {
  echo $e->getMessage();
}
