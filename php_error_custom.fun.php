<?php
	function custome_error_fun($errno,$errstr,$errfile,$errline){
		echo '���������Ϣ: ����ȼ� '.$errno.' ��ϸ������Ϣ '.$errstr."\r\n";
		echo '��������λ��: �ļ��� '.$errfile.' ���� '.$errline."\r\n";
		echo 'PHP version '.PHP_VERSION.' OS '.PHP_OS."\r\n";
		//die();
	}
	
	set_error_handler('custome_error_fun',E_ALL);
	$a = array('d'=>234,5,6,7);
	echo $a[0]."\r\n";
	echo $a[1]."\r\n";
	echo $a[o];
	echo 1/0;