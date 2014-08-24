<?php


class yzz_http{

		public static  function http_request(array $url,$header=array(),$setop=array()){
		//post 所有的配置需要$setop传过来

		foreach ($url as $value) {
			$handle[] = curl_init($value);
		}

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
		foreach ($handle as &$value) {
			curl_setopt_array($value,$options);
		}

		$multi_handler = curl_multi_init();

		foreach ($handle as &$value) {
			curl_multi_add_handle($multi_handler, $value);
		}





		$active = null;
		do {
		    echo $mrc = curl_multi_exec($multi_handler, $active);
		    //echo CURLM_CALL_MULTI_PERFORM;
		    echo $active;
		} while ($mrc == CURLM_CALL_MULTI_PERFORM);


		echo 'dfafd';
		while ($active && $mrc == CURLM_OK) {
		    if (curl_multi_select($multi_handler) != -1) {
		        do {
		            $mrc = curl_multi_exec($multi_handler, $active);
		        } while ($mrc == CURLM_CALL_MULTI_PERFORM);
		    }
		}








		foreach ($handle as  &$value) {
			curl_multi_remove_handle($multi_handler,$value);
		}
		curl_multi_close($multi_handler);
		return $mrc;
		
		//3
		// $response_data_stream = curl_exec($handle);
		// //4
		// curl_close($handle);
		// return $response_data_stream;
	}

	private function  yz_curl_multi_init(array &$init,&$multi_handler){
		//$multi_handler = curl_multi_init();
		foreach ($init as $value) {
			curl_multi_add_handle($multi_handler, $value);
		}
	}

	private function yz_curl_close(array &$init,&$multi_handler){
		foreach ($init as  $value) {
			curl_multi_remove_handle($multi_handler,$value);
		}
		curl_multi_close($multi_handler);
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

// $url = array(
// "http://www.baidu.com","http://www.renren.com"
// 	);
// var_dump(yzz_http::get_method($url));

$str[]='dfafd';
$str[]='afd';
$str[]='fafd';
$str1[]='dfafd';
$str1[]='afd';
$str1[]='fafd';
var_dump($str);


