<?php
// public private protected
require 'Track.php';
require 'player.php';

$magic = new Track();

// echo $magic->track_name;
echo $magic->track_playing();

$my_player = new Player();
$my_player->the_track_name();
