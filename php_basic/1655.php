<!-- 数组的指针，字符串拼接，集合 -->
<?php

$fruit = ['apple', 'banana', 'orange'];

echo '<pre>';
var_dump(
	$fruit,
	current($fruit), //指针当前指向
	next($fruit), //向后
	next($fruit),
	prev($fruit), //向前
	end($fruit), //指针移到最后
	reset($fruit), //回到数组第一项
	// each($fruit), //第一次执行指向第一个
	// each($fruit) //再执行往后移
	// 7.2以上废除了each
	// 	解决办法。
	// while (list($key, $val) = each($array)) { 
	// #code
	// }
	// 改为
	// foreach ($array as $key => $val) {
	// #code
	// }
);
echo '</pre>';


array_walk($fruit, function (&$value, $key) {
	$value = '#' . $value . '#' . $key;
}); //处理数组，用到函数，传参，拼接数组
echo "<pre style='color:pink;'>";
var_dump(
	$fruit,
);
echo '</pre>';
?>

<?php
$a = ['apple', 'orange'];
$b = ['apple', 'banana'];
echo "<pre style='background-color:pink;'>";
var_dump(
	// array_merge($a,$b),//合并数组
	array_unique(array_merge($a, $b)), //并集∪
	array_intersect($a, $b), //交集∩
	array_diff($a, $b), //数组a中包含，数组b中不包含的 A∩(A∩B)
	array_diff($b, $a) //数组b中包含，数组a中不包含的 B∩(A∩B)


);
echo '</pre>';
