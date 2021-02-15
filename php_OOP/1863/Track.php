<?php

class Track
{
  // private $track_name = 'magic';
  // protected $track_name = 'magic';
  public static $track_name = 'magic';
  public $track_artiesk;

  // public static function track_playing()
  public function track_playing()
  {
    // return 'is playing: ' . $this->track_name . '<br/>';
    // 我们可以用一个 self 关键词 ... 用它来表示这个类本身 ... 
    // $this 表示对象 ... self 就表示类本身 ... self ，
    // 后面使用一个范围解析操作符 ... 两个冒号 ... 
    // 接着是要使用的这个静态的属性的名称 ... 这里需要加上一个 $ 符号 ... 
    // 这行代码的意思就是，返回，正在播放，再加上这个类里面的 track_name 这个静态属性的值 ...
    return 'is playing: ' . self::$track_name . '<br/>';
  }
}
