#  注册错误和异常处理机制

## 1、 用到的函数
>1、error_reporting();   
>2、set_error_handler(); 设置用户的函数 (error_handler) 来处理脚本中出现的错误。  
>3、set_exception_handler();设置默认的异常处理程序  
>4、register_shutdown_function();  注册一个 callback ，它会在脚本执行完成或者 exit() 后被调用。  

## 2、appException 异常处理
- 确定异常是否是Exception 的实例
- 获取异常处理对象 默认是 think\exception\Handle  在 config  -->  exception_handle 
- 记录日志
- 返回信息掉到客户端

## 2、appError 错误处理
- 符合异常处理的则将错误信息托管至 think\exception\ErrorException
- 不符合同 异常处理

## 3、异常终止处理
-  将错误信息托管至 think\ErrorException


 
