# Cache()

## 1、调用该类的基本流程
> 1、 think\facade\Cache 继承了 Facade() 门面类 ；  
> 2、 在 门面cache中调用 存在的方法 ，触发基类的__callStatic()  
> 3、 调用基类中的createFacade（）创建Facade实例   
> 4、 调用门面cache 的getFacadeClass() 获得类名   
> 5、 容器Container 返回 think\Cache实例    

## 2、connect(array $options = [], $name = false)  连接缓存
> 1、 通过工厂类加载 thinkcache\driver指定类 默认file 


## 3 File() 类
 
### 3、1 __construct($option)  构造函数
> 1、合并配置信息  
> 2、缓存路径  
> 3、初始化  路径的读写权限

### 3.2 getCacheKey($name,$auto=false)
> 1、 通过name生成hash值  
> 2、判断是否有子目录  
> 3、 判断前缀  
> 4、判断是否自动创建目录  
> 5、返回缓存的文件路径  

### 3.3 get($name, $default = false) 读取缓存
> 1、读取次数加1   
> 2、通过getCacheKey()获取文件路径  
> 3、判断文件是否存在  
> 4、获取文件内容，有效期，判断是否过期  
> 5、 数据压缩  
> 6、返回返反序列化数据  

### 3.4 set($name, $value, $expire = null) 设置缓存 
>1、写入次数加1  
>2、缓存时间格式化  
>3、 通过getCacheKey()获取文件路径    
>4、序列化  压缩   
>5、写入文件信息

### 3.5 inc/dec($name, $step = 1) 自增/减缓存（针对数值缓存）
> 1、判断值是否存在   
> 2、对值进行操作  

### 3.6 rm($name) 删除缓存
> 删除文件  

### 3.7 clear($tag=null) 删除指定的标签的缓存 默认所有   
> 1、判断tag  
> 2、扫描文件夹  
> 3、删除  

## 4、Lite()类  与File 基本相同 获取时返回数组


## 5、Memcache()类
### 5、1 __construct($option)  构造函数
>1、判断是否支持memcache 扩展   
>2、合并配置信息  
>3、new Memcache（） 给 句柄对象，
>3、连接服务 
> 其他与file类似   

## 6、 Memcached() 与Memcache() 相同


## 7、Redis()
### 7、1 __construct($option)  构造函数
>1.1、redis 扩展   
>1.2、合并配置信息  
>1.3、是否那种方式连接 默认connect 所以使用pconnect代替connect，可以减少频繁建立redis连接的消耗。  
>2.1 没有redis 扩展 ，\Predis外部类
>其他方法类似  

## 8、SqlLite() 
>[SqlLite](https://www.php.net/manual/zh/book.sqlite.php "文档") 

## 9、Wincache()

## 10、Xcache()



# 11 、Driver()   缓存基础抽象类
    /**
     * 驱动句柄
     * @var object
     */
    protected $handler = null;

    /**
     * 缓存读取次数
     * @var integer
     */
    protected $readTimes = 0;

    /**
     * 缓存写入次数
     * @var integer
     */
    protected $writeTimes = 0;

    /**
     * 缓存参数
     * @var array
     */
    protected $options = [];

    /**
     * 缓存标签
     * @var string
     */
    protected $tag;

### 11.1 getExpireTime() 获取有效期
### 11.2 getCacheKey() 获取实际的缓存标识
### 11.3 pull() 读取缓存并删除
### 11.4 remember() 如果不存在则写入缓存
### 11.5 tag() 缓存标签
### 11.6 setTagItem() 更新标签
### 11.7 getTagItem() 获取标签包含的缓存标识
### 11.8 serialize() 序列化数据
### 11.9 unserialize() 反序列化数据



## 函数

- array_merge()   合并一个或多个数组
- substr(string ,start,length)  返回字符串的子串
- is_dir()
- mkdir()
- filemtime()     取得文件修改时间
- function_exists()
- gzuncompress() 数据解缩
- gzcompress() 数据压缩
- sprintf()  把百分号（%）符号替换成一个作为参数进行传递的变量
- clearstatcache()  清除文件状态缓存
- glob('*.php',path) 寻找与模式匹配的文件路径
- array_map()
- rmdir()
- unlink()
- is_file()
- unlink()
- explode()
- extension_loaded()
- class_exists()


 
 
  
