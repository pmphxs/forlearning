<?php

	//static private public protected
	class A{
		
		private static function echoHelloWorld(){
			echo "hello World\n";
		}

		function Say(){
			self::echoHelloWorld();
		}
	}

	$obj = new A;
	$obj->Say();
	//error:  A::echoHelloWorld();
	class B extends A{
		
		static function Say1(){
			parent::say();
			//wrong parent::echoHelloWorld();
		}
	}

	$obj = new B;
	$obj->Say1();


