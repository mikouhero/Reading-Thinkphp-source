# Cache()

## 1、调用该类的基本流程
> 1、 think\facade\Cache 继承了 Facade() 门面类 ；  
> 2、 在 门面cache中调用 存在的方法 ，触发基类的__callStatic()  
> 3、 调用基类中的createFacade（）创建Facade实例   
> 4、 调用门面cache 的getFacadeClass() 获得类名   
> 5、 容器Container 返回 think\Cache实例    

## 2、connect(array $options = [], $name = false)  连接缓存
> 
  
