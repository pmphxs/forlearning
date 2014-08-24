<?php

	//$cwd = getcwd();
	//$root = scandir($cwd);
	//var_dump($root);
	var_dump(is_dir(".\img"));
	traverse_all_dir('D:\2014\github\forlearning');

	function traverse_all_dir($begin='.'){
		
		
		if(is_dir($begin)){
			$all  = opendir($begin);
		
			while(false !== ($file =readdir($all))){	
	
				echo $path = $begin.DIRECTORY_SEPARATOR.$file;
				echo "\n";
				if($path !== '.' && $path !== '..' && $path !== '.git'){

					traverse_all_dir($path);
				}
			}
			closedir($all);	
		}
	}

