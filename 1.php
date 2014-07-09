<?php
	
	$private_key = "";
	//echo strlen($public_key);
	//echo $pem = "-----BEGIN PRIVATE KEY-----\n".$private_key."\n-----END PRIVATE KEY----- \n";
	// $public_key_header = "-----BEGIN PUBLIC KEY-----\n";
	// $public_key_footer = "\n-----END PUBLIC KEY-----";
	// $public_key_string = $public_key_header.$public_key.$public_key_footer;
	//echo $public_key_string;
	//报错，无此函数
	$pem = convert_publicKey($private_key);
	echo $pem;
	//$pkey_id = openssl_pkey_get_private($pem);
	$pkey_id = openssl_get_privatekey($pem);
	$data = '';
	//echo strlen($data);
	var_dump($pkey_id);
	
	openssl_private_encrypt($data, $crypted, $pkey_id);
	//openssl_private_encrypt(data, crypted, key)
	$base64res = base64_encode($crypted);
	var_dump($base64res);

	function convert_publicKey($public_key){
    
	    	$public_key_string = "";
	    
	    	$count=0;
	    	for($i=0;$i<strlen($public_key);$i++){
	    		if($count<64){
	    			$public_key_string.=$public_key[$i];
	    			$count++;
	    		}else{
	    			$public_key_string.=$public_key[$i]."\r\n";
	    			$count=0;
	    		}
	    	}
	    
	    	$public_key_header = "-----BEGIN PRIVATE KEY-----\r\n";
	    	$public_key_footer = "\r\n-----END PRIVATE KEY-----\r\n";
	    	$public_key_string = $public_key_header.$public_key_string.$public_key_footer;
	    	
	    	return $public_key_string;
   }