<?php
	echo 0=='0';

	//测试一array_push的功能，居然直接把var当成一个整体压进去了，成为二维的了。。。。。不理想,用foreach +直接赋值还可以
	$stack = array(19);
	$var = array(1,2,3,4,5,6,7);
	array_push($stack, $var);
	var_dump($stack);
