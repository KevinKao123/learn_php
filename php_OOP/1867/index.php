<?php
// public private protected
require 'Track.php';
require 'player.php';

$magic = new Track();
// $magic->track_name = 'magic';

$magic->set_track_name('magic');

echo $magic->get_track_name();
echo '<br/>';
print_r($magic);
