# Build  创建应用目录
`在应用目录创建build.php 通过php think build 创建新的模块`
## 1、_construct(App $app) 传入的必须是APP 的应用实例

## 2、buildDir($lsit)  创建目录

## 3、buildFile($list) 创建文件
## 4、module($module = '', $list = [], $namespace = 'app', $suffix = false)
> 1、判断模块目录是否存在  
> 2、 创建配置文件和公共文件  
> 3、创建模块的默认页面    
> 4、创建默认的模块目录和文件  

## 5、buildCommon($module)  创建模块的公共文件
> 1、获取config 文件夹的目录 在其中创建$model 文件夹，默认创建app.php配置文件  
> 2、在$model文件夹下创建common.php

## 6、buildHello($module, $namespace, $suffix = false) 创建模块的欢迎页面   
> 默认创建index下的欢迎页面

## 7、run(array $build = [], $namespace = 'app', $suffix = false)  据传入的build资料创建目录和文件 

>1、锁定文件，判断文件的可读性  
> 2、遍历传入的build数组  
> 3、通过键值 创建不同的文件、目录、模块
> 4、解锁

## 8、buildRoute($suffix = false, $layer = '') 根据注释自动生成路由规则  $suffix 类库后缀  $layer  控制器层目录名


## 9 函数 
- is_writable()   判断给定的文件名是否可写
- touch() 尝试将由 filename 给出的文件的访问和修改时间设定为给出的 time。 注意访问时间总是会被修改的，不论有几个参数。如果文件不存在，则会被创建。
- unlink() 删除文件
- glob ( string $pattern [, int $flags = 0 ] ) 寻找与模式匹配的文件路径
- mkdir() 
- dirname()
- basename()  
- pathinfo()
- is_dir()
- is_file()
- trim()
- ucfirst()
- strpos()
- str_replace()
-  strlen()
- strstr()
- substr()
- preg_replace()
- explode()
- implode()
- array_map()
- count()
- array_search()
- array_slice()
- preg_replace_callback  执行一个正则表达式搜索并且使用一个回调进行替换
- preg_replace()
 




