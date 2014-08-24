<?php
	//$cwd = getcwd();
	//$root = scandir($cwd);
	//var_dump($root);
	var_dump(is_dir(".\img"));
	$res = traverse_all_dir('D:\2014\github\forlearning');
	//echo file_exists('.\img');
    //var_dump(is_file(''));
	// traverse_all_dir('.');
	//$count =0;
	function traverse_all_dir($begin='.'){
		
		global $count;
		
		if($all  = opendir($begin)){
			
			$res = array();
			// $all  = opendir($begin);
			
			while(false !== ($file =readdir($all))){		
				
				$path = $begin.DIRECTORY_SEPARATOR.$file;
				// echo $path."\n";
				// if(is_file($path) && $path){
				// 	//echo $path;
				// 	$res[] = $path;
				// 	//continue;
				// }

				if($file !== '.' && $file !== '..' && $file !== '.git'){
					//array_push(, var)
					// array_push($res,traverse_all_dir($path));
					echo $path."\n";
					if(is_dir($path)){
						// traverse_all_dir($path);	
						array_push($res,traverse_all_dir($path));
					}else{
						$res[] = $path;
						$count +=1;
					}

				}
			}
			closedir($all);	
			return $res;
		}
		// }else if(file_exists($begin)){
		// }
	}

 var_dump($res);
 echo $count;

