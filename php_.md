#php
****
1. 读取httpbody体重的内容

		file_get_contents("php://input");
2. php中的错误级别

 * **deprecated**  使用php __不推荐的__、__过时的__函数或语法
 * **notice**  一般是语法存在不当的地方。例如，**使用未定义的变量**，**数组索引**是字符时没加引号等
 * **warning**  错误级别比较高的错误，**语法**出现**很不恰当**的地方。例如，**函数参数不匹配**等。
 * ** fatal error **  致命错误，引起php程序直接结束，**必须修正**，前几种可以不修正。
 * **prase error** 语法解析错误 最高级别错误。上面几种是php运行时的错误，这个是**编译器语法检查级别**的错误。

3. 显示错误提示的配置
 * **php.ini** 的配置  
     
     >error_reporting = **E_ALL** | **E_STRICT**
 
     >display_errors = On;
 
 * **php程序** 中利用函数设置

	>error_reporting();
4. 抑制错误显示

   > **@**mysql_connect();  
   
   上面的语句即使连接数据库出现问题也不会出先错误提示

5. 自定义错误处理,绕过php的错误处理函数

		set_error_handler(error_function,error_type);
**error_function**这个函数必须有四个参数：

参数|含义
---|--------
errno|常量，**错误等级**，E_WARNING  === 4。
errstr|**错误的信息**
errfile|发生错误的**文件**
errline|发生错误的文件程序所在**行数**


```php
	//自定义错误处理函数
	function custome_error_fun($errno,$errstr,$errfile,$errline){
		echo '程序错误信息: 错误等级 '.$errno.' 详细错误信息 '.$errstr."\r\n";
		echo '程序所在位置: 文件名 '.$errfile.' 行数 '.$errline."\r\n";
		echo 'PHP version '.PHP_VERSION.' OS '.PHP_OS."\r\n";
		die();
	}
	//利用回调函数，实现自定义处理错误
	set_error_handler('custome_error_fun',E_ALL);
	//
    $a = array('d'=>234,5,6,7);
	echo $a[0]."\r\n";
	echo $a[1]."\r\n";
	echo $a[o]; //错误的数组索引引发错误函数

```

运行程序结果结果：

![](./img/2.jpg)
