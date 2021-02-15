<?php
// public private protected
require 'Track.php';
require 'player.php';

$magic = new Track();
$magic->track_name = 'magic';
// 在track中限制了，因为属性不存在，就不能设置
$magic->duration = '3分';

$magic->track_artist = 'coldplay';

echo $magic->track_name;
echo '<br/>';
print_r($magic);
echo '<br/>';
// 不会显示，因为限制了访问
echo $magic->track_artist;
