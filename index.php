<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php Learning</title>
  <style>
    body {
      padding: 20px;
    }

    .container {
      display: flex;
    }

    .linkGroup {
      display: flex;
      flex-direction: column;
    }

    .linkGroup a {
      font-size: 20px;
      text-decoration: none;
      color: #555;
      padding: 10px 0;
      margin-right: 30px;
      /* width: 200px; */
    }

    .linkGroup a:hover {
      text-decoration: underline;
    }

    .linkGroup a span {
      color: plum;
      margin-right: 20px;
    }
  </style>
</head>

<body>
  <!-- php -S localhost:3001 -->
  <h1 style="color: pink;">PHP Learning</h1>
  <div class="container">
    <div class="linkGroup">
      <a href="./php_basic/1529.php"><span>1529</span>comments/variables</a>
      <a href="./php_basic/1532.php"><span>1532</span>string(trim/heredoc...)</a>
      <a href="./php_basic/1539.php"><span>1539</span>string(explode..)/array(pop/push...)</a>
      <a href="./php_basic/1638.php"><span>1638</span>array(array_search/sort...)</a>
      <a href="./php_basic/1655.php"><span>1655</span>array(next/array_merge...)</a>
      <a href="./php_basic/1670.php"><span>1670</span>if/switch/while/for/foreach</a>
      <a href="./php_basic/1679.php"><span>1679</span>forms(method:get/post)</a>
      <a href="./php_basic/1694.php"><span>1694</span>session/cookie</a>
      <a href="./php_basic/1697/index.php"><span>1697</span>login/logout</a>
      <a href="./php_basic/1707.php"><span>1707</span>function</a>
      <a href="./php_basic/1718.php"><span>1718</span>database(PDO)</a>
      <a href="./php_basic/1727.php"><span>1727</span>database(fetch)</a>
    </div>
    <div class="linkGroup">
      <a href="./php_OOP/1856/index.php"><span>1856</span>create class/properties/methods</a>
      <a href="./php_OOP/1859/index.php"><span>1859</span>inheritance/private/protected</a>
      <a href="./php_OOP/1862/index.php"><span>1862</span>static/self</a>
      <a href="./php_OOP/1863/index.php"><span>1863</span>parent</a>
      <a href="./php_OOP/1864/index.php"><span>1864</span>copy/clone/__clone()</a>
      <a href="./php_OOP/1866/index.php"><span>1866</span>__construct()</a>
      <a href="./php_OOP/1867/index.php"><span>1867</span>encapsulation(setters/getters)</a>
      <a href="./php_OOP/1870/index.php"><span>1870</span>__set/__get(limit)</a>
      <a href="./php_OOP/1874.php"><span>1874</span>abstract classes</a>
      <a href="./php_OOP/1875.php"><span>1875</span>abstract method</a>
      <a href="./php_OOP/1876.php"><span>1876</span>interface</a>
      <a href="./php_OOP/1877.php"><span>1877</span>traits</a>
      <a href="./php_OOP/1878/index.php"><span>1878</span>SPL(spl_autoload_register)</a>
    </div>
    <div class="linkGroup">
      <a href="./composer/index.php"><span>5011</span>composer</a>
      <a href="./composer/readme.md"><span>5011</span>composer's readme</a>
      <a href="./design_mode/factory.php"><span>4998</span>factory mode</a>
      <a href="./design_mode/adapter.php"><span>4998</span>adapter mode</a>
      <a href="./design_mode/decorator.php"><span>4998</span>decorator mode</a>
    </div>
  </div>

</body>

</html>