# 应用启动文件 App
## 1、静态属性
     * @var bool 是否初始化过
    protected static $init = false;

     * @var string 当前模块路径
    public static $modulePath;

     * @var bool 应用调试模式
    public static $debug = true;

     * @var string 应用类库命名空间
    public static $namespace = 'app';

     * @var bool 应用类库后缀
    public static $suffix = false;

     * @var bool 应用路由检测
    protected static $routeCheck;

     * @var bool 严格路由检测
    protected static $routeMust;
    
     * @var array 请求调度分发
    protected static $dispatch;
    
     * @var array 额外加载文件
    protected static $file = [];
 
 
## 2、 init($model='')初始化应用   
>  1、指定model时 加载加载指定的$model.init.php 配置文件  / 缓存中同样也加载   
>  2、默认加载app\config.php 配置文件  
>  3、加载database.php  
>  4、加载app\extra\下的所有文件 作为配置文件  
>  5、加载行为扩展文件 app\tags.php  

  
## 3、initCommon  初始化应用，并返回配置信息
> 1、获取init() 方法的公共参数  
> 2、调试模式的参数  
> 3、加载扩展文件函数 extra_file_list  
> 4、加载公共文件 和语言包  
> 5、设置时区  监听 app_init  
> 6、返回配置信息    

## 4、dispatch（$dispatch,$type='module'） 设置当前请求的调度信息
> 1、给静态变量 dispatch 赋值 ['type'=>$type,$type=$dispatch]
 
## 5、invokeFunction($callback,$var=[])执行函数或者闭包方法 支持参数调用
> 1、通过内置类ReflectionFunction处理回调 拿到对象  
> 2、绑定参数   
> 3、记录日志  
> 4、通过内置类的invokeArgs() 处理 并返回结果

## 6、invokeMethod($methond,$var=[]) _调用反射执行类的方法 支持参数绑定
> 1、调用ReflectionFunction内置类的invokeArgs方法  使用数组给方法传送参数，并执行他->执行控制器的action。 返回结果
## 7、invokeClass($class,$var=[]) _调用反射执行类的方法 支持参数绑定

## 8、bindParams($reflect,$var=[])  绑定参数
> 1、自动获取请求变量  
> 2、URL参数方式解析  
> 3、当回调函数定义的参数数目>0 ,通过getParamValue获取参数并返回  

## 9、 getParamValue($param, &$vars, $type) 获取参数值

## 10、exec($dispatch,$config) 执行调用分发 
> 1、通过$dispatch['type']的值进行不同 的操作

## 11、module($result, $config, $convert = null) 执行模块
>1、$resutl 数组 包含模块/控制器/操作  
>2、判断模块  
>3、当前模块路径  
>4、获取操作名   
>5、设置当前请求的控制器、操作  
>6、Load 加载 操作的对象  
>7、 返回invokeMethod()执行的结果

## 12、routeCheck($request,$config) 路由检测 
>1、获取path 路径  
>2、路由检测  
>3、加载路由缓存文件（有缓存的情况下）  
>4、加载路由配置文件  
>5、判断路由的类型  
>6、路由无效 解析模块/控制器/操作/参数... 支持控制器自动搜索  

## 13、run()       执行应用程序
>1、获取配置信息  
>2、Request过滤 全局过滤方法  
>3、监听 app_dispatch  
>4、获取应用调度信息  
>5、未设置调度信息则进行 URL 路由检测  
>6、记录信息，拿到exec()执行的结果  
>7、清空类的实例化   
>8、返回response对象 

