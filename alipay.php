<?php
	class alipay{
		
		private 

		//
		// http请求
		function def_request($url,$header=array(),$setop=array()){
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
			);

			foreach ($setop as $key => $value) {
				$options[$key] = $value;
			}
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
	}




