<?php
	//引用问题
	//= 看来是和 C++ 差不多是一种浅拷贝只是拷贝了指针。还未验证
	class a{
		private $dd = 1;
		function __construct(){
				echo "1\n";
		}
		function xx(){

		}
	}
	$a = new a;
	$b = $a;
	var_dump($b);

	//var_dump($a->id);
	//$user = null;
	//isset()只判断此变量是否先前已经声明过
	//$user = 0;
	//$user = '';
	//$user = false;
	//上面几种 只要是和‘’==$user <===>empty($user);
	//$user = 'dfaf';
	// if(!isset($user)){
	// 	echo 'not isset';
	// }
	// if(empty($user)){
	// 	echo 'empty';
	// }

	// 继承方法问题
	//me理解为对this指针的理解，那个对象调用就是那个对象的指针
	// abstract class p{

	// 	public function __construct(){
	// 		echo 'gen p'."\n";
	// 	}
	// 	function __destruct(){
	// 		echo 'die p'."\n";
	// 	
	// 	//abstract protected function a1();
	// 	function a1(){}
	// 	public function pp(){
	// 		$this->a1();
	// 	}
	// }
	
	// class cc extends p{
	// 	function __construct(){
	// 		echo  'gen cc'."\n";

	// 	}

	// 	function __destruct(){
	// 		echo 'die cc'."\n";
	// 	}
	// 	function a1(){
	// 		echo 'child'."\n";
	// 	}
	// }

	// $a = new cc;

	// $a->pp();
	//大小写转换
	// $a = 'dafafdfdfafad0';
	// //$a[0]='A';
	// $a[0] = strtoupper($a[0]);
	// echo($a);

	//动态加载类
	// $obj = 'aaaa';
	// class aaaa{
	// 	function __construct($a){
	// 		echo 'sb';		
	// 		echo $a;
	// 	}
	// }

	// $dx = new $obj(12);
	
	//时间函数的测试
	// echo date('Ymd');
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
	//抽象类中可以有静态成员、静态方法
	//
	// class a{

	// }

	// $dd = new a;
	
	// abstract class c extends a{
	// 	protected static $static;
	// 	public static function static_fucntion(){

	// 		echo ' static function '."\n";
	// 	}
	// 	abstract function dd($dd);
	// }

	// class b extends c{

	// 	private $b;
	// 	function __construct(&$a){
	// 		$this->b = $a;
	// 		echo ' ok ';
	// 	}
	// 	function __destruct(){
	// 		echo ' die ';
	// 	}
	// 	function dd($res){
	// 		echo $res;
	// 		c::static_fucntion();
	// 		c::$static = 1;
	// 		echo c::$static;
	// 	}
	// }

	// $a = new b($dd);
	// $a->dd('Hello World!');
	// c::static_fucntion();


