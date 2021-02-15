<?php
// public private protected
require 'Track.php';
require 'player.php';

$magic = new Track();
$magic->track_name = 'Magic';

// copy会改变原来的值，clone不会。clone可以执行track内的__clone方法
$magic_copy = $magic;
$magic_copy->track_name = 'magic copy';

$magic_clone = clone $magic;
$magic_clone->track_name = 'magic clone';

$magic__clone = clone $magic;

echo '<br/>';
print_r($magic);
echo '<br/>';
print_r($magic_copy);
echo '<br/>';
print_r($magic_clone);
echo '<br/>';
print_r($magic__clone);
