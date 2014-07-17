<?php

	class splayer_sub_down{
		protected $splayer_sub_api_interface = 'https://www.shooter.cn/api/subapi.php';

		protected $filehash;
		protected $pathinfo;
		protected $format = 'json';
		protected $lang = '';
		protected $setop = array(); 
		
		protected function set_curl_opt($post_data){
		
			echo $post_data;
		 	
		 	$this->setop = array(CURLOPT_POST=>1,CURLOPT_POSTFIELDS =>$post_data);
		}

		protected function def_request($url,$setop=array(),$header=array()){
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
			//var_dump($options);
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

		protected function build_param(){
			return 'filehash='.$this->filehash.'&pathinfo='.$this->pathinfo.'&format='.$this->format.(empty($this->lang)?'':'&lang='.$this->lang);
		}

		function set_param($filehash,$pathinfo,$lang =''){
			$this->pathinfo = $pathinfo;
			$this->filehash = $filehash;
			$this->lang = $lang;
		}

		function  deal_transaction(){
			
			//$this->set_param($file_hash,$file_path,$lang);
			$this->set_curl_opt(urlencode($this->build_param()));
			$repons = $this->def_request($this->splayer_sub_api_interface,$this->setop);
			return $repons;
		}	

	
	}


	if(empty($argv[1]) || empty($argv[2])){
				echo 'empty param : filehas && pathinfo';
				return 0;
	}
	$obj = new splayer_sub_down;
	$obj->set_param($argv[1],$argv[2]);
	$res = $obj->deal_transaction();
	var_dump($argv);
	var_dump( $res);