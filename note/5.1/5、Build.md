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




