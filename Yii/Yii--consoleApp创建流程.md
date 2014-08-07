##Console application

1.创建命令行应用,程序放到文件中

	consoleApp.php

```php
<?php
    defined("YII_DEBUG") or define("YII_DEBUG",true);
  	//包含yii.php   
    require_once('framework/yii.php');
    //加载console 应用程序配置
    $config = 'framework/protected/config/console.php';
    //创建console 应用程序
    Yii::createConsoleApplication($config)->run();
```

2.命令行下执行程序

	php consoleApp.php CommandName CommandAction --key=value


