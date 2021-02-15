<?php
// Traits 有点像是定义的一些小的类，在 Traits 里面，可以去定义一些常用的方法。
// 然后你可以把定义好的 Traits 应用在其它的类里面，这样在这个类里面，你就可以去使用在 Traits 里面定义的方法了。
trait GetData
{
  public function get_data()
  {
    return 'getting data......';
  }
}
trait SetData
{
  public function set_data()
  {
    return 'setting data......';
  }
}
class Entity
{
  use GetData, SetData;
}

$my_entity = new Entity;

print_r($my_entity->get_data());
print_r($my_entity->set_data());
