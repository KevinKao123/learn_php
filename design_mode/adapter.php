<?php
// Adapter，中文可以翻译成转换器。
// 在我们的应用里可能需要用到第三方提供的一些库，这些库都会提供一些方法可以做不同的事情。
// 比如支付，发送邮件之类的 .. 我们不直接使用第三方库里提供的功能，
// 而是去给它们创建一些转换器，就是 Adapter ... 然后在应用里使用这些转换器 ...

// 这样做的好处就是，如果这些第三方库以后有什么变化 ... 
// 我们只需要修改一下转换器的功能就行了 .. 
// Adapter 这种东西我们平时在生活里也经常用到，比如三项电源插头转换成两项电源插头，就需要一个转换器 

// 现在假设在我的应用的需要用到支付宝的支付功能 .. 
// 在支付宝的 SDK 里可能有个类 .. 名字是 AlipayTradeService ..
class AlipayTradeService
{
  // 假设它里面有个支付用的方法 .. 名字是 wapPay .. 
  // 表示手机网站支付的方式 .. 方法需要用到支付的金额 ... $total_amount 
  public function wapPay($total_amount)
  {
    return "Alipay request:$total_amount";
  }
}

// .. 先定义一下接口 ... 名字可以是 paymentAdapter ... 里面有个方法叫 pay ... 支付一个支付金额参数 ..
interface PaymentAdapter
{
  public function pay($amount);
}
// 然后我们再单独为支付宝这种支付方式去创建一个转换器 .. 
// 名字是 AlipayAdapter .. 它要 implements 一下 paymentAdapter ..
class AlipayAdapetr implements PaymentAdapter
{
  // 先在里面添加一个私有的 $alipay .. 表示支付宝这种支付方式 ..
  private $alipay;

  // 添加一个构造函数 .. 然后把支付宝的支付对象交给它 ... 
  // AlipayTradeService $alipay .. $this->alipay 等于 alipay
  // 让这个转换器里的 $alipay 等于实例化以后的这个 AlipayTradeService 对象 ..
  public function __construct(AlipayTradeService $alipay)
  {
    $this->alipay = $alipay;
  }

  // 再添加一个pay方法 $amount 表示要支付的金额 .在里面用一下 $this->alipay->wapPay
  // 实施了 PaymentAdapter 接口的类都得包含这个方法 .. 这样我们可以在应用里放心的使用这个 pay 方法去支付 ..
  // 这个 pay 方法就是这个转换器提供的一个功能 .. 支付的时候可以使用这个转换器里的 pay 方法 .. 
  // 在这个 Alipay 转换器里面，这个 pay 方法做的事就是使用 AlipayTradeService 里的 wapPay 去完成支付 ..
  public function pay($amount)
  {
    return $this->alipay->wapPay($amount);
  }
}

// $payment = new AlipayTradeService();
// echo $payment->wapPay(666);

// 再创建一个 $payment .. 创建一个 AlipayAdapter 对象 .. 
// 这是我们为支付宝创建的转换器 .. 这里我们要把一个 AlipayTradeService 交给它 ..
$payment = new AlipayAdapetr(new AlipayTradeService());
// 这样我们就可以用一下 $payment 里的 pay 这个方法来支付 .. 
// 指定一个要支付的金额 .. 再输出这个结果 ..
print $payment->pay(688);
