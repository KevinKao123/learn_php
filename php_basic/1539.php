<?php

// 查找第三个引号中的第一个中的字符，替换为第二个
echo str_replace('aaa', "<span style='color:red'>aba</span>", "aaabbbcc");

$title38 = "海阔天空";
$artist38 = 'beyond';
$lyric = '今天我，寒夜里看雪飘过。title - artist';
echo str_replace(array('title', 'artist'), array($title38, $artist38), $lyric);
echo "<br/>";

$tracks = '长城|农民|不可一世|无语问苍天';

$track_array = explode('|', $tracks);

echo '<pre>';
var_dump(
  $track_array
);
echo '</pre>'; //pre标签，保留输出格式

echo implode('-', $track_array);

$content = '新鋭監督とともに贈るドラマプロジェクト『SSS～Special Short Story～』を立ち上げる';
echo '<br/>';
echo substr($content, 0, 1); //0代表第一个字符，1代表截取字符长度，乱码是因为一个汉字占用3个字符
echo '<br/>';
echo substr($content, 0, 3);
echo '<br/>';
// 使用 utf8 字符编码的，使用 mb_substr 函数截取的文字，一个中文字就是一个字符 ... 一个英文字母也会被认为是一个字符
echo mb_substr($content, 0, 3, 'utf-8') . '...';

echo '<br/>';
// 定义数组
$tracka = array();
$tracka[] = 'greatwall';
$tracka[] = 'bigcity';
$tracka[] = 'dalian';

echo $tracka[1];
echo '<pre>';
var_dump(
  $tracka
);
echo '</pre>';
echo 'print_r↓，var_dump↑<br/>';
echo '<pre>';
print_r(
  $tracka
);
echo '</pre>';

$tracka[] = 'yaowang';
array_push($tracka, 'wuyu', 'country');
echo '<pre>';
var_dump(
  $tracka
);
echo '</pre>';

array_pop($tracka); //删除最后一项
array_shift($tracka); //删除第一项
echo '<pre>';
var_dump(
  $tracka
);
echo '</pre>';

unset($tracka[1]); //删除某一项
echo '<pre>';
var_dump(
  $tracka
);
echo '</pre>';
