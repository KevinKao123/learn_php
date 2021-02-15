<?php
// require 'Track.php';
// require 'player.php';
require 'autoload.php';

$track = new Track();
$track->track_name = 'Magic';
echo $track->track_name;
