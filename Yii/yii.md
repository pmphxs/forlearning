#Yii 笔记
##url

1. urlmanage 配置

2. 重定向函数
```php
Yii::redirect($url) //url 重定向 302   
```

#视图views
##函数
1. render函数
```php
$theTime=date("D M j G:i:s T Y");
$this->render('helloWorld',array('time'=>$theTime));
```

 render()方法第二个参数是一个array(数组类型)，render()方法会提取**数组中的值**提供给**视图脚本**，数组中的**key**(键值)将是提供给**视图脚本的变量名**。

 在这个例子中，数组的**key(键值)是time**，value(值)是$theTime则提取出的 **变量名$time** 供视图脚本使用的。这是将控制器的数据传递给视图的一种方法。

 >业务逻辑 数据 视图分离

#Controller
##过滤 函数
1. filters()  返回过滤器配置相关数组


#Model

##数据库相关的类函数

**CDbCriteria** 类，用于查询时的条件，可以用于condtions,order by,limit/offset

**CActiveRecord** 用户数据库**CRUD**操作的类

##过滤器

  参考资料 http://blog.csdn.net/mengxiangbaidu/article/details/6995453

1. 是什么
 * 过滤器是可被配置在 **控制器动作** 执行**之前** 或 **之后** 执行的一段代码。

1. 作用
 
 * **一个动作可以有多个过滤器**。过滤器**执行顺序**为它们出现在**过滤器列表中的顺序**。过滤器可以**阻止动作及后面其他过滤器的执行**
 
 * 用于对访问者和数据的 **过滤** 和 对访问操作的 **记录**

2. 声明过滤器的方式种类
 * 过滤器配置数组
 ```php  
CController::filters() //方法。此方法应返回一个过滤器配置数组。
//覆盖Controller子类filters方法
    class PostController extends CController
    {
        ......
        function filters(){
            return array(
                'Log',
                array('application.filters.indexFilter',
                    'unit'=>'filter'
                )
            );
         }
    }
```
 * 过滤器可以定义为一个控制器类的方法。
 ```php
 	class PostController extends CController{
        function filters(){
            return array(
                'Log',
                array('application.filters.indexFilter',
                    'unit'=>'filter'
                )
            );
         }

        function actionIndex(){
            echo 'hello Word!<br/>';
            //$this->renderPatial('index');
        }

        function filterLog($filterChain){
            echo '<---filterLog---><br/>';
            //Yii::log('','trace','API_RAW_REQUEST');
            //var_dump(Yii::app()->getRequest()->getPathInfo());
            //echo 'IP:'.Yii::app()->getRequest()->userHostAddress.'<br/>';
            //echo 'requeset_url:'.Yii::app()->getRequest()->getUrl().'<br/>';
            $filterChain->run();
        }
	}
 ```
 * 过滤器也可以是一个 CFilter 或其子类的实例
```php
	class indexFilter extends CFilter{
		public $unit;
        
		protected function preFilter($filterChain){
			echo $this->unit.'<---indexFilter preFilter Fun---><br/>';
			return false;
		}
        
		protected function postFilter($filterChain){
			echo $this->unit.'<---indexFilter postFilter Fun---><br/>';
		}
	}
```

3. 根据资料自己写的程序做个辅导的验证
http://note.youdao.com/share/?id=f4caae4a8ff6cae43e7182efab162da1&type=note


##全局可使用的

1. 调用 `moudule/PostModule.php`文件里面的里面的**post_comments()**函数
```php 
    Yii::app()->getmodule('modulename')->post_comments()
```

2.