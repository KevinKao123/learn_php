<?php
$tracks = array('123', '233', '666');
// 关联数组
$album = array(
	'title' => 'luolaoshi',
	'src' => './luo.gif',
	'tracks' => $tracks

);
echo $album['title'];

echo include('./parts/_ppart_view.php');

echo '<pre>';
var_dump(
	$album
);
echo '</pre>';

echo $album['tracks'][2];

?>

<!-- echo缩略写法 -->
<?= include('./parts/_ppart_view.php') ?>
<?php
// echo '12345667';
echo "<pre style='color:red;'>";
// 如果想知道一个数组里面是否包含指定的键，也就是，是否包含特定名字的项目，可以使用 array_key_exists 函数 ...
var_dump(
	array_key_exists('src', $album)
);
echo '</pre>';

echo array_key_exists('src', $album);
echo array_key_exists('title', $album);

echo '<pre>';
var_dump(
	// 查找数组中是否有233
	// in_array('233',$tracks)
	// 查找数组中233的位置
	array_search('233', $tracks)
);
echo '</pre>';

echo array_search('233', $tracks);


$some_numbers = [3, 6, 1, 11];

echo "<pre style='color:blue;'>";
var_dump(
	$some_numbers,
	// sort($some_numbers),//排序
	// sort($some_numbers,SORT_NUMERIC),//按照数字类型排序
	// sort($some_numbers,SORT_STRING),//按照字符串类型数据排序
	// rsort($some_numbers),//倒叙，
	asort($some_numbers), //paixu 不改变索引值
	// arsort
	$some_numbers
);
echo "</pre";
echo "<br/>111111111111111111111111111111<br/>";

$fruit_price = [
	'banana' => '9.3',
	'orange' => '7.5',
	'apple' => '8.6'
];
echo '<pre>';
var_dump(
	$fruit_price,
	// asort($fruit_price),//paixu 不改变索引值 按数值
	// arsort($fruit_price),//paixu 不改变索引值 从大到小排序 按数值
	ksort($fruit_price), //paixu 不改变索引值 按名字
	krsort($fruit_price), //paixu 不改变索引值 按名字 大到小

	$fruit_price
);
echo '</pre';

// echo '<pre>';
// echo '</pre>'
