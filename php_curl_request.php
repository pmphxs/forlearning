<?php
	//老是报 警告和一堆如下类似的提示，暂时未发现很好的解决方法，有博客说 CURLOPT_RETURNTRANSFER写成 ‘CURLOPT_RETURNTRANSFER’根本就是错
    //后来发下提示错误是因为常量拼写错误
	// PHP Warning:  curl_setopt_array(): Array keys must be CURLOPT constants or equivalent integer values
	// Use of undefined constant CURLOPR_MAXREDIRS - assumed 'CURLOPR_MAXREDIRS'
	//error_reporting(E_ALL & ~E_NOTICE);


	function def_request($url,$method='get',$post_data='',$header=array(),$setop=array()){
		//post 所有的配置需要$setop传过来
		//1
		$handle = curl_init($url);

		//2
		//设置options
		$options = array(
	        //请求相关设置			
			//数据流形式返回，不返还给标准输出stdout浏览器
			CURLOPT_RETURNTRANSFER=>1,

			//自定义头信息
			CURLOPT_HTTPHEADER=>$header,
			
			//重定向相关
			CURLOPT_FOLLOWLOCATION=>1,
			CURLOPT_AUTOREFERER=>1,
			CURLOPT_MAXREDIRS=>3,
			
			//等待时间
			CURLOPT_CONNECTTIMEOUT=>3,
			//响应相关的设置
			//c
			//CURLOPT_HTTPHEADER=>0,
		);

		foreach ($setop as $key => $value) {
			$options[$key] = $value;
		}

		//自定义头信息----- 没有用的。。。。居然想着让 $header 传字符串***..
		// if(empty($header)){
		// 	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		// }

		var_dump($options);
		curl_setopt_array($handle,$options);
		
		//3
		$response_data_stream = curl_exec($handle);
		if($response_data_stream === false){
			echo curl_errno($handle).'  '.curl_error($handle);
			//curl_getinfo($handle);
		}
		//4
		curl_close($handle);
		return $response_data_stream;
	}


	//$data = stream_get_contents(STDIN);

	$input = getopt('u:');
	//var_dump($input);
	$data = def_request($input['u']);
	echo $data;
