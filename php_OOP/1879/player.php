<?php


namespace Kevin\App;

class Player extends Track
{
  public function start()
  {
    return 'Is playing...';
  }

  public function stop()
  {
    return 'Stop playing...';
  }
}
