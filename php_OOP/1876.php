<?php
// 很多支持面向对象的语言里面都支持接口这个概念，英文是 interface ... 
// 在面向对象这个情境下面，接口有点像是一个合同。也就是，我们可以定义接口，在这个接口里，可以定义一些空白的方法。

// 然后在其它的类里面，可以去实施这个接口，在实施的时候必须要在类里面，包含所有在接口上定义的方法，
// 这有点像是跟这个接口签订了合同，实施它的类，必须都要遵守这个合同。
// 下面，我们去定义两个接口 ... 然后让一个类去实施它们。

interface DataInterface
{
  public function get_data();
}

interface EntityInterface
{
  public function get_entity_type();
}
// 实施
class Entity implements DataInterface, EntityInterface
{
  public function get_data()
  {
    return 'data...1...';
  }
  public function get_entity_type()
  {
    return 'type...2...';
  }
}

$entity = new Entity;
// 然后去判断一下 entity 属不属于 Entity 这个类 .. 
// 也就是 entity 是否是 Entity 这个类的一个实例 ... 
// 我们可以把结果输出使用 var_dump 输出到屏幕上.. 
// 同样，我们可以再去判断一下 entity 这个对象，是不是 EntityInterface 还有 DataInterface 的实例 ...
var_dump(
  $entity instanceof Entity,
  $entity instanceof EntityInterface,
  $entity instanceof DataInterface,
);
