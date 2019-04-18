# 入口文件

## 1、index.php

- 定义开发目录常量 APP_PATH
-  加载框架的引导文件

## 2、start.php

### 2.1、加载基础文件base.php
> 定义常量
>>
  
> 加载环境变量配置文件
>>  parse_ini_file() 解析一个配置文件 成功返回array   失败  false  
>> putenv()     //设置环境变量的值 string 
>> getenv()


### 2.2  注册自动加载

### 2.3 注册错误和异常处理机制

### 2.4 加载惯例配置文件


