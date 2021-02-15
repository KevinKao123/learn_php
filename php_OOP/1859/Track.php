<?php

class Track
{
  // private $track_name = 'magic';
  protected $track_name = 'magic';
  public $track_artiesk;

  public function track_playing()
  {
    return 'is playing: ' . $this->track_name . '<br/>';
  }
}
