#Yii 笔记
##url

1. urlmanage 配置

2. 重定向函数
```php
Yii::redirect($url) //url 重定向 302   
```

##视图views
1. render函数
```php
$theTime=date("D M j G:i:s T Y");
$this->render('helloWorld',array('time'=>$theTime));
```

 render()方法第二个参数是一个array(数组类型)，render()方法会提取**数组中的值**提供给**视图脚本**，数组中的**key**(键值)将是提供给**视图脚本的变量名**。

 在这个例子中，数组的**key(键值)是time**，value(值)是$theTime则提取出的 **变量名$time** 供视图脚本使用的。这是将控制器的数据传递给视图的一种方法。

 >业务逻辑 数据 视图分离

2. ddd