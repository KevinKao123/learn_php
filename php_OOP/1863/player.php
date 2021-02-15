<?php

class Player extends Track
{
  public function the_track_name()
  {
    // echo $this->track_name;
    // 如果想要去引用父类里的属性 ... 可以使用 parent ... 后面加上两个冒号 .. 
    // 也就是范围解析操作符 .. 然后是静态的属性的名称 .. track_name ..
    // ***我们只能使用 parent 去引用父类里面的静态的属性
    echo parent::$track_name;
    echo parent::track_playing();
  }
}
