<?php
namespace app\index\controller;

use think\App;
use think\Build;
use think\Container;
use think\Controller;
use think\facade\Cache;

class Index extends Controller
{
    public function index()
    {
        return  "hello world";
    }

    public function testContainer()
    {
        $container = new Container();
        echo '<pre>';
        var_dump($container->all());
    }

    public function testBuild()
    {
        $build  = include '.././application/build.php';
//        var_dump($build);die;
        $obj = new Build(new App());
//        $obj->run($build);
        $obj ->buildRoute(false,'Index');
    }

    public function testCache()
    {

echo 0;
                Cache::set('1','ad我的',0);

        echo Cache::get(1);

//        Cache::clear();
    }
}
