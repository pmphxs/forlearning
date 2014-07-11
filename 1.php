<?php
	//echo 0=='0';

	//测试一array_push的功能，居然直接把var当成一个整体压进去了，成为二维的了。。。。。不理想,用foreach +直接赋值还可以
	// $stack = array(19);
	// $var = array(1,2,3,4,5,6,7);
	// array_push($stack, $var);
	// var_dump($stack);

	// //php 命令行输入参数
	// print_r($argv);
	// echo '\r\n';
	// print_r($argc);


	//抽象类能继承普通类，普通类能继承抽象类
	class a{

	}

	$dd = new a;
	
	abstract class c extends a{
		abstract function dd($dd);
	}

	class b extends c{

		private $b;
		function __construct(&$a){
			$this->b = $a;
			echo 'ok';
		}
		function __destruct(){
			echo 'die';
		}
		function dd($res){
			echo $res;
		}
	}

	(new b($dd))->dd('Hello World!');


