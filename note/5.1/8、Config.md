# Config
- facade设计模式与容器  与Cache的流程类似

## 2、 属性 
    /**
     * 配置参数
     * @var array
     */
    protected $config = [];

    /**
     * 配置前缀
     * @var string
     */
    protected $prefix = 'app';

    /**
     * 配置文件目录
     * @var string
     */
    protected $path;

    /**
     * 配置文件后缀
     * @var string
     */
    protected $ext;

    /**
     * 是否支持Yaconf
     * @var bool
     */
    protected $yaconf;
    
## 3、方法 

### 3.1 parse($config, $type = '', $name = '')解析配置文件或内容
>$config 配置文件路径或内容  
 $type 配置解析类型  
 $name 配置名（如设置即表示二级配置）
 
### 3.2 load($file, $name = '') 加载配置文件（多种格式）
 > 1、判断文件路径  默认 config文件夹  
 > 2、判断文件是否存在 加载文件 或者 yaconf判断   
 > 3、返回信息  
 
### 3.3 yaconf()  获取yaconf 配置

### 3.4 pull（$name）  获取一级配置
### 3.5 get($name = null, $default = null)  
### 3.6 set($name, $value = null) 
### 3.7 remove($name)

 
 
 