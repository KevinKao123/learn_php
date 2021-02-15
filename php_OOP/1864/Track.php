<?php

class Track
{

  public $track_name;
  public $track_artiesk;

  public function __clone()
  {
    $this->track_name .= '副本';
  }

  public function track_playing()
  {
    return 'is playing: ' . self::$track_name . '<br/>';
  }
}
