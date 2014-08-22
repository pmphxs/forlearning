<?php

	//static private public protected
	class A{
		
		private static function echoHelloWorld(){
			echo "hello World\n";
		}

		static function Say(){
			self::echoHelloWorld();
		}
	}

	$obj = new A;
	$obj->Say();
	//error:  A::echoHelloWorld();
	class B extends A{

		 function Say1(){
			parent::say();
			//wrong parent::echoHelloWorld();
		}
	}

	$obj = new B;
	$obj->Say1();


