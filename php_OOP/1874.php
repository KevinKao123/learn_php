<?php

// abstract classes ，就是抽象类。抽象类不能被实例化，只能作为其它类的一个父类。
// 也就是说，你可以创建类，然后让它去继承定义为抽象类的类。

// 在设计类的时候，你会发现，有些类不需要去被实例化，而是去实例化继承它的那个类。
// 这个时候，你可以把这种类型的类， 去定义成一个抽象类。

// 在抽象类里，可以去提供基本的属性和方法，然后继承它的类就会拥有这些属性和方法了。
// 除了不能被实例化以外，抽象类跟普通的类没有什么区别

// 定义抽象类
abstract class Entity1874
{
  protected $entity_type;
  // 返回 entity_type 实体类型这个属性的值
  public function get_entity_type()
  {
    return $this->entity_type;
  }
}

class User extends Entity1874
{
  protected $entity_type = 'user';
}

class Post extends Entity1874
{
  protected $entity_type = 'post';
}

$user = new User;
$post = new Post;

echo $user->get_entity_type() . '01<br/>';
echo $post->get_entity_type() . '02<br/>';

// $entity = new Entity;
