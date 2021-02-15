<?php

class Track
{

  public $track_name;
  public $track_artiest;

  public function __construct()
  {
    echo '初期化img...';
  }

  public function track_playing()
  {
    return 'is playing: ' . self::$track_name . '<br/>';
  }
}
