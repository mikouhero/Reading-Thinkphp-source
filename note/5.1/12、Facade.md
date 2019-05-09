# Facade 

## 1、核心方法 __callStatic($memthod,$params)
> 在其他子类继承门面类时，实际调用该方法  
>  通过call_user_func_array（） 函数调用 门面的createFacade方法

## 2、createFacade（）  创建facade 实例 
> 判断类 
> 获取当前Facade对应类名
> 通过集合返回对象的实例 
