# Cache()

## 1、调用该类的基本流程
> 1、 think\facade\Cache 继承了 Facade() 门面类 ；  
> 2、 在 门面cache中调用 存在的方法 ，触发基类的__callStatic()  
> 3、 调用基类中的createFacade（）创建Facade实例   
> 4、 调用门面cache 的getFacadeClass() 获得类名   
> 5、 容器Container 返回 think\Cache实例    

## 2、connect(array $options = [], $name = false)  连接缓存
> 1、 通过工厂类加载 thinkcache\driver指定类 默认file 


## 3 File 类
 
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


 
 
  
