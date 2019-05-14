<?php

namespace app\index\controller;

use think\App;
use think\Build;
use think\Collection;
use think\Container;
use think\Controller;
use think\facade\Cache;
use think\facade\Config;
use think\facade\Cookie;
use think\facade\Debug;
use think\facade\Env;
use think\File;

class Index extends Controller
{
//    protected $beforeActionList = [
//        'first',
//        'second' =>  ['except'=>'hello'],
//        'three'  =>  ['only'=>'hello,data'],
//    ];

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


    public function config()
    {
        echo '<hr>';echo '<br>';echo '<pre>';
////        Config::__make(new App());
//
//        $a  = Config::pull('cache');
//        $a = Config::load('app.php','app');

                $a  = Config::get('app');

        var_dump($a);
    }

    public function controller()
    {

    }


    public function cookie()
    {
//        Cookie::set('1',1);
        $data = Cookie::get(1);
        var_dump($data);

    }

    public function debug()
    {
        echo'<hr>';
     $k =    Debug::remark(1);
     var_dump($k);
    }

    public function env()
    {
        echo '<hr>';
         Env::set('1',1);

        var_dump(Env::get(1));
    }

    public function file()
    {
        $file = new File('C:\phpStudy\WWW\t1.php');
        var_dump($file);
    }


    public function hook()
    {

    }
}
