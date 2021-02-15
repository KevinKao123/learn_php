<?php

// abstract 这个关键词我们也可以把它用在类里的方法上 .. 
// 如果一个类里面使用 abstract 这个关键词定义了抽象的方法，那么这个类也应该被定义成一个抽象的类。
// 抽象方法里不能包含主体内容，也就是用 abstract 标记的方法，应该是一个空白的方法
// 继承抽象类的类里面，必须要定义抽象方法的方法。

// 定义抽象类
abstract class Entity
{
  protected $entity_type;
  // 返回 entity_type 实体类型这个属性的值
  public function get_entity_type()
  {
    return $this->entity_type;
  }
  abstract public function save();
}

class User extends Entity
{
  protected $entity_type = 'user';
  // 注意，这个 save 方法的访问控制不能比 Entity 里面的 save 抽象方法更保守。

  // 也就是，如果在 Entity 里面，定义 save 方法的时候用了 protected ... 
  // 那么，在这个 User 类里面，save 方法可以使用 protected ，
  // 也可以是 public ，但是不能是 private ...
  public function save()
  {
    return $this->entity_type . ':...saved successfully<br/>';
  }
}

class Post extends Entity
{
  protected $entity_type = 'post';
  public function save()
  {
    return $this->entity_type . ':...saved successfully 02<br/>';
  }
}

$user = new User;
$post = new Post;

echo $user->save();
echo $post->save();

// echo $user->get_entity_type() . '01<br/>';
// echo $post->get_entity_type() . '02<br/>';

// // 不能实例化 Entity 这个抽象类 
// $entity = new Entity;
