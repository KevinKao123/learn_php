<?php

$name = 'family';
echo "hello world<br>";
echo 'We \'re family<br>';
echo "we're family<br>";
echo "we are $name \n<br>";
echo 'we are $name \n';

//多行定义
echo <<< LYRIC
<br/>
$name
私たちは、
常にお客様の想いを第一に考え、
LYRIC;

// 清理字符串前后多余的字符 
$email = "  kevin@qq.com.cn   \r\n";
echo '<pre>';
var_dump(
$email,
trim($email),
// 只去掉引号内的符号
trim($email," \r"),
//trim 去掉空格
ltrim($email),
rtrim($email)
);
echo '</pre>';

// 字符串格式化 
echo strtoupper('magic');
echo strtolower('MagiC<br/>');
echo ucfirst('how are you<br/>');
echo ucwords('da da da<br/>');
// 在预定义字符之前添加反斜杠的字符串
echo addslashes("we're the world<br/>");
// 删除反斜杠
echo stripcslashes("we /'re\ the world<br/>");
echo "<br/>";
// 返回之后的字符
echo strstr($email,'@');
// stristr 不区分大小写
// 返回之前的字符
echo strstr($email,'@',true);
echo strstr($email,'.');
echo strstr($email,'lala');
echo "<br/>";
echo trim(strstr($email,'.'),'.');

echo "<br/>";
// 查找字符串中的字符的位置号 
echo strpos($email,'.');
echo "<br/>";
echo strpos($email,'.',12);
echo "<br/>";
echo strrpos($email,'.');
echo "<br/>";
echo strrpos($email,'.',-5);//pos:position