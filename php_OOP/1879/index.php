<?php
require 'Track.php';
require 'player.php';
require 'FlowPlayer.php';

// $my_player = new Kevin\App\Player;
// echo $my_player->start();

// $my_flowplayer = new Flowplayer\Player;
// echo $my_flowplayer->start();

use Kevin\App\Player;
use Flowplayer\Player as FlowPlayer;

$my_player = new Player;
echo $my_player->start();

$my_flowplayer = new FlowPlayer;
echo $my_flowplayer->start();
