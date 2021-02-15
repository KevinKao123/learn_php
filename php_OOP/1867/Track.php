<?php

class Track
{

  // public $track_name;
  private $track_name;
  public $track_artiest;

  public function __construct()
  {
    echo '初期化img...';
  }

  public function set_track_name($value)
  {
    $this->track_name = $value;
  }

  public function get_track_name()
  {
    return $this->track_name;
  }

  public function track_playing()
  {
    return 'is playing: ' . self::$track_name . '<br/>';
  }
}
