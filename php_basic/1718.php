<?php

// mysql -u root -p -h localhost

// CREATE TABLE `posts` (
// 	`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
// 	`title` VARCHAR(255),
// 	`content` VARCHAR(255))
// DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

try {
  //OWNPWD: input your own password
  $db_handle = new PDO('mysql:host=localhost;dbname=php_test;port=3306;charset=utf8', 'root', 'OWNPWD');

  $statement = $db_handle->prepare(
    // 'INSERT INTO posts(title,content) VALUES (?,?)'
    'INSERT INTO posts(title,content) VALUES (:title,:content)'

  );

  // $title = '海上钢琴师';
  // $content = '一名具有钢琴天赋的孤儿历经一切的苦难：音乐、爱情、以及两次世界大战';
  $data = [
    'title' => '海上钢琴师',
    'content' => '一名具有钢琴天赋的孤儿历经一切的苦难：音乐、爱情、以及两次世界大战'
  ];
  // 上面准备好的声明叫做 $statement .. 调用它的 bindParam 方法 ... 
  // 方法里有两个参数，第一个参数是声明里的点位符 ... 
  // 如果我们在声明里给点位符起了名字，在这里就可以使用这个点位符的名字 ... 
  // 没起名字的话 ... 可以使用点位符的序号 ...
  // $statement->bindParam(1, $title);
  // $statement->bindParam(2, $content);

  // $statement->bindParam(':title', $title);
  // $statement->bindParam(':content', $content);

  $statement->execute($data);
} catch (PDOException $e) {
  echo $e->getMessage();
}
