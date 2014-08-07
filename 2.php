<?php

	// $class = 'clasaneme';
	// echo ucfirst($class);
	// echo $class;
// $id = '0000752121010002201408011342440827884243';
// echo substr(md5($id),8,16);
// echo "\n".$id."\n";
// echo substr($id,-3);

// var_dump( 1===2);

// class a{

// 	static public function echoHello(){
// 		echo 'Hello';
// 	}
// 	public static function echoWorld(){
// 		echo 'World';
// 	}

// }

// class b extends a{

// }

// a::echoHello();
// a::echoWorld();
// echo"\n";
// b::echoHello();
// b::echoWorld();


// class a{

// 	static protected function echoHello(){
// 		echo 'Hello';
// 	}
// 	protected static function echoWorld(){
// 		echo 'World';
// 	}

// }

// class b extends a{

// 	static function echoH(){
// 		self::echoHello();
// 	}
// }

// a::echoHello();
// a::echoWorld();
// echo"\n";
// b::echoH();
// b::echoW();


// class a{

	
// 	private $bddd=1;
// 	public static $ddddd=2;
// 	//abstract 
// 	private function echoHello(){
// 		echo 'Hello';
// 	}
// 	public  function echoWorld(){
// 		echo 'World';
// 	}

// }

// class b extends a{

// 	public $dd;
// 	function __construct(){
// 		//echo $this->$bddd;
// 	}
// }

// var_dump($ad = new b);

$str =array
(
    'result' => '1',
    'order' => '879_1908_1_30601640_1403680843369',
    'mid' => '30601640',
    'time' => '20140625152201',
    'money' => '0.01',
    'ext' => '0000003170000100201406251520410342810558',
    'signature' => '805a7bfedf9dd315981a435d2e932fe1',
);
echo http_build_query($str);