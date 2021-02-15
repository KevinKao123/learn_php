<?php

class Player extends Track
{
  public function the_track_name()
  {
    echo $this->track_name;
    // echo parent::$track_name;
  }
}
