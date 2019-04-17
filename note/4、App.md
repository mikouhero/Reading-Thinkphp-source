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
 