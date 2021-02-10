<?php
$user_name = 'kevin';
$user_role = 'admin';
$is_login = 'true';

if ($is_login && $user_role === 'admin') { //=赋值 ==判断相等 ===判断相等，类型相同
	echo 'hello,guanliyuan,' . $user_name;
} elseif ($is_login) {
	echo 'hello,' . $user_name;
} else {
	echo '请先登录';
}
echo '</br>';


$rate = 5;
switch ($rate) {
	case $rate > 8:
		echo '不可错过的';
		break;
	case $rate > 6:
		echo '还行，可以看看';
		break;
	default:
		echo '浪费时间，别管了';
		break;
}
echo '</br>';

$num = 10;
while ($num >= 1) {
	echo $num . '&nbsp;';
	$num = $num - 1;
}
echo '</br>';


for ($i = 10; $i >= 1; $i--) {
	echo $i . '&nbsp;';
}
echo '</br>';

$tracks = array('123', '233', '666');
$album = array(
	'title' => 'luolaoshi',
	'src' => './luo.gif',
	'tracks' => 'tracks'

);
foreach ($tracks as $track) {
	echo $track . '&nbsp;';
}
echo '</br>';
foreach ($album as $key => $value) {
	echo $key . "<span style='color:red;'>: </span>" . $value . '<br/>';
}
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