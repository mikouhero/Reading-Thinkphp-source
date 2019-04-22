# 应用启动文件 App
## 1、静态属性
    /**
     * 当前模块路径
     * @var string
     */
    protected $modulePath;

    /**
     * 应用调试模式
     * @var bool
     */
    protected $appDebug = true;

    /**
     * 应用开始时间
     * @var float
     */
    protected $beginTime;

    /**
     * 应用内存初始占用
     * @var integer
     */
    protected $beginMem;

    /**
     * 应用类库命名空间
     * @var string
     */
    protected $namespace = 'app';

    /**
     * 应用类库后缀
     * @var bool
     */
    protected $suffix = false;

    /**
     * 严格路由检测
     * @var bool
     */
    protected $routeMust;

    /**
     * 应用类库目录
     * @var string
     */
    protected $appPath;

    /**
     * 框架目录
     * @var string
     */
    protected $thinkPath;

    /**
     * 应用根目录
     * @var string
     */
    protected $rootPath;

    /**
     * 运行时目录
     * @var string
     */
    protected $runtimePath;

    /**
     * 配置目录
     * @var string
     */
    protected $configPath;

    /**
     * 路由目录
     * @var string
     */
    protected $routePath;

    /**
     * 配置后缀
     * @var string
     */
    protected $configExt;

    /**
     * 应用调度实例
     * @var Dispatch
     */
    protected $dispatch;

    /**
     * 绑定模块（控制器）
     * @var string
     */
    protected $bindModule;

    /**
     * 初始化
     * @var bool
     */
    protected $initialized = false;
    
# 2、方法
## 2.1 bind($bind)        绑定模块或者控制器
## 2.2 path($path)        设置应用类库目录 
## 2.3 initialize()     初始化应用
> 1、通过initialized属性判断是否初始化  
> 2、初始化目录  
> 3、加载惯例配置文件  
> 4、 设置路径环境变量  
> 5、加载环境变量配置文件  
> 6、初始化应用  
> 7、注册异常处理类  
> 8、注册根命名空间   
> 9、加载composer autofile文件  
> 10、注册类库别名  
> 11、数据库配置初始化  
> 12、/路由初始化  
> 13、加载composer autofile文件  
> 14、加载composer autofile文件  

## 2.4 init($module='')  初始化应用或模块 
> 1、定位模块目录  
> 2、判断init.php 文件  
> 3、 加载行为扩展文件 、加载公共文件、 加载系统助手函数 、中间件、注册服务的容器对象实例、自动读取配置文件  
> 4、设置模块路径  

## 2.5 containerConfigUpdate($model)  对容器中的对象实例进行配置更新
## 2.6 getRouteCacheKey() 获取缓存的路由key 
## 2.7 loadLangPack() 加载语言包 默认 app中的 default_lang 
## 2.8 checkRequestCache() 设置当前地址的请求缓存   
## 2.9 setResponseCache()   
## 2.10 dispatch()  设置当前请求的调度信息
## 2.11 routeInit() 路由初始化 导入路由定义规则
>1、加载route 下的文件

## 2.12 routeCheck() URL路由检测（根据PATH_INFO)
>1、获取path 路径  
>2、路由检测  
>3、加载路由配置文件  
>4、判断路由的类型  
>5、加载路由缓存文件（有缓存的情况下）  
>6、返回请求调度信息

## 2、13 parseModuleAndClass($name,$layer，$appendSuffix) 解析模块和类名
> $name 资源地址  
> $layer 验证层名称  
> $appendSuffix 是否添加类名后缀

## 2、14 create($name, $layer, $appendSuffix = false, $common = 'common')         实例化应用类库
 
     * @param  string $name         类名称
     * @param  string $layer        业务层名称
     * @param  bool   $appendSuffix 是否添加类名后缀
     * @param  string $common       公共模块名 
     
## 2.15 model( $name = '', $layer = 'model', $appendSuffix = false, $common = 'common' )   实例化（分层）模型
    * @access public
     * @param  string $name         Model名称
     * @param  string $layer        业务层名称
     * @param  bool   $appendSuffix 是否添加类名后缀
     * @param  string $common       公共模块名
     
## 2.16 controller( $name = '', $layer = 'controller', $appendSuffix = false, $common = 'common' )  实例化（分层）控制器
    * @access public
     * @param  string $name         Model名称
     * @param  string $layer        业务层名称
     * @param  bool   $appendSuffix 是否添加类名后缀
     * @param  string $common       公共模块名
     
## 2.17  validate( $name = '', $layer = 'validate', $appendSuffix = false, $common = 'common' )   实例化验证类
    * @access public
     * @param  string $name         Model名称
     * @param  string $layer        业务层名称
     * @param  bool   $appendSuffix 是否添加类名后缀
     
## 2.18  action($url, $vars = [], $layer = 'controller', $appendSuffix = false )   远程调用模块的操作方法 
     * @access public
     * @param  string       $url          调用地址
     * @param  string|array $vars         调用参数 支持字符串和数组
     * @param  string       $layer        要调用的控制层名称
     * @param  bool         $appendSuffix 是否添加类名后缀
     
## 2.20 parseClass($module, $layer, $name, $appendSuffix = false)解析应用类的类名
     * @access public
     * @param  string $module 模块名
     * @param  string $layer  层名 controller model ...
     * @param  string $name   类名
     * @param  bool   $appendSuffix
     
## 2.21 run() 执行应用程序
>1、初始化应用 $this->initialize  
>2、 监听app_init  
>3、 判断模块  
>4、获取应用调度实例  
>5、路由检测  
>6、请求信息加入中间件  
>7、获取中间件返回的结果   并返回


