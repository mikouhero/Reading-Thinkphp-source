<?php
namespace app\index\controller;

use think\App;
use think\Build;
use think\Container;

class Index
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
}
