<?php
// public private protected
require 'Track.php';
require 'player.php';

//我们可以直接使用类名，后面加上两个冒号 
// 这个符号叫做范围解析操作符，然后是静态的属性或者方法的名称 .. 
// 注意这个属性名称的前面要加上 $ 符号
echo Track::$track_name;

echo Track::track_playing();
