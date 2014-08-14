<?php
	class soul11201_HttpRequest{
		public static  function http_request($url,$header=array(),$setop=array()){
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
				//CURLOPT_HTTPHEADER=>0,
				
				//安全相关
				CURLOPT_SSL_VERIFYPEER=>false,
				CURLOPT_SSL_VERIFYHOST=>false
			);

			foreach ($setop as $key => $value) {
				$options[$key] = $value;
			}
			//var_dump($options);
			curl_setopt_array($handle,$options);
			
			//3
			$response_data_stream = curl_exec($handle);
			//4
			curl_close($handle);
			return $response_data_stream;
		}

		public static function get_method($url,$header=array()){
			return self::http_request($url,$header);
		}

		public static function post_method($url,$post_data,$header = array()){
			$setop = array(
				CURLOPT_POST=>1,
				CURLOPT_POSTFIELDS=>$post_data
			);
			return self::http_request($url,$header,$setop);
		}
	}

	echo soul11201_HttpRequest::get_method('https://www.googleapis.com/language/translate/v2?q=how+are+you&target=zh&key={YOUR_API_KEY}');