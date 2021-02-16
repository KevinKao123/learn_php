<?php
// 使用工厂模式的好处就是 ... 如果说我们修改，重命名，或者替换了 MountainBike 这个类 ... 
// 现在我们只需要修改工厂里这一个地方就行了 ..
// 还有个好处就是，如果实例化类的时候需要做很复杂的事儿，我们都可以把这些事儿放到工厂里去做 ... 
// 不然你在实例化的时候，可能需要重复去做这些复杂的事儿 ..
class MountainBike
{
  public function hello()
  {
    return 'hello ~ mountain bike';
  }
}
class RoadBike
{
  public function hello()
  {
    return 'hello ~ Road bike';
  }
}

// 如果使用工厂模式的话 ... 我们可以再去创建一个类 .. 比如名字是 BikeFactory ... 
// 在它里面添加一个静态的方法 ... 这个方法的任务就是去创建需要的对象 .. 
// 方法的名字可以是 create .. 或者 build .. 自己可以随便怎么去命名它 ..
class BikeFactory
{
  public static function build($type)
  {
    $bike = $type . 'Bike';
    if (class_exists($bike)) {
      return new $bike();
    } else {
      throw new Exception('invalid bike type.');
    }

    // return new MountainBike();
  }
}

// $bike = new MountainBike();
// print $bike->hello();

// 我们需要一个 $bike 对象 .. 可以用一下 BikeFactory 的 build 这个静态方法给我们去创建
// $bike = BikeFactory::build('Mountain');
$bike = BikeFactory::build('Road');
print $bike->hello();
