<?php

class Track
{
  public $track_name;
  public $track_artiesk;

  public function track_playing()
  {
    return 'is playing: ' . $this->track_name . '<br/>';
  }
}
