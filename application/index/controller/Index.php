<?php

namespace app\index\controller;

use think\App;
use think\Build;
use think\Collection;
use think\Container;
use think\Controller;
use think\facade\Cache;

class Index extends Controller
{
    public function index()
    {
        return "hello world";
    }

    public function testContainer()
    {
        $container = new Container();
        echo '<pre>';
        var_dump($container->all());
    }

    public function testBuild()
    {
        $build = include '.././application/build.php';
//        var_dump($build);die;
        $obj = new Build(new App());
//        $obj->run($build);
        $obj->buildRoute(false, 'Index');
    }

    public function testCache()
    {

        echo 0;
        Cache::set('1', 'ad我的', 0);

        echo Cache::get(1);

//        Cache::clear();
    }


    public function collection()
    {
        $a = array(
            ['id' => 1, 'name' => 1],
            ['id' => 2, 'name' => 2],
            ['id' => 3, 'name' => 3]


        );
        $b = [3,4,5,6];
        $a = '12';
//        $collection = new Collection($a);
//        die;
//        $k = $collection->sort();

        $k = Collection::make($a);
        $k->toArray();
        var_dump($k);


    }
}
