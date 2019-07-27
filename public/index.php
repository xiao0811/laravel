<?php

use Illuminate\Database\Capsule\Manager;

// autoload
require __DIR__ . "/../vendor/autoload.php";

// 实例化容器
$app = new Illuminate\Container\Container();
with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();

// 启动 Eloquent ORM 模块并进行相关配置
$manager = new Manager();
$manager->addConnection(require "../config/database.php");
$manager->bootEloquent();

// 加载路由
require __DIR__ . "/../routes/web.php";

// 实例化请求并分发处理请求
$request = Illuminate\Http\Request::createFromGlobals();
$response = $app["router"]->dispatch($request);

// 返回请求响应
$response->send();
