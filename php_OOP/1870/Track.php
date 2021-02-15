<?php

class Track
{

  private $white_list = array('track_name');
  private $track_name;
  private $track_artist;

  public function __set($name, $value)
  {
    // $this->$name = $value;

    // 在 __set 函数里，可以加上一个 if ，去判断一下 .. 判断的条件是属性已经存在了 ... 
    // 可以使用 property_exists 这个函数 ... 这个函数有两个参数
    // 第一个参数是要判断的对象 ... 这里用 $this 来表示 .... 第二个参数是要判断的属性 ... 用 $name 来表示 ... 如果属性在对象里面存在的话 ... 这个函数就会返回 true ....
    if (property_exists($this, $name)) {
      $this->$name = $value;
    }
  }

  public function __get($name)
  {
    // return $this->$name;

    if (in_array($name, $this->white_list)) {
      return $this->$name;
    } else {
      return null;
    }
  }

  public function track_playing()
  {
    return 'is playing: ' . self::$track_name . '<br/>';
  }
}
