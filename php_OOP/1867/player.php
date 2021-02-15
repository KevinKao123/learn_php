<?php

class Player extends Track
{
  public function __construct()
  {
    // 先执行父类
    parent::__construct();
    echo __CLASS__ . '初期化player';
  }

  public function the_track_name()
  {
    echo parent::track_playing();
  }
}
