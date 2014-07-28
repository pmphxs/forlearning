<?php
class a{

	function __construct($id){
		echo $id;
	}
}

class b extends a{
	function sqy(){
		echo 'good';
	}
}
$class = 'b';
new $class(1);
