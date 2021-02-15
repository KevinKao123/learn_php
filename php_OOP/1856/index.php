<?php

require 'Track.php';

$magic = new Track();

$magic->track_name = 'magic';
$magic->track_artiesk = 'coldplay';

$amani = new Track();
$amani->track_name = 'amani';
$amani->track_artiesk = 'beyond';

echo $magic->track_playing();
echo $amani->track_playing();

print_r($magic);

echo $magic->track_name . '<br/>';
echo $magic->track_artiesk . '<br/>';

echo $amani->track_name . '<br/>';
echo $amani->track_artiesk . '<br/>';
