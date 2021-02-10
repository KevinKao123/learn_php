<?php
// demo01
function say_hello($name)
{
	return 'hello world, ' . $name;
}

echo say_hello('kevin');


// demo 02 design a content list
function make_list($source, $container = 'ul')
{
	if (is_array($source)) {
		$lists = '';
		foreach ($source as $item) {
			$lists .= '<li>' . $item . '</li>';
		}
		return "<$container>$lists</$container>";
	}
	return 'please provide array data';
}

$tracks = array('长城', '农民', '不可一世', '早班火车');
echo make_list($tracks, 'ol');


// demo 03 use import way to transport variables
$title = '继续革命';

// 让 become_strong 的参数，作为引用传递到函数 
// 这样需要在参数名字的前面加上一个 & 符号 
// 这就表示，这个参数会作为引用传递到函数 
function become_strong(&$string)
{
	// 因为现在 become_strong 这个函数接受的参数，是用引用的方式传递过来的
	// 所以，在函数内部对这个参数所做的修改，都会影响到作为它的参数传递过来的那个变量的值。
	$string = "<strong>$string</strong>";
}

become_strong($title);

echo '<pre>';
var_dump($title);
echo '</pre>';

function make_link($attributes = array())
{
	return '<a href="' . $attributes['url'] . '">' . $attributes['title'] . '</a>';
}

echo make_link(array('url' => 'https://google.com', 'title' => 'google'));

// 变量的作用域
// demo 04 where we can use variables
// 我们在 get_title 里面，并没有定义 $title 这个变量 
// 虽然在全局范围里面有一个 $title 变量，但是默认情况下，在函数的内部不能访问全局变量 
function get_title()
{
	// 不过在函数里面，可以使用一个 global 关键词 去声明一下要使用的全局变量
	global $title;
	return $title;
}

echo get_title();
