<?php

	//$cwd = getcwd();
	//$root = scandir($cwd);
	//var_dump($root);
	var_dump(is_dir(".\img"));
	traverse_all_dir_convert2_url('.');

	function traverse_all_dir_convert2_url($begin,$url='.'){
		$all  = opendir($begin);

		while(false !== ($file =readdir($all))){
			echo $path = $url.DIRECTORY_SEPARATOR.$file."\n";
			
			//echo is_dir($path)?"1\n":"0\n";
			
			if($path !== '.' && $path !== '..' && is_dir($path)){
				traverse_all_dir_convert2_url($path);
			}
		}

		closedir($all);	
	}

