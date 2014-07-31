<?php
	function custome_error_fun($errno,$errstr,$errfile,$errline){
		echo '程序错误信息: 错误等级 '.$errno.' 详细错误信息 '.$errstr."\r\n";
		echo '程序所在位置: 文件名 '.$errfile.' 行数 '.$errline."\r\n";
		echo 'PHP version '.PHP_VERSION.' OS '.PHP_OS."\r\n";
		//die();
	}
	
	set_error_handler('custome_error_fun',E_ALL);
	$a = array('d'=>234,5,6,7);
	echo $a[0]."\r\n";
	echo $a[1]."\r\n";
	echo $a[o];
	echo 1/0;