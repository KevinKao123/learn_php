<?php

// require 'app/kevin/demo/Greeting.php';
require 'vendor/autoload.php';

use App\kevin\demo\Greeting;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$greet = new Greeting();
// $greet = new App\kevin\demo\Greeting();

// echo $greet->hello();
print $greet->hello();

$log = new Logger('Kevin');
$log->pushHandler(new StreamHandler('app/log/demo.log', Logger::DEBUG));

$log->info('hello,logger!!');
