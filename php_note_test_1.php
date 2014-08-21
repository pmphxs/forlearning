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
		static function Say(){
			A::say();
			//wrong parent::echoHelloWorld();
		}
	}

	B::Say();
