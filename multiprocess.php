<?php
	
	//$pid = ;
	//
	//
	//static $a = 0;
	echo getmypid()."\n";
	//echo get_current_user();
	// echo "\n";
	$pid = pcntl_fork();
	echo $pid. "\n";

	if($pid==-1){
		echo '0 failed'."\n";
	}else if($pid){
		//echo (++$a);
		echo "pid:".posix_getpid()."\n";
	}else{
		//echo (++$a);
		echo "p:".posix_getppid()." pid: ".posix_getpid()."\n";
	}


	$pid1 = pcntl_fork();
	echo $pid1. "\n";

	if($pid1==-1){
		echo '1 failed'."\n";
	}else if($pid1){
			echo "pid1:".posix_getpid()."\n";
	}else{
		echo "p1:".posix_getppid()." pid1: ".posix_getpid()."\n";
	}

	// $pid2 = pcntl_fork();
	// echo $pid2. "\n";

	// if($pid2==-1){
	// 	echo '2 fork_child_process failed\n';
	// }else if($pid2){
	// 	echo "2 parent process\n";
	// }else{
	// 	echo "2 first Child Process";
	// }
	// $pid3 = pcntl_fork();
	// echo $pid. "\n";

	// if($pid3==-1){
	// 	echo '3 fork_child_process failed\n';
	// }else if($pid3){
	// 	echo "3 parent process\n";
	// }else{
	// 	echo "3 third Child Process";
	// }

